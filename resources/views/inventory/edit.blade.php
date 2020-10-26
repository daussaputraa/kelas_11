@extends('layouts.master')
@section('content-header')
    <h1>
        Inventory
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
        <h3 class="box-title">Edit Inventory</h3>
      </div>
      <!-- /.box-header -->
      <!-- form start -->
      {{-- <!-- form role="form" --> --}}
      <form role="form" action="/inventory/update" method="POST"
      enctype="multipart/form-data">
        <div class="box-body">
          <div class="form-group">
              <input type="hidden" name="_token" value="{{csrf_token() }}" />
              <input type="hidden" name="_method" value="PUT" />
              <input type="hidden" name="id" value="{{$data->id}}" />
        </div>
            <div class="form-group">
                <label>Nama</label>
                <input type="text" class="form-control" name="name"
                value="{{$data->name}}" placeholder="Name">
            </div>
            <div class="form-group">
                <label>Detail</label>
                <input type="text" class="form-control" name="detail"
                value="{{$data->detail}}" placeholder="Detail">
            </div>
        <!-- /.box-body -->

        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
</div>
@endsection
