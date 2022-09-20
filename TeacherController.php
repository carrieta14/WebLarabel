<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\facades\Session;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teacher = Teacher::paginate(5);
        return view('teacher.index')
                                ->with('teacher', $teacher);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('teacher.form');
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
        $teacher = Teacher::create($request->only('id','firstName', 'lastName', 'email', 'phone', 'departament'));

        Session::flash('Mensaje', 'Registro Ha Sido Creado Con Exito');

        return redirect()->route('teacher.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function show(Teacher $teacher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function edit(Teacher $teacher)
    {
        return view('teacher.form')
                    ->with('teacher', $teacher);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Teacher $teacher)
    {
        $request->validate([
            'firstName' => 'required|max:15',
            'lastName' => 'required|max:15',
        ]);

        $teacher->firstName = $request['firstName'];
        $teacher->lastName = $request['lastName'];
        $teacher->email = $request['email'];
        $teacher->phone = $request['phone'];
        $teacher->departament = $request['departament'];
        $teacher->save();

        Session::flash('Mensaje', 'Registro Ha Sido Editado Con Exito');

        return redirect()->route('teacher.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teacher $teacher)
    {
        $teacher->delete();
        Session::flash('Mensaje', 'Registro Ha Sido Eliminado Con Exito');

        return redirect()->route('teacher.index');
    }
}
