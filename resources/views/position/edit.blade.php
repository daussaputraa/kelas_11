@extends('layouts.master')
@section('content-header')
    <h1>
        Position
        <small>Insert</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
@endsection
@section('content')
<div class="col-md-6">
    <!-- general form elements -->
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Edit Position</h3>
      </div>
      <form role="form" action="/position/update" method="POST"
      enctype="multipart/form-data">
        <div class="box-body">
          <div class="form-group">
              <input type="hidden" name="_token" value="{{csrf_token() }}" />
              <input type="hidden" name="_method" value="PUT" />
              <input type="hidden" name="id" value="{{$data->id}}" />
          </div>
          <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control"
            value="{{$data->name}}" name="name" placeholder="Name">
          </div>
          <div class="form-group">
            <label>Department</label>
            <select class="form-control" name="department_id">
                <option value="{{$data->department_id}}">{{$data->department->name}}</option>
                @foreach ($department as $dept)
                    @if ($dept->id != $data->department_id)
                    <option value="{{$dept->id}}">{{$dept->name}}</option>
                    @endif
                @endforeach
            </select>
          </div>
        </div>
        <!-- /.box-body -->

        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
</div>
@endsection
