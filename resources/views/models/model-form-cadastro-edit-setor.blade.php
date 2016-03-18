{!! csrf_field() !!}
<input type="text" name="nome"  placeholder="Nome" value="{{$setor->nome or old('nome')}}">
<input type="text" name="descricao"  placeholder="Descrição" value="{{$setor->descricao or old('descricao')}}">
