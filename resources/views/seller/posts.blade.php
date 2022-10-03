@extends('../layout/dashboardSeller')
@section('main')
    @if(session()->has('success'))
        <div class="alert alert-success my-5" role="alert">
            {{ session('success') }}
        </div>
    @endif
    <a href="/seller/insert" class="btn btn-primary mb-3">Tambah Rumah</a>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Nama Rumah</th>
            <th scope="col">Tipe Rumah</th>
            <th scope="col">Lokasi</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $number = 0; ?>
            @foreach ($data as $item)
            <?php $number += 1 ?>
            <tr>
                <th scope="row">{{ $number }}</th>
                <td>{{ $item->nama_object }}</td>
                <td>{{ $item->jenis_rumah }}</td>
                <td>{{ $item->nama_lokasi }}</td>
                <td>
                    <a href="/seller/preview/{{ $item->id_house }}" class="col badge bg-info"><span data-feather="eye"></span></a>
                    <a href="/seller/{{ $item->id_house }}/edit" class="col badge bg-warning"><span data-feather="edit"></span></a>
                    <form action="/dashboard/delete" method="post" class="d-inline">
                        <input type="text" name="id" class="d-none" value="{{ $item->id_house }}">
                        <input type="text" name="jenis_rumah" class="d-none" value="{{ $item->jenis_rumah }}">
                        @csrf
                        <button class="border-0 col badge bg-danger" onclick="return confirm('Anda yakin ingin menghapus ' + '{{ $item->nama_object }}' + ' ?')"><span data-feather="x-circle"></span></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection