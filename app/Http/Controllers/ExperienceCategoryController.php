<?php

namespace App\Http\Controllers;

use App\Models\ExperienceCategory;
use Illuminate\Http\Request;

class ExperienceCategoryController extends Controller
{
    public function index()
    {
        $experiencecategories = ExperienceCategory::orderBy('id', 'ASC')->get();

        return view('admin/experiencecategory/index', ['experience_categories' => $experiencecategories]);
    }

    public function create()
    {
        // ambil data category
        $data['experience_categories'] = ExperienceCategory::all();

        // create data (add)
        return view('admin/experiencecategory/add', $data);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
        ]);

        //menambahkan data ke database
        ExperienceCategory::create([
            'name' => $validated['name'],
        ]);

        return redirect('/experiencecategory');
    }

    public function edit($id)
    {
        $category['experience_category'] = ExperienceCategory::findOrFail($id);

        return view('admin/experiencecategory/edit', $category);
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required',
        ]);

        ExperienceCategory::where('id', $id)->update([
            'name' => $validated['name'],
        ]);

        return redirect('/experiencecategory');
    }

    public function destroy($id)
    {
        ExperienceCategory::destroy($id);

        return redirect('/experiencecategory');
    }
}
