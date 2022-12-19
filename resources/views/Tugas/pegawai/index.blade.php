
@extends('admin.admin')
@section('adminlte')

<a href="pegawai/create" class="w-100 btn btn-lg btn-primary mt-3 text-dark mt-4">Tambah</a>
{{-- <table class="table-bordered table mt-2" align="center"> --}}
<table align="center" class="table-sm table-bordered mt-3">
        <tr align="center">
            <th>Nama</th>
            <th>Email</th>
            <th>Gelar</th>
            <th>Jurusan</th>
            <th colspan="2">Aksi</th>
        </tr>
    @foreach ($datas as $key=>$value)

    <tr align="center">
        <td>{{ $value->name }}</td>
        <td>{{ $value->email }}</td>
        <td>{{ $value->gelar }}</td>
        <td>{{ $value->jurusan }}</td>
        <td><a href="{{ url('pegawai/'.$value->id.'/edit') }}" class="btn btn-info">Upgrade</a></td>
        <td>
            <form action="{{ url('pegawai/'.$value->id) }}" method="POST">
                @csrf
                <input type="hidden" name="_method" value="DELETE">
                <button class="text-dark btn btn-danger" type="submit">Delete</button>
            </form>
        </td>
    </tr>
        
    @endforeach
</table>
    
@endsection

    

    


