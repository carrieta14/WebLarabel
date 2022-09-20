@extends('theme.base')
@section('content')
    <div class="container py-5 text-center">
        <h1>Estudents List</h1>
        <a href="{{ route('estudent.create') }}" class="btn btn-dark">Create Estudent</a>
        
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
                <th>Semestre</th>
                <th>Carrera</th>
            </thead>
            <tbody>
            @forelse ($estudent as $detail)

                <tr>
                  <th>{{$detail->id}}</th>
                  <th>{{$detail->firstName}}</th>
                  <th>{{$detail->lastName}}</th>
                  <th>{{$detail->email}}</th>
                  <th>{{$detail->semester}}</th>
                  <th>{{$detail->career}}</th>
                  <th> <a href="{{ route('estudent.edit', $detail)}}" class="btn btn-warning">Edit</a>
                
                  <form action="{{ route('estudent.destroy', $detail)}}" method="POST" class="d-inline">
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
        @if($estudent->count())
        {{ $estudent->links()}};
        @endif
    </div
@endsection   