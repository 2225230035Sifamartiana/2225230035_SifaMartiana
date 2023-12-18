@extends('students.layout')
@section('content')

<div class="card">
    <div class="card-header"><h2>Tampil Data Mahasiswa</h2></div>
    <div class="card-body">
        <div class="card-body">
            <h5 class="card-title">Nama  : {{ $students->nama }}</h5>
            <h5 class="card-title">Jurusan  : {{ $students->jurusan }}</h5>
            <h5 class="card-title">Universitas : {{ $students->universitas }}</h5>
            <h5 class="card-title">Judul_Anime : {{ $students->judul_anime }}</h5>
            <h5 class="card-title">Genre : {{ $students->genre }}</h5>
           

        </div>
    </div>