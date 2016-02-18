{!! csrf_field() !!}
<input type="text" name="modelo"  placeholder="modelo" value="{{$periferico->modelo or old('modelo')}}">
<input type="text" name="descricao"  placeholder="Descrição" value="{{$periferico->descricao or old('descricao')}}">
<input type="text" name="interface"  placeholder="Tipo de conexão" value="{{$periferico->interface or old('interface')}}">
<input type="text" name="observacao"  placeholder="Observação" value="{{$periferico->observacao or old('observacao')}}">
