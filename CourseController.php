<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /**$course = DB::table('courses')
                     ->select('courses.id', 'courses.name', 'courses.level', 'courses.hours','teachers.lastName as profesor')
                     ->leftJoin('teachers', 'teachers.id', '=', 'courses.teacher.id')
                     ->get();
        $aux = 0;
foreach ($courses as $course) {
    $courses[$aux]->estudents = DB::table('alumno_curso')
                                ->select( 'estudents.firstName as estudents', 'estudents.lastName as estudents')
                                ->leftJoin('alumnos', 'estudents.id', '=', 'alumno_curso.alumno_id')
                                ->where('alumno_curso.curso_id', '=', $course->id)
                                ->get();
    $aux++;
}**/
$courses = Course::paginate(5);
        return view('course.index')
                                ->with('courses', $courses);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        //
    }
}
