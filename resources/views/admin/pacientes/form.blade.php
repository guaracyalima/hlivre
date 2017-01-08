<div class="form-group {{ $errors->has('fichaCadastral') ? 'has-error' : ''}}">
    {!! Form::label('fichaCadastral', 'Fichacadastral', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('fichaCadastral', null, ['class' => 'form-control']) !!}
        {!! $errors->first('fichaCadastral', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('dataCadastro') ? 'has-error' : ''}}">
    {!! Form::label('dataCadastro', 'Datacadastro', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::date('dataCadastro', null, ['class' => 'form-control']) !!}
        {!! $errors->first('dataCadastro', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('nome') ? 'has-error' : ''}}">
    {!! Form::label('nome', 'Nome', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('nome', null, ['class' => 'form-control']) !!}
        {!! $errors->first('nome', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('cpf') ? 'has-error' : ''}}">
    {!! Form::label('cpf', 'Cpf', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('cpf', null, ['class' => 'form-control']) !!}
        {!! $errors->first('cpf', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('rg') ? 'has-error' : ''}}">
    {!! Form::label('rg', 'Rg', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('rg', null, ['class' => 'form-control']) !!}
        {!! $errors->first('rg', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('dnascimento') ? 'has-error' : ''}}">
    {!! Form::label('dnascimento', 'Dnascimento', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::date('dnascimento', null, ['class' => 'form-control']) !!}
        {!! $errors->first('dnascimento', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('endereco') ? 'has-error' : ''}}">
    {!! Form::label('endereco', 'Endereco', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('endereco', null, ['class' => 'form-control']) !!}
        {!! $errors->first('endereco', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('complemento') ? 'has-error' : ''}}">
    {!! Form::label('complemento', 'Complemento', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('complemento', null, ['class' => 'form-control']) !!}
        {!! $errors->first('complemento', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('bairro') ? 'has-error' : ''}}">
    {!! Form::label('bairro', 'Bairro', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('bairro', null, ['class' => 'form-control']) !!}
        {!! $errors->first('bairro', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('cep') ? 'has-error' : ''}}">
    {!! Form::label('cep', 'Cep', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('cep', null, ['class' => 'form-control']) !!}
        {!! $errors->first('cep', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('telefone') ? 'has-error' : ''}}">
    {!! Form::label('telefone', 'Telefone', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('telefone', null, ['class' => 'form-control']) !!}
        {!! $errors->first('telefone', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('celular') ? 'has-error' : ''}}">
    {!! Form::label('celular', 'Celular', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('celular', null, ['class' => 'form-control']) !!}
        {!! $errors->first('celular', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('sexo') ? 'has-error' : ''}}">
    {!! Form::label('sexo', 'Sexo', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('sexo', ['masculino', 'feminino'], null, ['class' => 'form-control']) !!}
        {!! $errors->first('sexo', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('estadoCivil') ? 'has-error' : ''}}">
    {!! Form::label('estadoCivil', 'Estadocivil', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('estadoCivil', ['solteiro', 'casado', 'viuvo', 'separado', 'indefinido'], null, ['class' => 'form-control']) !!}
        {!! $errors->first('estadoCivil', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('etinia') ? 'has-error' : ''}}">
    {!! Form::label('etinia', 'Etinia', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('etinia', null, ['class' => 'form-control']) !!}
        {!! $errors->first('etinia', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('religiao') ? 'has-error' : ''}}">
    {!! Form::label('religiao', 'Religiao', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('religiao', null, ['class' => 'form-control']) !!}
        {!! $errors->first('religiao', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('planSaude') ? 'has-error' : ''}}">
    {!! Form::label('planSaude', 'Plansaude', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('planSaude', null, ['class' => 'form-control']) !!}
        {!! $errors->first('planSaude', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('topoSanguineo') ? 'has-error' : ''}}">
    {!! Form::label('topoSanguineo', 'Toposanguineo', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('topoSanguineo', ['A+', 'A-', 'B+', 'B-', 'AB+', 'AB-', 'O+', 'O-'], null, ['class' => 'form-control']) !!}
        {!! $errors->first('topoSanguineo', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('fatorRH') ? 'has-error' : ''}}">
    {!! Form::label('fatorRH', 'Fatorrh', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('fatorRH', null, ['class' => 'form-control']) !!}
        {!! $errors->first('fatorRH', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('doadorOrgaos') ? 'has-error' : ''}}">
    {!! Form::label('doadorOrgaos', 'Doadororgaos', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('doadorOrgaos', ['sim', 'nao', 'indeciso'], null, ['class' => 'form-control']) !!}
        {!! $errors->first('doadorOrgaos', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('doadorSangue') ? 'has-error' : ''}}">
    {!! Form::label('doadorSangue', 'Doadorsangue', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('doadorSangue', ['sim', 'nao', 'indeciso'], null, ['class' => 'form-control']) !!}
        {!! $errors->first('doadorSangue', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('insttratamento') ? 'has-error' : ''}}">
    {!! Form::label('insttratamento', 'Insttratamento', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('insttratamento', null, ['class' => 'form-control']) !!}
        {!! $errors->first('insttratamento', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('idioma') ? 'has-error' : ''}}">
    {!! Form::label('idioma', 'Idioma', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('idioma', null, ['class' => 'form-control']) !!}
        {!! $errors->first('idioma', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('naturalidae') ? 'has-error' : ''}}">
    {!! Form::label('naturalidae', 'Naturalidae', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('naturalidae', null, ['class' => 'form-control']) !!}
        {!! $errors->first('naturalidae', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('dataCasamento') ? 'has-error' : ''}}">
    {!! Form::label('dataCasamento', 'Datacasamento', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::date('dataCasamento', null, ['class' => 'form-control']) !!}
        {!! $errors->first('dataCasamento', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('conjugue') ? 'has-error' : ''}}">
    {!! Form::label('conjugue', 'Conjugue', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('conjugue', null, ['class' => 'form-control']) !!}
        {!! $errors->first('conjugue', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('profissao') ? 'has-error' : ''}}">
    {!! Form::label('profissao', 'Profissao', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('profissao', null, ['class' => 'form-control']) !!}
        {!! $errors->first('profissao', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('procurador1') ? 'has-error' : ''}}">
    {!! Form::label('procurador1', 'Procurador1', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('procurador1', null, ['class' => 'form-control']) !!}
        {!! $errors->first('procurador1', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('foneProcurador1') ? 'has-error' : ''}}">
    {!! Form::label('foneProcurador1', 'Foneprocurador1', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('foneProcurador1', null, ['class' => 'form-control']) !!}
        {!! $errors->first('foneProcurador1', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('procurador2') ? 'has-error' : ''}}">
    {!! Form::label('procurador2', 'Procurador2', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('procurador2', null, ['class' => 'form-control']) !!}
        {!! $errors->first('procurador2', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('foneProcurador2') ? 'has-error' : ''}}">
    {!! Form::label('foneProcurador2', 'Foneprocurador2', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('foneProcurador2', null, ['class' => 'form-control']) !!}
        {!! $errors->first('foneProcurador2', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>