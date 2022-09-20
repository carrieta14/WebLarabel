@extends('theme.base')
@section('content')
    <div class="container py-5 text-center">
        @if(isset($teacher))
          <h1>Editar Profesor</h1>
        @else
          <h1>Crear Profesor</h1>
        @endif

        @if(isset($teacher))
        <form action="{{ route('teacher.update', $teacher) }}" method="POST">
            @method('PUT')
        @else
        <form action="{{ route('teacher.store') }}" method="POST">
        @endif
        @csrf
        <div class="mb-3">
            <label for="firstName" class="form-lable">Nombre</label>
            <input type="text" name="firstName" class="form-control" placeholder="Nombre" value="{{ old('firstName') ??@$teacher->firstname}}">
            <p class="form-text">Escriba el nombre del profesor</p>
            @error('firstName')
                <p class="form-text text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="lastName" class="form-lable">Apellido</label>
            <input type="text" name="lastName" class="form-control" placeholder="Apellido" value="{{ old('lastName') ??@$teacher->lastName}}">
            <p class="form-text">Escriba el apellido del profesor</p>
            @error('lastName')
                <p class="form-text text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="email" class="form-lable">Email</label>
            <input type="email" name="email" class="form-control" placeholder="Email" value="{{ old('email') ??@$teacher->email}}">
            <p class="form-text">Escriba el email del profesor</p>
            @error('email')
                <p class="form-text text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="phone" class="form-lable">Telefono</label>
            <input type="number" name="phone" class="form-control" placeholder="Telefono" value="{{ old('phone') ??@$teacher->phone}}">
            <p class="form-text">Escriba el telefono del profesor</p>
            @error('phone')
                <p class="form-text text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="departament" class="form-lable">Departamento</label>
            <input type="text" name="departament" class="form-control" placeholder="Departamento" value="{{ old('departament') ??@$teacher->departament}}">
            <p class="form-text">Escriba el departamento del profesor</p>
            @error('departament')
                <p class="form-text text-danger">{{ $message }}</p>
            @enderror
        </div>
        @if(isset($teacher))
        <button type="submit" class="btn btn-primary">Edit Teacher</button>
        @else
        <button type="submit" class="btn btn-primary">Save Teacher</button>
        @endif
        
    </form>
    </div
@endsection      