<div class="table-responsive-sm">
    <table class="table table-striped" id="empolyees-table">
        <thead>
            <tr>
                <th>Nama Pegawai</th>
                <th>Foto</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($empolyees as $empolyee)
                <tr>
                    <td>{{ $empolyee->nama_pegawai }}</td>
                    <td><img src="{{ asset($empolyee->foto) }}" alt="" width="100px"></td>
                    <td>
                        {!! Form::open(['route' => ['empolyees.destroy', $empolyee->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('empolyees.show', [$empolyee->id]) }}" class='btn btn-ghost-success'><i
                                    class="fa fa-eye"></i></a>
                            <a href="{{ route('empolyees.edit', [$empolyee->id]) }}" class='btn btn-ghost-info'><i
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
