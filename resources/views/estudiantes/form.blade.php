<div class="form-group {{ $errors->has('Nombres') ? 'has-error' : ''}}">
    <label for="Nombres" class="control-label">{{ 'Nombres' }}</label>
    <input class="form-control" name="Nombres" type="text" id="Nombres" required>
    {!! $errors->first('Nombres', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Apellidos') ? 'has-error' : ''}}">
    <label for="Apellidos" class="control-label">{{ 'Apellidos' }}</label>
    <input class="form-control" rows="5" name="Apellidos" type="text" id="Apellidos" required>
    {!! $errors->first('Apellidos', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Email') ? 'has-error' : ''}}">
    <label for="Email" class="control-label">{{ 'Email' }}</label>
    <input class="form-control" name="Email" type="email" id="Email" required>
    {!! $errors->first('Email', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Telefono') ? 'has-error' : ''}}">
    <label for="Telefono" class="control-label">{{ 'Telefono' }}</label>
    <input class="form-control" name="Telefono" type="number" id="Telefono" required>
    {!! $errors->first('Telefono', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('Programa') ? 'has-error' : ''}}">
    <label for="Programa" class="control-label">{{ 'Programa' }}</label>
    <select name="Programa" class="form-control" id="Programa" required>
        <option value="">Seleccionar</option>
        <option value="Bachillerato">Bachillerato</option>
        <option value="Ingles">Ingles</option>
        <option value="Preicfes">Preicfes</option>
    </select>
    {!! $errors->first('Programa', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group">
    <input class="btn btn-primary" type="submit" value="Registrarme">
</div>
