<div class="table-responsive-sm">
    <table class="table table-striped" id="ceos-table">
        <thead>
            <tr>
                <th>Nama Ceo</th>
                <th>Jabatan</th>
                <th>Foto</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($ceos as $ceo)
                <tr>
                    <td>{{ $ceo->nama_ceo }}</td>
                    <td>{{ $ceo->jabatan }}</td>
                    <td><img src="{{ $ceo->foto }}" alt="" width="100px"></td>
                    <td>
                        {!! Form::open(['route' => ['ceos.destroy', $ceo->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('ceos.show', [$ceo->id]) }}" class='btn btn-ghost-success'><i
                                    class="fa fa-eye"></i></a>
                            <a href="{{ route('ceos.edit', [$ceo->id]) }}" class='btn btn-ghost-info'><i
                                    class="fa fa-edit"></i></a>
                            {!! Form::button('<i class="fa fa-trash"></i>', [
                                'type' => 'submit',
                                'class' => 'btn btn-ghost-danger',
                                'onclick' => "return confirm('Are you sure?')",
                            ]) !!}
                        </div>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
