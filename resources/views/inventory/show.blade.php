@extends('layouts.master')
@section('content-header')
    <h1>
        Inventory
        <small>Control Panel</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Inventory</li>
      </ol>
@endsection
@section('content')
<div class="col-md-8">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">
                Data Pinjaman  : {{$data->name}}
            </h3>
        </div>
        <div class="box-body no-padding">
            <table class="table table-condensed">
                <tr>
                    <th style="width: 10px">#</th>
                    <th>Nama Employee</th>
                    <th>Description</th>
                    <th>Date</th>
                </tr>
                @foreach ($data->employee as $inv)
                    <tr>
                        <td style="width: 10px">{{$loop->iteration}}</td>
                        <td>{{$inv->name}}</td>
                        <td>{{$inv->pivot->description}}</td>
                        <td>{{$inv->pivot->created_at}}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection
