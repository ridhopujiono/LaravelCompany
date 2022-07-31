<!-- Nama Ceo Field -->
<div class="form-group">
    {!! Form::label('nama_ceo', 'Nama Ceo:') !!}
    <p>{{ $ceo->nama_ceo }}</p>
</div>

<!-- Jabatan Field -->
<div class="form-group">
    {!! Form::label('jabatan', 'Jabatan:') !!}
    <p>{{ $ceo->jabatan }}</p>
</div>

<!-- Foto Field -->
<div class="form-group">
    {!! Form::label('foto', 'Foto:') !!}
    <p><img src="{{ asset($ceo->foto) }}" alt="" width="200px"></p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $ceo->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $ceo->updated_at }}</p>
</div>
