@if ($errors->any())
    <div class="card-panel teal lighten-2">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


<div class="input-field">
    <input type="text" name="first_name" value="{{isset($registro->first_name) ? $registro->first_name : ''}}"
           class="validate @error('first_name') invalid @enderror">
    <label>Primeiro Nome</label>
</div>


<div class="input-field">
    <input type="text" name="last_name" value="{{isset($registro->last_name) ? $registro->last_name : ''}}"
           class="validate @error('last_name') invalid @enderror">
    <label>Segundo Nome</label>
</div>


<div class="input-field">
    <input type="email" name="email" value="{{isset($registro->email) ? $registro->email : ''}}"
           class="validate @error('email') invalid @enderror">
    <label>Email</label>
</div>


<div class="input-field">
    <input type="tel" name="tel" value="{{isset($registro->tel) ? $registro->tel : ''}}"
           class="validate @error('tel') invalid @enderror">
    <label>Telefone</label>
</div>


<div class="input-field col s12">
    <select name="empresa_id">
        @foreach($empresas as $empresa)
            <option value="{{$empresa->id}}">{{$empresa->nome}}</option>
        @endforeach
    </select>
    <label>Empresa</label>
</div>


