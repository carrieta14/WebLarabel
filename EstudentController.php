<?php

namespace App\Http\Controllers;

use App\Models\Estudent;
use Illuminate\Http\Request;
use Illuminate\Support\facades\Session;

class EstudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estudent = Estudent::paginate(5);
        return view('estudent.index')
                                ->with('estudent', $estudent);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('estudent.form');
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
            'firstName' => 'required|max:15',
            'lastName' => 'required|max:15'
        ]);
        $estudent = Estudent::create($request->only('id','firstName', 'lastName', 'email', 'semester', 'career'));

        Session::flash('Mensaje', 'Registro Ha Sido Creado Con Exito');

        return redirect()->route('estudent.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Estudent  $estudent
     * @return \Illuminate\Http\Response
     */
    public function show(Estudent $estudent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Estudent  $estudent
     * @return \Illuminate\Http\Response
     */
    public function edit(Estudent $estudent)
    {
        return view('estudent.form')
                    ->with('estudent', $estudent);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Estudent  $estudent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Estudent $estudent)
    {
        $request->validate([
            'firstName' => 'required|max:15',
            'lastName' => 'required|max:15',
        ]);

        $estudent->firstName = $request['firstName'];
        $estudent->lastName = $request['lastName'];
        $estudent->email = $request['email'];
        $estudent->semester = $request['semester'];
        $estudent->career = $request['career'];
        $estudent->save();

        Session::flash('Mensaje', 'Registro Ha Sido Editado Con Exito');

        return redirect()->route('estudent.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Estudent  $estudent
     * @return \Illuminate\Http\Response
     */
    public function destroy(Estudent $estudent)
    {
        $estudent->delete();
        Session::flash('Mensaje', 'Registro Ha Sido Eliminado Con Exito');

        return redirect()->route('estudent.index');
    }
}
