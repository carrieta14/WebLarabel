@extends('theme.base')
@section('content')
    <div class="container py-5 text-center">
        <h1>Welcome</h1>
        <br>
        <br>
        <br>
        <table class="table table-secondary">
            <tr >
                <th>Estudents</th>
                <th>Teachers</th>
                <th>Courses</th>
            </tr>
            <tbody>
                <tr>
                    <th><img src="https://www.questionpro.com/blog/wp-content/uploads/2018/08/Encuestas-estudiantes.jpg" alt="estudiantes.jpg" width="200" height="200"></th>
                    <th><img src="https://img.freepik.com/free-vector/online-courses-concept_52683-38186.jpg?w=740&t=st=1663649080~exp=1663649680~hmac=a616cc9ffadc8c2be33ed31af20b16ff5a9e8eaba5689896a5bfc917f8f90b03" alt="teachers.jpg" width="200" height="200"></th>
                    <th><img src="https://cefne.com/wp-content/uploads/2021/06/foto-cefne2-1536x1024.jpg" alt="courses.jpg" width="200" height="200"></th>
                </tr>
                <tr>
                    <th> <a href="{{ route('estudent.index') }}" class="btn btn-primary">Estudents</a></th>
                    <th><a href="{{ route('teacher.index') }}" class="btn btn-warning">Teachers</a></th>
                    <th><a href="{{ route('course.index') }}" class="btn btn-light">Courses</a></th>
                </tr>
            </tbody>
        </table>
       
        
        
    </div
@endsection 