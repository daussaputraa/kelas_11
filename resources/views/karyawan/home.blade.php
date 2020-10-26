@extends('layouts.master')
@section('content-header')
    <h1>
        Dashboard
        <small>Karyawan</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
@endsection
@section('content')
    {{-- <h1>Karyawan Page</h1>
    @foreach ($data as $d)
    <p>Nama : {{$d->nama}}</p>
    <p>Alamat : {{$d->alamat}}</p>
    <p>Jabatan : {{$d->jabatan}}</p>
    @endforeach --}}
    <div class=col-md-8>
        <a href="/karyawan/create">
          <button class="btn btn-block btn-success">Insert Karyawan</button>
        </a>
    </div>

    <div class="col-md-8">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Data Karyawan</h3>
            </div>
      <!-- /.box-header -->
            <div class="box-body no-padding">
                <table class="table table-striped">
                <tr>
                    <th style="width: 10px">#</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Jabatan</th>
                    <th>Action</th>
                </tr>
                @foreach ($data as $d)
                    <tr>
                        <td>#</td>
                        <td>{{$d->nama}}</td>
                        <td>{{$d->alamat}}</td>
                        <td>{{$d->jabatan}}</td>
                        <td>
                            <a href="/karyawan/edit/{{$d->id}}">Edit</a> |
                            <a href="/karyawan/delete/{{$d->id}}">Delete</a>
                        </td>
                    </tr>
                @endforeach

                </table>
            </div>
      <!-- /.box-body -->
        </div>
    </div>


@endsection
