<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Seo;
use App\Models\Vacancies;
use Illuminate\Http\Request;

class VacanciesController extends Controller
{
    public function index()
    {
        $vacancies = Vacancies::paginate(14);
        $seo = Seo::firstWhere('page', Seo::VACANCIES_PAGE);
        return view('main.vacancies.index', compact('vacancies', 'seo'));
    }

    public function page($link)
    {
        $vacinci = Vacancies::firstWhere('link', $link);
        return view('main.vacancies.page', compact('link'));
    }
}
