<table>
<tr>
<td>titulo</td>
<td>descripcion</td>
<td>categoria</td>
</tr>
@foreach($almacenar as $t)
<tr>
<tr>
<td><a href="{{action('Programa_prueba@edit',$t['id'])}}">{{$t->titulo}}</a></td>
<td>{{$t->descripcion}}</td>
<td>{{$t->categoria}}</td>
</tr>
</tr>
@endforeach

</table>