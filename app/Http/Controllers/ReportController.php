<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reports = Report::orderBy('id')->paginate(10);
        return view('reports.index',compact('reports'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('reports.create');

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
        $report = $request->all();

        Report::create($report);
        return redirect()->route('reports.index')->with('success', 'Catalogo creada con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Report  $category
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        $report = Report::find($id);

        return view('categories.show',compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Report  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $report = Report::find($id);

        return view('reports.edit',compact('report'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Report  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $request->validate([
            'name'=>'required',
            'description'=>'required',
        ]);
        $catalogo=Report::find($id);

        $report = $request->all();

        $catalogo->update($report);
        return redirect()->route('reports.index')->with('success', 'Catalogo actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Report $report)
    {
        //
        $report->delete();
        return redirect()->route('reports.index')->with('success', 'Categoria eliminada con exito');
    }
}
