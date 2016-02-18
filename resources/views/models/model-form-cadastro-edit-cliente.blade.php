{!! csrf_field() !!}
 <input type="text" name="nome" placeholder="nome" value="{{$cliente->nome or old('nome')}}">
 <input type="text" name="identificacao" placeholder="CPF ou CNPJ" value="{{$cliente->identificacao or old('identificacao')}}">
 <input type="text" name="telefone" placeholder="Telefone" value="{{$cliente->telefone or old('telefone')}}">
 <input type="text" name="celular" placeholder="Celular" value="{{$cliente->celular or old('celular')}}">
 <input type="text" name="rua" placeholder="Rua" value="{{$cliente->rua or old('rua')}}">
 <input type="text" name="numero" placeholder="Numero" value="{{$cliente->numero or old('numero')}}">
 <input type="text" name="complemento" placeholder="Complemento" value="{{$cliente->complemento or old('complemento')}}">
 <input type="text" name="cep" placeholder="CEP" value="{{$cliente->cep or old('cpf')}}">
 <input type="text" name="cidade" placeholder="Cidade" value="{{$cliente->cidade or old('cidade')}}">
 <input type="text" name="uf" placeholder="UF" value="{{$cliente->uf or old('uf')}}">
