{!! csrf_field() !!}
@if(count($setores)>0)
  <select class="" name="setor">
    @foreach($setores as $setor)
      @if(isset($periferico))
        <option value="{{$setor->id}}" <?=$setor->id == $periferico->setor?'selected':''?>>{{$setor->nome}}</option>
      @else
        <option value="{{$setor->id}}">{{$setor->nome}}</option>
      @endif

    @endforeach
  </select>
@else
  <p><a href="#">Cadastrar Setor</a></p>
@endif
<input type="text" name="modelo"  placeholder="Modelo" value="{{$periferico->modelo or old('modelo')}}">
<input type="text" name="descricao"  placeholder="Descrição" value="{{$periferico->descricao or old('descricao')}}">
<input type="text" name="interface"  placeholder="Tipo de conexão" value="{{$periferico->interface or old('interface')}}">
<input type="text" name="observacao"  placeholder="Observação" value="{{$periferico->observacao or old('observacao')}}">
