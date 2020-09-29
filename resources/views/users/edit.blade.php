<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

</head>
<body>
    <h1 class="text-center">Actualizar Usuario</h1>

    <form action="{{route('users.update',$users->id)}}" method="post" class="container-sm">
    @csrf
    @method('PUT')

    <div class="form-group">
    <label for="names">Nombres </label>
        <input type="text" name="name" class="form-control" value="{{$users->name}}" >
    </div>
    <div class="form-group">
    <label for="lastname">Apellidos</label>
    <input type="text" name="lastname"  class="form-control" value="{{$users->lastname}}">
    </div>
    <div class="form-group">
    <label for="lastname">Email</label>
    <input type="text" name="email"  class="form-control" value="{{$users->email}}"> <br>
    <a href="{{route('users.index')}}" class="btn btn-primary" >Cancelar</a>
    <button type="submit" class="btn btn-warning float-right">Actualizar</button>
    </div>








    </form>
</body>
</html>