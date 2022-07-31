<!-- Nama Pegawai Field -->
<div class="form-group">
    {!! Form::label('nama_pegawai', 'Nama Pegawai:') !!}
    <p>{{ $empolyee->nama_pegawai }}</p>
</div>

<!-- Foto Field -->
<div class="form-group">
    {!! Form::label('foto', 'Foto:') !!}
    <p><img src="{{ asset($empolyee->foto) }}" alt="" width="200px"></p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $empolyee->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $empolyee->updated_at }}</p>
</div>
