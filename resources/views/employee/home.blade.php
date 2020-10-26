@extends('layouts.master')
@section('content-header')
    <h1>
        Dashboard
        <small>Employee</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
@endsection
@section('content')
    <div class=col-md-12>
        <a href="/employee/create">
          <button class="btn btn-block btn-success">Insert Employee</button>
        </a>
    </div>
    <div class="col-md-8">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Data Employee</h3>
            </div>
            <div class="box-body no-padding">
                <table class="table table-striped">
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Name</th>
                        <th>Alamat</th>
                        <th>Phone</th>
                        <th>E-mail</th>
                        <th>Position</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($data as $d)
                        <tr>
                            <td style="width: 10px"> {{ $loop->iteration }}</td>
                            <td>
                                <a href="/employee/show/{{$d->id}}">
                                    {{$d->name}}
                                </a>
                            <td>{{$d->alamat}}</td>
                            <td>{{$d->phone}}</td>
                            <td>{{$d->email}}</td>
                            <td>{{$d->position->name}}</td>
                            <td>
                                <a href="/employee/edit/{{$d->id}}">Edit</a>
                                |
                                <a href="/employee/delete/{{$d->id}}">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
            {{$data->links()}}
        </div>
    </div>
@endsection
