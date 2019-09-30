<html>
<head>
    <title>
    </title>
</head>
<body>
<form class="form-group" action="/direc_res" method="POST">
    @csrf   
    <div>
    <label for="">Titulo</label>
    <input type="text" name="titulo"class="form-control">
    <label for="">Descripcion</label>
    <input type="text"name="descripcion"class="form-control">
    <label for="">Categoria</label>
    <input type="text" name="categoria" class="form-control">
    </div>
    <button type="submil" class="btn btn-prymary">guardar</button>
</form>

   
</body>
</html>