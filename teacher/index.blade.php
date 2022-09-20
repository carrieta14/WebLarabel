@extends('theme.base')
@section('content')
    <div class="container py-5 text-center">
        <h1>Teacher List</h1>
        <a href="{{ route('teacher.create') }}" class="btn btn-dark">Create Teacher</a>
        
        @if(Session::has('Mensaje'))
            <div class="alert alert-info my-5">
                {{ Session::get('Mensaje')}}
            </div>
        @endif

        <table class="table">
            <thead>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Email</th>
                <th>Telefono</th>
                <th>Departamento</th>
            </thead>
            <tbody>
            @forelse ($teacher as $detail)

                <tr>
                  <th>{{$detail->id}}</th>
                  <th>{{$detail->firstName}}</th>
                  <th>{{$detail->lastName}}</th>
                  <th>{{$detail->email}}</th>
                  <th>{{$detail->phone}}</th>
                  <th>{{$detail->departament}}</th>
                  <th> <a href="{{ route('teacher.edit', $detail)}}" class="btn btn-warning">Edit</a>
                
                  <form action="{{ route('teacher.destroy', $detail)}}" method="POST" class="d-inline">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estas seguro que quieres eliminar este registro?')">Delete</button>
                  </form>
                </th>
                </tr>    
            </tbody>
            @empty

            @endforelse
        </table>    
        @if($teacher->count())
        {{ $teacher->links()}};
        @endif
    </div
@endsection   