<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use App\Models\ExperienceCategory;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    public function index()
    {
        $experiences = Experience::with('experiencecategory')->orderBy('id', 'ASC')->get();
        return view('admin/experience/index', ['experiences' => $experiences]);
    }

    public function create()
    {
        // ambil data 
        $data['experience_categories'] = ExperienceCategory::all();

        // create data (add)
        return view('admin/experience/add', $data);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_pelatihan' => 'required',
            'experiencecategory_id' => 'required',
            'penyelenggara' => 'required',
            'waktu_pelaksanaan' => 'required',
            'tingkatan' => 'required',
            'deskripsi' => 'required|string|max:1000',
        ]);

        //menambahkan data ke database
        Experience::create([
            'nama_pelatihan' => $validated['nama_pelatihan'],
            'experiencecategory_id' => $validated['experiencecategory_id'],
            'penyelenggara' => $validated['penyelenggara'],
            'waktu_pelaksanaan' => $validated['waktu_pelaksanaan'],
            'tingkatan' => $validated['tingkatan'],
            'deskripsi' => $validated['deskripsi'],
        ]);

        return redirect('/experience');
    }

    public function edit($id)
    {
        $experience['experience'] = Experience::with('experiencecategory')->findOrFail($id);
        $data['experience_categories'] = ExperienceCategory::all();
        return view('admin/experience/edit', $experience, $data);
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama_pelatihan' => '',
            'experiencecategory_id' => '',
            'penyelenggara' => '',
            'waktu_pelaksanaan' => '',
            'tingkatan' => '',
            'deskripsi' => '',
        ]);

        Experience::where('id', $id)->update([
            'nama_pelatihan' => $validated['nama_pelatihan'],
            'experiencecategory_id' => $validated['experiencecategory_id'],
            'penyelenggara' => $validated['penyelenggara'],
            'waktu_pelaksanaan' => $validated['waktu_pelaksanaan'],
            'tingkatan' => $validated['tingkatan'],
            'deskripsi' => $validated['deskripsi'],
        ]);

        return redirect('/experience');
    }

    public function destroy($id)
    {
        Experience::destroy($id);

        return redirect('/experience');
    }
}
