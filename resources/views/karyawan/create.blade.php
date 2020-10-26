@extends('layouts.master')
@section('content-header')
    <h1>
        Karyawan
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
        <h3 class="box-title">Insert Karyawan</h3>
      </div>
      <!-- /.box-header -->
      <!-- form start -->
      {{-- <!-- form role="form" --> --}}
      <form role="form" action="/karyawan/store" method="POST"
      enctype="multipart/form-data">
        <div class="box-body">
          <div class="form-group">
              <input type="hidden" name="_token" value="{{csrf_token() }}" />
              <input type="hidden" name="_method" value="POST" />
          </div>
          <div class="form-group">
            <label>Nama</label>
            <input type="text" class="form-control" name="nama" placeholder="Nama">
          </div>
          <div class="form-group">
            <label>Alamat</label>
            <input type="text" class="form-control" name="alamat" placeholder="Alamat">
          </div>
          <div class="form-group">
            <label>Jabatan</label>
            <input type="text" class="form-control" name="jabatan"placeholder="Jabatan">
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
