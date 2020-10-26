@extends('layouts.master')
@section('content-header')
    <h1>
        Employee
        <small>Insert</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
@endsection
@section('content')
<div class="col-md-6">
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Insert Employee</h3>
      </div>
        <form role="form" action="/employee/store" method="POST" enctype="multipart/form-data">
        <div class="box-body">
          <div class="form-group">
              <input type="hidden" name="_token" value="{{csrf_token() }}" />
              <input type="hidden" name="_method" value="POST" />
          </div>
          <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" name="name" placeholder="Name">
          </div>
          <div class="form-group">
            <label>Alamat</label>
            <input type="text" class="form-control" name="alamat" placeholder="Alamat">
          </div>
          <div class="form-group">
            <label>Phone</label>
            <input type="text" class="form-control" name="phone" placeholder="Phone">
          </div>
          <div class="form-group">
            <label>Email</label>
            <input type="text" class="form-control" name="email" placeholder="Email">
          </div>
          <div class="form-group">
            <label>Position</label>
            <select class="form-control" name="position_id">
                @foreach ($position as $pos)
                    <option value="{{$pos->id}}">{{$pos->name}}</option>
                @endforeach
            </select>
          </div>
        </div>
        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
</div>
@endsection
