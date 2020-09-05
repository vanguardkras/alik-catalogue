<?php

namespace App\Http\Controllers;

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
    public function machine() {
        return view('machine');
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
     */
    public function machinesCategory(string $category) {
        //echo $category;
        return view('machines_category');
    }

    /**
     * Страница "Главная"
     */
    public function main() {

        $machines = [
            [
                'image' => 'main/machine-1.webp',
                'type' => 'Экскаватор',
                'model' => 'Hyundai R140W-9S',
            ],
            [
                'image' => 'main/machine-1.webp',
                'type' => 'Экскаватор',
                'model' => 'Hyundai R140W-9S',
            ],
            [
                'image' => 'main/machine-1.webp',
                'type' => 'Экскаватор',
                'model' => 'Hyundai R140W-9S',
            ],
            [
                'image' => 'main/machine-1.webp',
                'type' => 'Экскаватор',
                'model' => 'Hyundai R140W-9S',
            ],

        ];

        return view('main', compact('machines'));
    }

    /**
     * Страница "Вакансии"
     */
    public function vacancies() {
        return view('vacancies');
    }
}
