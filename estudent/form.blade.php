@extends('theme.base')
@section('content')
    <div class="container py-5 text-center">
        @if(isset($estudent))
          <h1>Editar Estudiante</h1>
        @else
          <h1>Crear Estudiante</h1>
        @endif

        @if(isset($estudent))
        <form action="{{ route('estudent.update', $estudent) }}" method="POST">
            @method('PUT')
        @else
        <form action="{{ route('estudent.store') }}" method="POST">
        @endif
        @csrf
        <div class="mb-3">
            <label for="firstName" class="form-lable">Nombre</label>
            <input type="text" name="firstName" class="form-control" placeholder="Nombre" value="{{ old('firstName') ??@$estudent->firstname}}">
            <p class="form-text">Escriba el nombre del estudiante</p>
            @error('firstName')
                <p class="form-text text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="lastName" class="form-lable">Apellido</label>
            <input type="text" name="lastName" class="form-control" placeholder="Apellido" value="{{ old('lastName') ??@$estudent->lastName}}">
            <p class="form-text">Escriba el apellido del estudiante</p>
            @error('lastName')
                <p class="form-text text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="email" class="form-lable">Email</label>
            <input type="email" name="email" class="form-control" placeholder="Email" value="{{ old('email') ??@$estudent->email}}">
            <p class="form-text">Escriba el email del estudiante</p>
            @error('email')
                <p class="form-text text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="semester" class="form-lable">Semestre</label>
            <input type="number" name="semester" class="form-control" placeholder="Semestre" value="{{ old('semester') ??@$estudent->semester}}">
            <p class="form-text">Escriba el semestre del estudiante</p>
            @error('semester')
                <p class="form-text text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="career" class="form-lable">Carrera</label>
            <input type="text" name="career" class="form-control" placeholder="Carrera" value="{{ old('career') ??@$estudent->career}}">
            <p class="form-text">Escriba la carrera del estudiante</p>
            @error('career')
                <p class="form-text text-danger">{{ $message }}</p>
            @enderror
        </div>
        @if(isset($estudent))
        <button type="submit" class="btn btn-primary">Edit Student</button>
        @else
        <button type="submit" class="btn btn-primary">Save Student</button>
        @endif
        
    </form>
    </div
@endsection      