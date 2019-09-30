<html>
<head>
    <title>
    </title>
</head>
<body>
<form class="form-group" action="/direc_res/{{$m_tiqet->id}}" method="POST">
    @csrf
    <input type="hidden" name="_method" value="PUT">
    <p>Editar Registro</p>
    <div>
    <label for="">Titulo</label>
    <input type="text" name="titulo"class="form-control" value="{{$m_tiqet->titulo}}">
    <label for="">Descripcion</label>
    <input type="text"name="descripcion"class="form-control"value="{{$m_tiqet->descripcion}}">
    <label for="">Categoria</label>
    <input type="text" name="categoria" class="form-control"value="{{$m_tiqet->categoria}}">
    </div>
    
    <button type="submil" class="btn btn-prymary">actualizar</button>
</form>

<form class="form-group" action="/direc_res/{{$m_tiqet->id}}" method="POST">
    @csrf
    <input type="hidden" name="_method" value="DELETE">
    <button type="submil" class="btn btn-prymary">eliminar</button>
</form>
   
</body>
</html>