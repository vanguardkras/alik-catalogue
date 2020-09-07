<?php

namespace App\Http\Controllers;

use App\Machine;
use App\MachineCategory;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * Страница "О нас"
     */
    public function about() {
        return view('about');
    }

    /**
     * Страница "Строительство"
     */
    public function building() {
        return view('building');
    }

    /**
     * Страница "Контакты"
     */
    public function contacts() {
        return view('contacts');
    }

    /**
     * Страница "Карточка единицы спецтехники"
     */
    public function machine($id) {
        $machine = Machine::with(['parameters', 'category'])->where('id', $id)->first();
        return view('machine', compact('machine'));
    }

    /**
     * Страница "Каталог категорий спецтехники"
     */
    public function machinesAll() {
        $categories = MachineCategory::all();
        return view('machines_all', compact('categories'));
    }

    /**
     * Страница "Каталог одной категории"
     * @param string $category
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function machinesCategory(string $category) {
        $category = MachineCategory::getCategoryByName($category);
        $machines = Machine::where('machine_category_id', $category->id)->get();
        return view('machines_category', compact('category', 'machines'));
    }

    /**
     * Страница "Главная"
     */
    public function main() {

        $machines = MachineCategory::all();

        return view('main', compact('machines'));
    }

    /**
     * Страница "Вакансии"
     */
    public function vacancies() {
        return view('vacancies');
    }
}
