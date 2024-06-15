<?php

namespace App\Http\Controllers;

use App\DataTables\EmployeDataTable;
use App\Models\Employe;
use Illuminate\Http\Request;

class EmployeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(EmployeDataTable $employeDataTable)
    {
        return $employeDataTable->render('pages.employe.index');
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.employe.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $id = $request->input('id');
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:employe,email,' . $id,
            'phone' => 'required|unique:employe,phone,' . $id . '|numeric',
            'salary' => 'required',
            'address' => 'required',
        ]);
        $employe = Employe::create($request->all());
        return redirect()->route('employe.index')->with('success', 'Data berhasil ditambahkan.');
    }

    public function show($id)
    {
        $employe = Employe::findOrFail($id);
        return view('pages.employe.show', compact('employe'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $employe = Employe::findOrFail($id);
        return view('pages.employe.edit', compact('employe'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:employe,email,' . $id,
            'phone' => 'required|unique:employe,phone,' . $id . '|numeric',
            'salary' => 'required',
            'address' => 'required',
        ]);
        $employe = Employe::findOrFail($id);
        $employe->update($request->all());
        return redirect()->route('employe.index')->with('success', 'Data berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $employe = Employe::findOrFail($id);
        $employe->delete();
        return redirect()->route('employe.index')->with('success', 'Data berhasil dihapus.');
    }
}
