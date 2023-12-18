@extends('students.layout')
@section('content')
    <div class="container">
        <div class="row">
 
            <div class="position-relative">
                <div class="card">
                    <div class="card-header">
                        <h2>Data Mahasiswa Yang Menyukai Anime</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/student/create') }}" class="btn btn-light btn-sm" title="Tambah Data">
                            <i class="fa fa-plus" aria-hidden="true"></i> Tambah Data 
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama</th>
                                        <th>Jurusan</th>
                                        <th>Universitas</th>
                                        <th>Judul_Anime</th>
                                        <th>Genre</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($students as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->nama }}</td>
                                        <td>{{ $item->jurusan }}</td>
                                        <td>{{ $item->universitas}}</td>
                                        <td>{{ $item->judul_anime }}</td>
                                        <td>{{ $item->genre }}</td>
                                        
                                        


 
                                        <td>
                                            <a href="{{ url('/student/' . $item->id) }}" title="View Student"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>

                                            <a href="{{ url('/student/' . $item->id . '/edit') }}" title="Edit Student"><button class="btn btn-dark btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                          
                                            <form method="POST" action="{{ url('/student' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-primary btn-sm" title="Delete Student" ><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
 
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection