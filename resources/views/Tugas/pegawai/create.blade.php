@extends('admin.admin')
@section('adminlte')
<center><p><h1 class="btn btn-info mt-4">Tambahkan Pegawai Kantor</h1></p></center>
<br>
<form action="{{ url('pegawai') }}" method="POST">
    @csrf 
    <table align='center'>
        <tr>
            <td><label for="nama">Nama</label></td>
            <td><input type="text" id="nama" name="name"  class="form-control form-control-lg" required></td>
        </tr>
        <tr>
            <td><label for="email">Email</label></td>
            <td><input type="email" id="email" name="email" class="form-control form-control-lg" required></td>
        </tr>
        <tr>
            <td><label for="gelar">Gelar</label></td>
            <td><input type="text" id="gelar" name="gelar" class="form-control form-control-lg" required></td>
        </tr>
        <tr>
            <td><label for="jurusan">Jurusan</label></td>
            <td><input type="text" id="jurusan" name="jurusan" class="form-control form-control-lg" required></td>
        </tr>
        <tr>
            <td></td>
            <td><button type="submit" class="text-dark btn btn-info">Simpan</button></td>
        </tr>
    </table>
    </form>
@endsection

