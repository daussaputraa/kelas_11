@extends('layouts.master')
@section('content-header')
    <h1>
        Dashboard
        <small>Position</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
@endsection
@section('content')
    <div class=col-md-8>
        <a href="/position/create">
          <button class="btn btn-block btn-success">Insert Position</button>
        </a>
    </div>

    <div class="col-md-8">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Data Position</h3>
            </div>
      <!-- /.box-header -->
            <div class="box-body no-padding">
                <table class="table table-striped">
                <tr>
                    <th style="width: 10px">#</th>
                    <th>Name</th>
                    <th>Department</th>
                    <th>Action</th>
                </tr>
                @foreach ($data as $d)
                    <tr>
                        <td>#</td>
                        <td>{{$d->name}}</td>
                        <td>{{$d->department->name}}</td>
                        <td>
                            <a href="/position/edit/{{$d->id}}">Edit</a> |
                            <a href="/position/delete/{{$d->id}}">Delete</a>
                        </td>
                    </tr>
                @endforeach

                </table>
            </div>
      <!-- /.box-body -->
        </div>
    </div>


@endsection
