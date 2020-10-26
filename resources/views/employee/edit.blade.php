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
        <h3 class="box-title">Edit Employe</h3>
      </div>
      <form role="form" action="/employee/update" method="POST"
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
            <label>Position</label>
            <select class="form-control" name="position_id">
                <option value="{{$data->position_id}}">{{$data->position->name}}</option>
                @foreach ($position as $pos)
                    @if ($pos->id != $data->position_id)
                    <option value="{{$pos->id}}">{{$pos->name}}</option>
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
