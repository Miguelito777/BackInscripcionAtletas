<h1>Hola Mundo</h1>

<form id="formValidate" class="col s12" method="POST" action="{{route('atletas.store')}}"><br>
    {{ csrf_field() }}

<label for="dpi">Inserte dpi</label>
<input type="text" name="dpi"id="dpi">
<br>
<label for="competicion">Competicon</label>
<select name="competicion" id="competicion">
    @foreach ($competiciones as $c)
   <option value="{{$c->id}}">{{$c->descripcion}}</option>
   
  @endforeach
</select>

<button type="submit" name="action">Registrar
</form>