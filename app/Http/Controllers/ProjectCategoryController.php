<?php

namespace App\Http\Controllers;

use App\Models\ProjectCategory;
use Illuminate\Http\Request;

class ProjectCategoryController extends Controller
{
    public function index()
    {
        $projectcategories = ProjectCategory::orderBy('id', 'ASC')->get();

        return view('admin/projectcategory/index', ['blog_categories' => $projectcategories]);
    }

    public function create()
    {
        // ambil data category
        $data['blog_categories'] = ProjectCategory::all();

        // create data (add)
        return view('admin/projectcategory/add', $data);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
        ]);

        //menambahkan data ke database
        ProjectCategory::create([
            'name' => $validated['name'],
        ]);

        return redirect('/projectcategory');
    }

    public function edit($id)
    {
        $category['blog_category'] = ProjectCategory::findOrFail($id);

        return view('admin/projectcategory/edit', $category);
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required',
        ]);

        ProjectCategory::where('id', $id)->update([
            'name' => $validated['name'],
        ]);

        return redirect('/projectcategory');
    }

    public function destroy($id)
    {
        ProjectCategory::destroy($id);

        return redirect('/projectcategory');
    }
}
