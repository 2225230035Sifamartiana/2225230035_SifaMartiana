@extends('students.layout')
@section('content')

 
<div class="card">
  <div class="card-header">Data Mahasiswa </div>
  <div class="card-body">
      
      <form action="{{ url('student') }}" method="post">
        {!! csrf_field() !!}
        <label>Nama</label></br>
        <input type="text" name="nama" id="nama" class="form-control"></br>
        <label>Jurusan</label></br>
        <input type="text" name="jurusan" id="jurusan" class="form-control"></br>
        <label>Universitas</label></br>
        <input type="text" name="universitas" id="universitas" class="form-control"></br>
        <label>Judul_Anime</label></br>
        <input type="text" name="judul_anime" id="judul_anime" class="form-control"></br> 
        <label>Genre</label></br>
        <input type="text" name="genre" id="genre" class="form-control"></br>  
        <input type="submit" value="Simpan" class="btn btn-secondary"></br>
</br>
    </form>
   
  </div>
</div>
 
@stop