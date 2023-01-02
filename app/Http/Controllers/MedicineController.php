<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MedicineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medicines = Medicine::orderBy('id')->paginate(10);
        return view('medicines.index',compact('medicines'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('medicines.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'description'=>'required',
        ]);
        $medicine = $request->all();

        Medicine::create($medicine);
        return redirect()->route('medicines.index')->with('success', 'Catalogo creada con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Medicine  $category
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        $medicine = Medicine::find($id);

        return view('medicines.show',compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Medicine  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $medicine = Medicine::find($id);

        return view('medicines.edit',compact('medicine'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Medicine  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $request->validate([
            'name'=>'required',
            'description'=>'required',
        ]);
        $catalogo=Medicine::find($id);

        $medicine = $request->all();

        $catalogo->update($medicine);
        return redirect()->route('medicines.index')->with('success', 'Catalogo actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Medicine $medicine)
    {
        //
        $medicine->delete();
        return redirect()->route('medicines.index')->with('success', 'Categoria eliminada con exito');
    }
}
