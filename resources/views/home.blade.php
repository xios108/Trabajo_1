<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form action="{{route('add_task')}}" method="post">
        <input type="text" name="title" placeholder="title tarea" required>
        <input type="text" name="description" placeholder="description" required>
        <select name="" id="">
            <option value="" disabled >Select Category</option>
            @foreach ($categories as $category)
                <option value="{{$category->id}}" disabled>{{$category->nombre}}</option>
            @endforeach
        </select>
        <input type="submit" value="Add tarea">
    </form>

    <table>
        <thead>
            <th>ID</th>
            <th>Nombre tarea</th>
            <th>Descripcion tarea</th>
            <th colspan="2">ACTIONS</th>
        </thead>
        <tbody>
            @foreach ($tasks as $task)
                <tr>
                    <th>{{$task->id}}</th>
                    <th>{{$task->title}}</th>
                    <th>{{$task->description}}</th>
                    <th>{{$task->created_at->format('Y-m-d-H:i:s')}}</th>
                    <td>
                        <a href="{{route('editar_tarea', $tarea->id)}}">Editar</a>
                    </td>
                    <td>
                        <a href="{{route('eliminar_tarea', $tarea->id)}}">Eliminar</a>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
    <a href="{{route('category')}}">   
        <section>
            <h2>Crear categoria</h2>
        </section>     
            
    </a>

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
    <a href="{{route('home')}}">

    
</body>
</html>