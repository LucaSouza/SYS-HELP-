{!! csrf_field() !!}
<input type="text" name="modelo"  placeholder="modelo" value="{{$computador->modelo or old('modelo')}}">
<input type="text" name="so"  placeholder="Sistema Operacional" value="{{$computador->so or old('so')}}">
<input type="text" name="observacao"  placeholder="Observação" value="{{$computador->observacao or old('observacao')}}">
<input type="text" name="ip"  placeholder="TCP/IP" value="{{$computador->ip or old('ip')}}">
<input type="text" name="email"  placeholder="Email" value="{{$computador->email or old('email')}}">
<input type="text" name="nome"  placeholder="Nome" value="{{$computador->nome or old('nome')}}">
<input type="text" name="grupo"  placeholder="Grupo" value="{{$computador->grupo or old('grupo')}}">
<input type="text" name="programas"  placeholder="Programas" value="{{$computador->programas or old('programas')}}">
