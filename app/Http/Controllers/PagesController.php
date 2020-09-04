<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    /*
     * Страница "О нас"
     */
    public function about() {
        return view('about');
    }

    /*
     * Страница "Строительство"
     */
    public function building() {
        return view('building');
    }

    /*
     * Страница "Контакты"
     */
    public function contacts() {
        return view('contacts');
    }

    /*
     * Страница "Карточка единицы спецтехники"
     */
    public function machine() {
        return view('machine');
    }

    /*
     * Страница "Каталог категорий спецтехники"
     */
    public function machinesAll() {
        return view('machines_all');
    }

    /*
     * Страница "Каталог одной категории"
     */
    public function machinesCategory(string $category) {
        //echo $category;
        return view('machines_category');
    }

    /*
     * Страница "Главная"
     */
    public function main() {
        return view('main');
    }

    /*
     * Страница "Вакансии"
     */
    public function vacancies() {
        return view('vacancies');
    }
}
