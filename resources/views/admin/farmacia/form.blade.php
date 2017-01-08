<div class="form-group {{ $errors->has('departamento') ? 'has-error' : ''}}">
    {!! Form::label('departamento', 'Departamento', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('departamento', null, ['class' => 'form-control']) !!}
        {!! $errors->first('departamento', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('farmaceuticoResponsavel') ? 'has-error' : ''}}">
    {!! Form::label('farmaceuticoResponsavel', 'Farmaceuticoresponsavel', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('farmaceuticoResponsavel', null, ['class' => 'form-control']) !!}
        {!! $errors->first('farmaceuticoResponsavel', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('responsavelTecnico') ? 'has-error' : ''}}">
    {!! Form::label('responsavelTecnico', 'Responsaveltecnico', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('responsavelTecnico', null, ['class' => 'form-control']) !!}
        {!! $errors->first('responsavelTecnico', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('autosanitaria') ? 'has-error' : ''}}">
    {!! Form::label('autosanitaria', 'Autosanitaria', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('autosanitaria', null, ['class' => 'form-control']) !!}
        {!! $errors->first('autosanitaria', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('inscricaoEstadual') ? 'has-error' : ''}}">
    {!! Form::label('inscricaoEstadual', 'Inscricaoestadual', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('inscricaoEstadual', null, ['class' => 'form-control']) !!}
        {!! $errors->first('inscricaoEstadual', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('crf') ? 'has-error' : ''}}">
    {!! Form::label('crf', 'Crf', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('crf', null, ['class' => 'form-control']) !!}
        {!! $errors->first('crf', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('cnpj') ? 'has-error' : ''}}">
    {!! Form::label('cnpj', 'Cnpj', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('cnpj', null, ['class' => 'form-control']) !!}
        {!! $errors->first('cnpj', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('numeroLicenca') ? 'has-error' : ''}}">
    {!! Form::label('numeroLicenca', 'Numerolicenca', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('numeroLicenca', null, ['class' => 'form-control']) !!}
        {!! $errors->first('numeroLicenca', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('isncricaoMinFazenda') ? 'has-error' : ''}}">
    {!! Form::label('isncricaoMinFazenda', 'Isncricaominfazenda', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('isncricaoMinFazenda', null, ['class' => 'form-control']) !!}
        {!! $errors->first('isncricaoMinFazenda', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('regiao') ? 'has-error' : ''}}">
    {!! Form::label('regiao', 'Regiao', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('regiao', null, ['class' => 'form-control']) !!}
        {!! $errors->first('regiao', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('codFarmaceutico') ? 'has-error' : ''}}">
    {!! Form::label('codFarmaceutico', 'Codfarmaceutico', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('codFarmaceutico', null, ['class' => 'form-control']) !!}
        {!! $errors->first('codFarmaceutico', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('cpfFarmaceutico') ? 'has-error' : ''}}">
    {!! Form::label('cpfFarmaceutico', 'Cpffarmaceutico', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('cpfFarmaceutico', null, ['class' => 'form-control']) !!}
        {!! $errors->first('cpfFarmaceutico', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('cgmFarmaceutico') ? 'has-error' : ''}}">
    {!! Form::label('cgmFarmaceutico', 'Cgmfarmaceutico', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('cgmFarmaceutico', null, ['class' => 'form-control']) !!}
        {!! $errors->first('cgmFarmaceutico', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('cnpjFarmaceutico') ? 'has-error' : ''}}">
    {!! Form::label('cnpjFarmaceutico', 'Cnpjfarmaceutico', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('cnpjFarmaceutico', null, ['class' => 'form-control']) !!}
        {!! $errors->first('cnpjFarmaceutico', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('codMedicacao') ? 'has-error' : ''}}">
    {!! Form::label('codMedicacao', 'Codmedicacao', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('codMedicacao', null, ['class' => 'form-control']) !!}
        {!! $errors->first('codMedicacao', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('nomeGenerico') ? 'has-error' : ''}}">
    {!! Form::label('nomeGenerico', 'Nomegenerico', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('nomeGenerico', null, ['class' => 'form-control']) !!}
        {!! $errors->first('nomeGenerico', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('nomeOficial') ? 'has-error' : ''}}">
    {!! Form::label('nomeOficial', 'Nomeoficial', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('nomeOficial', null, ['class' => 'form-control']) !!}
        {!! $errors->first('nomeOficial', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('nomeAnvisa') ? 'has-error' : ''}}">
    {!! Form::label('nomeAnvisa', 'Nomeanvisa', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('nomeAnvisa', null, ['class' => 'form-control']) !!}
        {!! $errors->first('nomeAnvisa', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('prescMedica') ? 'has-error' : ''}}">
    {!! Form::label('prescMedica', 'Prescmedica', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('prescMedica', null, ['class' => 'form-control']) !!}
        {!! $errors->first('prescMedica', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('listControlados') ? 'has-error' : ''}}">
    {!! Form::label('listControlados', 'Listcontrolados', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('listControlados', null, ['class' => 'form-control']) !!}
        {!! $errors->first('listControlados', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('medReferencia') ? 'has-error' : ''}}">
    {!! Form::label('medReferencia', 'Medreferencia', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('medReferencia', null, ['class' => 'form-control']) !!}
        {!! $errors->first('medReferencia', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('laboratorio') ? 'has-error' : ''}}">
    {!! Form::label('laboratorio', 'Laboratorio', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('laboratorio', null, ['class' => 'form-control']) !!}
        {!! $errors->first('laboratorio', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('nomeFormaFarma') ? 'has-error' : ''}}">
    {!! Form::label('nomeFormaFarma', 'Nomeformafarma', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('nomeFormaFarma', null, ['class' => 'form-control']) !!}
        {!! $errors->first('nomeFormaFarma', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('concentracao') ? 'has-error' : ''}}">
    {!! Form::label('concentracao', 'Concentracao', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('concentracao', null, ['class' => 'form-control']) !!}
        {!! $errors->first('concentracao', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('classificacaomed') ? 'has-error' : ''}}">
    {!! Form::label('classificacaomed', 'Classificacaomed', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('classificacaomed', null, ['class' => 'form-control']) !!}
        {!! $errors->first('classificacaomed', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('hiperdia') ? 'has-error' : ''}}">
    {!! Form::label('hiperdia', 'Hiperdia', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('hiperdia', null, ['class' => 'form-control']) !!}
        {!! $errors->first('hiperdia', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('obsinclumed') ? 'has-error' : ''}}">
    {!! Form::label('obsinclumed', 'Obsinclumed', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('obsinclumed', null, ['class' => 'form-control']) !!}
        {!! $errors->first('obsinclumed', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('codincluprogs') ? 'has-error' : ''}}">
    {!! Form::label('codincluprogs', 'Codincluprogs', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('codincluprogs', null, ['class' => 'form-control']) !!}
        {!! $errors->first('codincluprogs', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('descprogs') ? 'has-error' : ''}}">
    {!! Form::label('descprogs', 'Descprogs', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('descprogs', null, ['class' => 'form-control']) !!}
        {!! $errors->first('descprogs', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('depadm') ? 'has-error' : ''}}">
    {!! Form::label('depadm', 'Depadm', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('depadm', null, ['class' => 'form-control']) !!}
        {!! $errors->first('depadm', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('tpacao') ? 'has-error' : ''}}">
    {!! Form::label('tpacao', 'Tpacao', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('tpacao', null, ['class' => 'form-control']) !!}
        {!! $errors->first('tpacao', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('incluclassificacao') ? 'has-error' : ''}}">
    {!! Form::label('incluclassificacao', 'Incluclassificacao', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('incluclassificacao', null, ['class' => 'form-control']) !!}
        {!! $errors->first('incluclassificacao', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('mascara') ? 'has-error' : ''}}">
    {!! Form::label('mascara', 'Mascara', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('mascara', null, ['class' => 'form-control']) !!}
        {!! $errors->first('mascara', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('classificacao') ? 'has-error' : ''}}">
    {!! Form::label('classificacao', 'Classificacao', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('classificacao', null, ['class' => 'form-control']) !!}
        {!! $errors->first('classificacao', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('tipomed') ? 'has-error' : ''}}">
    {!! Form::label('tipomed', 'Tipomed', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('tipomed', null, ['class' => 'form-control']) !!}
        {!! $errors->first('tipomed', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('descclassificacao') ? 'has-error' : ''}}">
    {!! Form::label('descclassificacao', 'Descclassificacao', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('descclassificacao', null, ['class' => 'form-control']) !!}
        {!! $errors->first('descclassificacao', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('obsinclucassificacao') ? 'has-error' : ''}}">
    {!! Form::label('obsinclucassificacao', 'Obsinclucassificacao', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('obsinclucassificacao', null, ['class' => 'form-control']) !!}
        {!! $errors->first('obsinclucassificacao', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('codmedreferencia') ? 'has-error' : ''}}">
    {!! Form::label('codmedreferencia', 'Codmedreferencia', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('codmedreferencia', null, ['class' => 'form-control']) !!}
        {!! $errors->first('codmedreferencia', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('nomemedreferencia') ? 'has-error' : ''}}">
    {!! Form::label('nomemedreferencia', 'Nomemedreferencia', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('nomemedreferencia', null, ['class' => 'form-control']) !!}
        {!! $errors->first('nomemedreferencia', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('codtpreceita') ? 'has-error' : ''}}">
    {!! Form::label('codtpreceita', 'Codtpreceita', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('codtpreceita', null, ['class' => 'form-control']) !!}
        {!! $errors->first('codtpreceita', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('desctpreceita') ? 'has-error' : ''}}">
    {!! Form::label('desctpreceita', 'Desctpreceita', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('desctpreceita', null, ['class' => 'form-control']) !!}
        {!! $errors->first('desctpreceita', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('profissional') ? 'has-error' : ''}}">
    {!! Form::label('profissional', 'Profissional', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('profissional', null, ['class' => 'form-control']) !!}
        {!! $errors->first('profissional', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('possologia') ? 'has-error' : ''}}">
    {!! Form::label('possologia', 'Possologia', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('possologia', null, ['class' => 'form-control']) !!}
        {!! $errors->first('possologia', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('requisitante') ? 'has-error' : ''}}">
    {!! Form::label('requisitante', 'Requisitante', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('requisitante', null, ['class' => 'form-control']) !!}
        {!! $errors->first('requisitante', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('numreceita') ? 'has-error' : ''}}">
    {!! Form::label('numreceita', 'Numreceita', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('numreceita', null, ['class' => 'form-control']) !!}
        {!! $errors->first('numreceita', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('viasrecibo') ? 'has-error' : ''}}">
    {!! Form::label('viasrecibo', 'Viasrecibo', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('viasrecibo', null, ['class' => 'form-control']) !!}
        {!! $errors->first('viasrecibo', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('receitaativa') ? 'has-error' : ''}}">
    {!! Form::label('receitaativa', 'Receitaativa', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('receitaativa', null, ['class' => 'form-control']) !!}
        {!! $errors->first('receitaativa', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('prescmedicaconsultapaciente') ? 'has-error' : ''}}">
    {!! Form::label('prescmedicaconsultapaciente', 'Prescmedicaconsultapaciente', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('prescmedicaconsultapaciente', null, ['class' => 'form-control']) !!}
        {!! $errors->first('prescmedicaconsultapaciente', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('periodoconsulta') ? 'has-error' : ''}}">
    {!! Form::label('periodoconsulta', 'Periodoconsulta', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('periodoconsulta', null, ['class' => 'form-control']) !!}
        {!! $errors->first('periodoconsulta', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('antefamicardiovasculares') ? 'has-error' : ''}}">
    {!! Form::label('antefamicardiovasculares', 'Antefamicardiovasculares', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('antefamicardiovasculares', null, ['class' => 'form-control']) !!}
        {!! $errors->first('antefamicardiovasculares', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('codmedanvisa') ? 'has-error' : ''}}">
    {!! Form::label('codmedanvisa', 'Codmedanvisa', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('codmedanvisa', null, ['class' => 'form-control']) !!}
        {!! $errors->first('codmedanvisa', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('nomemedanvisa') ? 'has-error' : ''}}">
    {!! Form::label('nomemedanvisa', 'Nomemedanvisa', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('nomemedanvisa', null, ['class' => 'form-control']) !!}
        {!! $errors->first('nomemedanvisa', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('nomemedclassterap') ? 'has-error' : ''}}">
    {!! Form::label('nomemedclassterap', 'Nomemedclassterap', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('nomemedclassterap', null, ['class' => 'form-control']) !!}
        {!! $errors->first('nomemedclassterap', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('codconcentracao') ? 'has-error' : ''}}">
    {!! Form::label('codconcentracao', 'Codconcentracao', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('codconcentracao', null, ['class' => 'form-control']) !!}
        {!! $errors->first('codconcentracao', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('nomeconcentracao') ? 'has-error' : ''}}">
    {!! Form::label('nomeconcentracao', 'Nomeconcentracao', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('nomeconcentracao', null, ['class' => 'form-control']) !!}
        {!! $errors->first('nomeconcentracao', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('codconcentracaoxanvisa') ? 'has-error' : ''}}">
    {!! Form::label('codconcentracaoxanvisa', 'Codconcentracaoxanvisa', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('codconcentracaoxanvisa', null, ['class' => 'form-control']) !!}
        {!! $errors->first('codconcentracaoxanvisa', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('codmedcontrl') ? 'has-error' : ''}}">
    {!! Form::label('codmedcontrl', 'Codmedcontrl', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('codmedcontrl', null, ['class' => 'form-control']) !!}
        {!! $errors->first('codmedcontrl', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('nomemedcontrl') ? 'has-error' : ''}}">
    {!! Form::label('nomemedcontrl', 'Nomemedcontrl', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('nomemedcontrl', null, ['class' => 'form-control']) !!}
        {!! $errors->first('nomemedcontrl', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('codprescmedxanvisa') ? 'has-error' : ''}}">
    {!! Form::label('codprescmedxanvisa', 'Codprescmedxanvisa', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('codprescmedxanvisa', null, ['class' => 'form-control']) !!}
        {!! $errors->first('codprescmedxanvisa', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('codprescmed') ? 'has-error' : ''}}">
    {!! Form::label('codprescmed', 'Codprescmed', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('codprescmed', null, ['class' => 'form-control']) !!}
        {!! $errors->first('codprescmed', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('nomeprescmed') ? 'has-error' : ''}}">
    {!! Form::label('nomeprescmed', 'Nomeprescmed', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('nomeprescmed', null, ['class' => 'form-control']) !!}
        {!! $errors->first('nomeprescmed', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>