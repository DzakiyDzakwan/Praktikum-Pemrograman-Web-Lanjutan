<?php

namespace App\Http\Controllers;

use App\Models\Matakuliah;
use Illuminate\Http\Request;

class MatakuliahController extends Controller
{
    public function index() {
        $matkul = Matakuliah::get();
        return view('matkul', compact('matkul'));
    }

    public function create() {
        return view('create-matkul');
    }

    public function store(Request $request) {
        Matakuliah::create([
            'nama' => $request->matkul,
        ]);

        return redirect('/mata-kuliah');
    }

    public function edit($id) {
        //dd($id);
        $matkul = Matakuliah::where('id', $id)->get();
        // dd($matakuliah);
        return view('edit-matakuliah', compact('matkul'));
    }

    public function update(Request $request) {
        // dd($request->all());
        Matakuliah::where('id', $request->matkul_id)->update([
            'nama' => $request->matkul,
        ]);
        return redirect('/');
    }

    public function destroy($id) {
        //dd($id);
        Matakuliah::where('id', $id)->delete();
        return back();
    }
}
