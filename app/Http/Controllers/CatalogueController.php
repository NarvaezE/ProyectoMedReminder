<?php

namespace App\Http\Controllers;
use App\Models\Catalogue;
use Illuminate\Http\Request;

class CatalogueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $catalogues = Catalogue::orderBy('id')->paginate(10);
        return view('catalogues.index',compact('catalogues'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('catalogues.create');

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
        $catalogue = $request->all();

        Catalogue::create($catalogue);
        return redirect()->route('catalogues.index')->with('success', 'Catalogo creada con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Catalogue  $category
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        $catalogue = Catalogue::find($id);

        return view('catalogues.show',compact('catalogue'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Catalogue  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $catalogue = Catalogue::find($id);

        return view('catalogues.edit',compact('catalogue'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Catalogue  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $request->validate([
            'name'=>'required',
            'description'=>'required',
        ]);
        $catalogo=Catalogue::find($id);

        $catalogue = $request->all();

        $catalogo->update($catalogue);
        return redirect()->route('catalogues.index')->with('success', 'Catalogo actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Catalogue $catalogue)
    {
        //
        $catalogue->delete();
        return redirect()->route('catalogues.index')->with('success', 'Categoria eliminada con exito');
    }
}
