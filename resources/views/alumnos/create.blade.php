<!-- resources/views/items/alumnos.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Agregar Alumno</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="container mt-5">
    <h1>Registrar Alumnos</h1>
<!-- Alert for Errors Messages -->
@if($errors->any())
     <div class="alert alert-danger">
         <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
         </ul>
     </div>
    @endif
    <form action="{{ route('alumnos.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nombre Alumno*</label>
            <input type="text" name="name" class="form-control" id="name" value="{{old('name')}}" required>
        </div>
        <div class="mb-3">
            <label for="last_name" class="form-label">Apellido Alumno*</label>
            <input type="text" name="last_name" class="form-control" id="last_name" value="{{old('last_name')}}" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">email Alumno*</label>
            <input type="email" name="email" class="form-control" id="email" value="{{old('email')}}" required>
        </div>
        <div class="mb-3">
            <label for="edad" class="form-label">edad Alumno*</label>
            <input type="number" name="edad" class="form-control" id="edad" value="{{old('edad')}}" required>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
        <a href="{{ route('alumnos.index') }}" class="btn btn-secondary">Regresar</a>
    </form>
</body>
</html>