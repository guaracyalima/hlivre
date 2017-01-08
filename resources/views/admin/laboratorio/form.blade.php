<div class="form-group {{ $errors->has('tipo') ? 'has-error' : ''}}">
    {!! Form::label('tipo', 'Tipo', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('tipo', null, ['class' => 'form-control']) !!}
        {!! $errors->first('tipo', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('departamento') ? 'has-error' : ''}}">
    {!! Form::label('departamento', 'Departamento', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('departamento', null, ['class' => 'form-control']) !!}
        {!! $errors->first('departamento', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('desclaboratorio') ? 'has-error' : ''}}">
    {!! Form::label('desclaboratorio', 'Desclaboratorio', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::textarea('desclaboratorio', null, ['class' => 'form-control']) !!}
        {!! $errors->first('desclaboratorio', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('alvaralab') ? 'has-error' : ''}}">
    {!! Form::label('alvaralab', 'Alvaralab', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('alvaralab', null, ['class' => 'form-control']) !!}
        {!! $errors->first('alvaralab', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('cnes') ? 'has-error' : ''}}">
    {!! Form::label('cnes', 'Cnes', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('cnes', null, ['class' => 'form-control']) !!}
        {!! $errors->first('cnes', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('endlab') ? 'has-error' : ''}}">
    {!! Form::label('endlab', 'Endlab', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('endlab', null, ['class' => 'form-control']) !!}
        {!! $errors->first('endlab', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('numlab') ? 'has-error' : ''}}">
    {!! Form::label('numlab', 'Numlab', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('numlab', null, ['class' => 'form-control']) !!}
        {!! $errors->first('numlab', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('tellab') ? 'has-error' : ''}}">
    {!! Form::label('tellab', 'Tellab', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('tellab', null, ['class' => 'form-control']) !!}
        {!! $errors->first('tellab', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('turnoatend') ? 'has-error' : ''}}">
    {!! Form::label('turnoatend', 'Turnoatend', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('turnoatend', null, ['class' => 'form-control']) !!}
        {!! $errors->first('turnoatend', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('labresponsavel') ? 'has-error' : ''}}">
    {!! Form::label('labresponsavel', 'Labresponsavel', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('labresponsavel', null, ['class' => 'form-control']) !!}
        {!! $errors->first('labresponsavel', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('cgmlab') ? 'has-error' : ''}}">
    {!! Form::label('cgmlab', 'Cgmlab', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('cgmlab', null, ['class' => 'form-control']) !!}
        {!! $errors->first('cgmlab', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('cbolabresp') ? 'has-error' : ''}}">
    {!! Form::label('cbolabresp', 'Cbolabresp', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('cbolabresp', null, ['class' => 'form-control']) !!}
        {!! $errors->first('cbolabresp', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('tplab') ? 'has-error' : ''}}">
    {!! Form::label('tplab', 'Tplab', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('tplab', null, ['class' => 'form-control']) !!}
        {!! $errors->first('tplab', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('codmaterialcoleta') ? 'has-error' : ''}}">
    {!! Form::label('codmaterialcoleta', 'Codmaterialcoleta', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('codmaterialcoleta', null, ['class' => 'form-control']) !!}
        {!! $errors->first('codmaterialcoleta', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('descmaterialcoleta') ? 'has-error' : ''}}">
    {!! Form::label('descmaterialcoleta', 'Descmaterialcoleta', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('descmaterialcoleta', null, ['class' => 'form-control']) !!}
        {!! $errors->first('descmaterialcoleta', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('codmetodologia') ? 'has-error' : ''}}">
    {!! Form::label('codmetodologia', 'Codmetodologia', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('codmetodologia', null, ['class' => 'form-control']) !!}
        {!! $errors->first('codmetodologia', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('matcoleta') ? 'has-error' : ''}}">
    {!! Form::label('matcoleta', 'Matcoleta', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('matcoleta', null, ['class' => 'form-control']) !!}
        {!! $errors->first('matcoleta', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('preparo') ? 'has-error' : ''}}">
    {!! Form::label('preparo', 'Preparo', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('preparo', null, ['class' => 'form-control']) !!}
        {!! $errors->first('preparo', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('codrecipiente') ? 'has-error' : ''}}">
    {!! Form::label('codrecipiente', 'Codrecipiente', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('codrecipiente', null, ['class' => 'form-control']) !!}
        {!! $errors->first('codrecipiente', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('descrirecipiente') ? 'has-error' : ''}}">
    {!! Form::label('descrirecipiente', 'Descrirecipiente', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('descrirecipiente', null, ['class' => 'form-control']) !!}
        {!! $errors->first('descrirecipiente', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('codsetor') ? 'has-error' : ''}}">
    {!! Form::label('codsetor', 'Codsetor', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('codsetor', null, ['class' => 'form-control']) !!}
        {!! $errors->first('codsetor', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('descsetor') ? 'has-error' : ''}}">
    {!! Form::label('descsetor', 'Descsetor', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('descsetor', null, ['class' => 'form-control']) !!}
        {!! $errors->first('descsetor', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('codtpdoc') ? 'has-error' : ''}}">
    {!! Form::label('codtpdoc', 'Codtpdoc', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('codtpdoc', null, ['class' => 'form-control']) !!}
        {!! $errors->first('codtpdoc', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('desctpdoc') ? 'has-error' : ''}}">
    {!! Form::label('desctpdoc', 'Desctpdoc', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('desctpdoc', null, ['class' => 'form-control']) !!}
        {!! $errors->first('desctpdoc', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('codunimedida') ? 'has-error' : ''}}">
    {!! Form::label('codunimedida', 'Codunimedida', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('codunimedida', null, ['class' => 'form-control']) !!}
        {!! $errors->first('codunimedida', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('descunimedida') ? 'has-error' : ''}}">
    {!! Form::label('descunimedida', 'Descunimedida', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('descunimedida', null, ['class' => 'form-control']) !!}
        {!! $errors->first('descunimedida', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('codmetodo') ? 'has-error' : ''}}">
    {!! Form::label('codmetodo', 'Codmetodo', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('codmetodo', null, ['class' => 'form-control']) !!}
        {!! $errors->first('codmetodo', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('descmetodo') ? 'has-error' : ''}}">
    {!! Form::label('descmetodo', 'Descmetodo', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('descmetodo', null, ['class' => 'form-control']) !!}
        {!! $errors->first('descmetodo', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('codrequisito') ? 'has-error' : ''}}">
    {!! Form::label('codrequisito', 'Codrequisito', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('codrequisito', null, ['class' => 'form-control']) !!}
        {!! $errors->first('codrequisito', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('descrequisito') ? 'has-error' : ''}}">
    {!! Form::label('descrequisito', 'Descrequisito', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('descrequisito', null, ['class' => 'form-control']) !!}
        {!! $errors->first('descrequisito', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('sinonimia') ? 'has-error' : ''}}">
    {!! Form::label('sinonimia', 'Sinonimia', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('sinonimia', null, ['class' => 'form-control']) !!}
        {!! $errors->first('sinonimia', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('descsinonimia') ? 'has-error' : ''}}">
    {!! Form::label('descsinonimia', 'Descsinonimia', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('descsinonimia', null, ['class' => 'form-control']) !!}
        {!! $errors->first('descsinonimia', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>