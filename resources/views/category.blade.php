<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('add_category')}}" method="post">
        @csrf
        <input type="text" name="nombre" placeholder="nombre Categoria">
        <input type="submit" value="Crear Categoria">
    </form>
    <h2>list Categoria</h2>
    <table> 
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th colspan="2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)
                <tr>
                    <td>{{$category->id}}</td>
                    <td>{{$category->name}}</td>
                    <td>
                        <a href="{{route('editar_categoria.view', $category->id)}}">Editar</a>
                    </td>
                    <td>
                        <a href="{{route('eliminar_categoria', $category->id)}}">Eliminar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>


</body>
</html>