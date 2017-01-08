<div class="form-group {{ $errors->has('fichacadastral') ? 'has-error' : ''}}">
    {!! Form::label('fichacadastral', 'Fichacadastral', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('fichacadastral', null, ['class' => 'form-control']) !!}
        {!! $errors->first('fichacadastral', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('dtcadastro') ? 'has-error' : ''}}">
    {!! Form::label('dtcadastro', 'Dtcadastro', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::date('dtcadastro', null, ['class' => 'form-control']) !!}
        {!! $errors->first('dtcadastro', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('cartaosus') ? 'has-error' : ''}}">
    {!! Form::label('cartaosus', 'Cartaosus', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('cartaosus', null, ['class' => 'form-control']) !!}
        {!! $errors->first('cartaosus', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('nomeprofissional') ? 'has-error' : ''}}">
    {!! Form::label('nomeprofissional', 'Nomeprofissional', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('nomeprofissional', null, ['class' => 'form-control']) !!}
        {!! $errors->first('nomeprofissional', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('endprofissional') ? 'has-error' : ''}}">
    {!! Form::label('endprofissional', 'Endprofissional', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::textarea('endprofissional', null, ['class' => 'form-control']) !!}
        {!! $errors->first('endprofissional', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('numendprofissional') ? 'has-error' : ''}}">
    {!! Form::label('numendprofissional', 'Numendprofissional', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('numendprofissional', null, ['class' => 'form-control']) !!}
        {!! $errors->first('numendprofissional', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('complendprofissional') ? 'has-error' : ''}}">
    {!! Form::label('complendprofissional', 'Complendprofissional', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('complendprofissional', null, ['class' => 'form-control']) !!}
        {!! $errors->first('complendprofissional', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('bairro') ? 'has-error' : ''}}">
    {!! Form::label('bairro', 'Bairro', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('bairro', null, ['class' => 'form-control']) !!}
        {!! $errors->first('bairro', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('cidadeprofissional') ? 'has-error' : ''}}">
    {!! Form::label('cidadeprofissional', 'Cidadeprofissional', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('cidadeprofissional', null, ['class' => 'form-control']) !!}
        {!! $errors->first('cidadeprofissional', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('cep') ? 'has-error' : ''}}">
    {!! Form::label('cep', 'Cep', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('cep', null, ['class' => 'form-control']) !!}
        {!! $errors->first('cep', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('rgprofissional') ? 'has-error' : ''}}">
    {!! Form::label('rgprofissional', 'Rgprofissional', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('rgprofissional', null, ['class' => 'form-control']) !!}
        {!! $errors->first('rgprofissional', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('cpfprofissional') ? 'has-error' : ''}}">
    {!! Form::label('cpfprofissional', 'Cpfprofissional', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('cpfprofissional', null, ['class' => 'form-control']) !!}
        {!! $errors->first('cpfprofissional', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('dtnascprofissional') ? 'has-error' : ''}}">
    {!! Form::label('dtnascprofissional', 'Dtnascprofissional', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::date('dtnascprofissional', null, ['class' => 'form-control']) !!}
        {!! $errors->first('dtnascprofissional', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('foneprofissional') ? 'has-error' : ''}}">
    {!! Form::label('foneprofissional', 'Foneprofissional', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('foneprofissional', null, ['class' => 'form-control']) !!}
        {!! $errors->first('foneprofissional', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('celularprofissional') ? 'has-error' : ''}}">
    {!! Form::label('celularprofissional', 'Celularprofissional', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('celularprofissional', null, ['class' => 'form-control']) !!}
        {!! $errors->first('celularprofissional', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('estcivilprofissional') ? 'has-error' : ''}}">
    {!! Form::label('estcivilprofissional', 'Estcivilprofissional', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('estcivilprofissional', null, ['class' => 'form-control']) !!}
        {!! $errors->first('estcivilprofissional', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('sexoprofissional') ? 'has-error' : ''}}">
    {!! Form::label('sexoprofissional', 'Sexoprofissional', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('sexoprofissional', null, ['class' => 'form-control']) !!}
        {!! $errors->first('sexoprofissional', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('conselho') ? 'has-error' : ''}}">
    {!! Form::label('conselho', 'Conselho', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('conselho', null, ['class' => 'form-control']) !!}
        {!! $errors->first('conselho', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('codconselho') ? 'has-error' : ''}}">
    {!! Form::label('codconselho', 'Codconselho', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('codconselho', null, ['class' => 'form-control']) !!}
        {!! $errors->first('codconselho', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('planSaude') ? 'has-error' : ''}}">
    {!! Form::label('planSaude', 'Plansaude', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('planSaude', null, ['class' => 'form-control']) !!}
        {!! $errors->first('planSaude', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('emailprofissional') ? 'has-error' : ''}}">
    {!! Form::label('emailprofissional', 'Emailprofissional', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('emailprofissional', null, ['class' => 'form-control']) !!}
        {!! $errors->first('emailprofissional', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('loginprofissional') ? 'has-error' : ''}}">
    {!! Form::label('loginprofissional', 'Loginprofissional', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('loginprofissional', null, ['class' => 'form-control']) !!}
        {!! $errors->first('loginprofissional', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('senhaprofissional') ? 'has-error' : ''}}">
    {!! Form::label('senhaprofissional', 'Senhaprofissional', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::password('senhaprofissional', ['class' => 'form-control']) !!}
        {!! $errors->first('senhaprofissional', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('funcao') ? 'has-error' : ''}}">
    {!! Form::label('funcao', 'Funcao', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('funcao', null, ['class' => 'form-control']) !!}
        {!! $errors->first('funcao', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('especialidade1') ? 'has-error' : ''}}">
    {!! Form::label('especialidade1', 'Especialidade1', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('especialidade1', null, ['class' => 'form-control']) !!}
        {!! $errors->first('especialidade1', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('especialidade2') ? 'has-error' : ''}}">
    {!! Form::label('especialidade2', 'Especialidade2', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('especialidade2', null, ['class' => 'form-control']) !!}
        {!! $errors->first('especialidade2', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('especialidade3') ? 'has-error' : ''}}">
    {!! Form::label('especialidade3', 'Especialidade3', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('especialidade3', null, ['class' => 'form-control']) !!}
        {!! $errors->first('especialidade3', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('idiomaprofissional') ? 'has-error' : ''}}">
    {!! Form::label('idiomaprofissional', 'Idiomaprofissional', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('idiomaprofissional', null, ['class' => 'form-control']) !!}
        {!! $errors->first('idiomaprofissional', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('naturalidadeprofissional') ? 'has-error' : ''}}">
    {!! Form::label('naturalidadeprofissional', 'Naturalidadeprofissional', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('naturalidadeprofissional', null, ['class' => 'form-control']) !!}
        {!! $errors->first('naturalidadeprofissional', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('docprofissional') ? 'has-error' : ''}}">
    {!! Form::label('docprofissional', 'Docprofissional', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('docprofissional', null, ['class' => 'form-control']) !!}
        {!! $errors->first('docprofissional', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('obs') ? 'has-error' : ''}}">
    {!! Form::label('obs', 'Obs', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('obs', null, ['class' => 'form-control']) !!}
        {!! $errors->first('obs', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>