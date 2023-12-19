@extends('students.layout')
@section('content')
 
  <div class="card">
  <div class="card-header">Halaman Data</div>
  <div class="card-body">
      
      <form action="{{ url('student/' .$students->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$students->id}}" id="id" />
        <label>Nama</label></br>
        <input type="text" name="nama" id="nama" value="{{$students->nama}}" class="form-control"></br>
        <label>Jurusan</label>
        <input type="text" name="jurusan" id="jurusan" value="{{$students->jurusan}}" class="form-control"></br>
        <label>Universitas</label>
        <input type="text" name="universitas" id="universitas" value="{{$students->universitas}}" class="form-control"></br>
        <label>Judul_Anime</label>
        <input type="text" name="judul_anime" id="judul_anime" value="{{$students->judul_anime}}" class="form-control"></br> 
        <label>Genre</label>
        <input type="text" name="genre" id="genre" value="{{$students->genre}}" class="form-control"></br> 
        <input type="submit" value="Perbarui" class="btn btn-secondary"></br>
    </form>
   
  </div>
</div>
 
@stop