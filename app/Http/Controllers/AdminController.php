<?php

namespace App\Http\Controllers;

use App\Machine;
use App\MachineCategory;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.basic:,name');
    }

    public function catalog() {
        $categories = MachineCategory::with('categoryParameters')->get();
        $machines = Machine::with('parameters')->get();
        return view('admin.catalog', compact('categories', 'machines'));
    }

    public function createMachine() {

    }

    public function updateMachine() {

    }

    public function deleteMachine() {

    }
}
