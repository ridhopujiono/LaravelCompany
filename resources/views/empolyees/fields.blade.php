<!-- Nama Pegawai Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nama_pegawai', 'Nama Pegawai:') !!}
    {!! Form::text('nama_pegawai', null, ['class' => 'form-control']) !!}
</div>

<!-- Foto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('foto', 'Foto:') !!}
    {!! Form::file('foto') !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('empolyees.index') }}" class="btn btn-secondary">Cancel</a>
</div>
