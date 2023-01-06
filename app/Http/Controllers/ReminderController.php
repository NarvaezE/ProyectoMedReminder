<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReminderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reminders = Reminder::orderBy('id')->paginate(10);
        return view('reminders.index',compact('reminders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('reminders.create');

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
        $reminder = $request->all();

        Reminder::create($reminder);
        return redirect()->route('reminders.index')->with('success', 'Catalogo creada con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reminder  $category
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        $reminder = Reminder::find($id);

        return view('reminders.show',compact('reminder'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reminder  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $reminder = Reminder::find($id);

        return view('reminders.edit',compact('reminder'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reminder  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $request->validate([
            'name'=>'required',
            'description'=>'required',
        ]);
        $catalogo=Reminder::find($id);

        $reminder = $request->all();

        $catalogo->update($reminder);
        return redirect()->route('reminders.index')->with('success', 'Catalogo actualizado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reminder $reminder)
    {
        //
        $reminder->delete();
        return redirect()->route('reminders.index')->with('success', 'Categoria eliminada con exito');
    }
}
