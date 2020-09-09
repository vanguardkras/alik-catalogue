<?php

namespace App\Http\Controllers;

use App\Machine;
use App\MachineCategory;
use App\Parameter;
use Gumlet\ImageResize;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.basic:,name');
    }

    /**
     * Каталог администратора
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function catalog()
    {
        $categories = MachineCategory::with('categoryParameters')->get();
        $machines = Machine::with('parameters')->get();
        return view('admin.catalog', compact('categories', 'machines'));
    }

    public function createMachine(Request $request)
    {
        $machine = new Machine();
        $machine->name = $request->name;
        $machine->machine_category_id = $request->machine_category_id;
        $machine->price = $request->price;

        $this->uploadImage($machine, $request);

        $machine->save();

        foreach ($request->parameters as $id => $value) {
            $parameter = new Parameter;
            $parameter->value = $value;
            $parameter->machine_id = $machine->id;
            $parameter->category_parameter_id = $id;
            $parameter->save();
        }

        return back();
    }

    /**
     * Обновить страницы
     *
     * @param Machine $machine
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function updateMachine(Machine $machine, Request $request)
    {
        $machine->name = $request->name;
        $machine->price = $request->price;

        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($machine->image);
            $this->uploadImage($machine, $request);
        }

        $machine->save();

        foreach ($request->parameters as $id => $value) {
            $parameter = Parameter::find($id);
            $parameter->value = $value;
            $parameter->save();
        }

        return back();
    }

    /**
     * Удалить единицу техники из каталога
     *
     * @param Machine $machine
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function deleteMachine(Machine $machine)
    {
        Storage::disk('public')->delete($machine->image);

        $machine->delete();

        return back();
    }

    /**
     * Updload the machine image
     *
     * @param Machine $machine
     * @param Request $request
     * @throws \Gumlet\ImageResizeException
     */
    private function uploadImage(Machine $machine, Request $request)
    {
        $path = $request->file('image')->store('machines', 'public');
        $machine->image = $path;

        $imageFullPath = storage_path('app/public/' . $path);

        $imageResize = new ImageResize($imageFullPath);
        $imageResize->crop(640, 480);
        $imageResize->save($imageFullPath, IMAGETYPE_JPEG, 90);
    }
}
