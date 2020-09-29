<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    
</head>

<body>


    <div class="container">
       
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-stripe table sm ">
                        <thead>
                            <tr class="bg-secondary text-white">
                                <th>NOMBRES</th>
                                <th>APELLIDO </th>
                                <th>CORREO</th>
                                <th>FECHA CREACION</th>
                                
                                <th>OPCIONES</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($users as $user)
                            <tr>
                                <td>{{ $user->name}}</td>
                                <td>{{ $user->lastname}}</td>
                                <td>{{ $user->email}}</td>
                                <td>{{ $user->created_at}}</td>
                               
                                <td>
                                
                                <form action="{{route('users.delete', $user->id)}}" method="POST">
                                @csrf    
                                @method('DELETE')
                                
                                
                                <a class="btn btn-info">Detalles</a>
                                <a href="{{route('users.edit', $user->id)}}" class="btn btn-warning">Editar</a>
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                                </form>
                                </td>
                                
                            </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
                    <a href=" {{ route('users.create')  }} "><button class="btn btn-info">Crear un usuario</button></a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>