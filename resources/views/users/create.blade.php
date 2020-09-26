<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

</head>
<body>
    <h1 class="text-center">Registrar Usuarios</h1>
    
    <form action="{{ route('users.store')}}" method="post" class="container-sm">
    @csrf

    <div class="form-group">
    <label for="names">Nombres </label>
        <input type="text" name="name" class="form-control">
    </div>
    <div class="form-group">
    <label for="lastname">Apellidos</label>
    <input type="text" name="lastname"  class="form-control">
    </div>
    <div class="form-group">
    <label for="gmail">Gmail</label>
    <input type="email" name="email"  class="form-control">
    </div>
    <button class="btn btn-info" type="submit">Enviar </button>
    <a class="float-right" href=" {{ route('users.index') }}">Regresar pestaña</a>
    
    </form>
    
</body>
</html>