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
    <input type="text" name="nome" value="{{isset($registro->nome) ? $registro->nome : ''}}"
           class="validate @error('nome') invalid @enderror">
    <label>Nome</label>
</div>


<div class="input-field">
    <input type="email" name="email" value="{{isset($registro->email) ? $registro->email : ''}}"
           class="validate @error('email') invalid @enderror">
    <label>Email</label>
</div>


<div class="input-field">
    <input type="url" name="website" value="{{isset($registro->website) ? $registro->website : ''}}"
           class="validate @error('website') invalid @enderror">
    <label>Website</label>
</div>

<div class="file-field input-field">
    <div class="btn blue">
        <span>Logo</span>
        <input type="file" name="logo">
    </div>
    <div class="file-path-wrapper">
        <input class="file-path validate" type="text">
    </div>
</div>

@if(isset($registro->logo))
    <div class="input-field">
        <img width="150px" src="{{asset($registro->logo)}}"/>
    </div>
@endif

