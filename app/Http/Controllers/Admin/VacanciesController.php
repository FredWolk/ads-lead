<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Vacancies\StoreVacanciesRequest;
use App\Http\Requests\Vacancies\UpdateVacanciesRequest;
use App\Models\Vacancies;

class VacanciesController extends Controller
{
    public function index()
    {
        $vacancies = Vacancies::all();
        return view('admin.vacancies.index', compact('vacancies'));
    }

    public function create()
    {
        return view('admin.vacancies.create');
    }

    public function store(StoreVacanciesRequest $request)
    {
        $data = $request->validated();
        $vacancies = Vacancies::create($data);
        return redirect()->route('vacancies.show', $vacancies->id);
    }

    public function show(Vacancies $vacancy)
    {
        return view('admin.vacancies.show', compact('vacancy'));
    }

    public function edit(Vacancies $vacancy)
    {
        return view('admin.vacancies.edit', compact('vacancy'));
    }

    public function update(UpdateVacanciesRequest $request, Vacancies $vacancy)
    {
        $data = $request->validated();
        $vacancy->update($data);
        return redirect()->route('vacancies.show', $vacancy->id);
    }

    public function destroy(Vacancies $vacancy)
    {
        $vacancy->delete();
        return redirect()->route('vacancies.index');
    }
}
