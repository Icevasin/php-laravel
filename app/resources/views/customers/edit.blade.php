@extends('customers.layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Customer</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('customers.index') }}"> Back</a>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('customers.update',$customers->id)}}" method="POST">
    @csrf
    @method('PUT')
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>รหัสลูกค้า:</strong>
                <input type="text" name="customerID" class="form-control" placeholder="customerID" value="{{ $customers -> customerID }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ชื่อลูกค้า:</strong>
                <input type="text" name="customerFirstname" class="form-control" placeholder="customerFirstname" value="{{ $customers -> customerFirstname }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>นามสกุลลูกค้า:</strong>
                <input type="text" name="customerLastname" class="form-control" placeholder="customerLastname" value="{{ $customers -> customerLastname }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>เบอร์โทรศัพท์:</strong>
                <input type="text" name="phone" class="form-control" placeholder="phone" value="{{ $customers -> phone }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ที่อยู่:</strong>
                <input type="text" name="address" class="form-control" placeholder="address" value="{{ $customers -> address }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <input type="reset" class="btn btn-warning" value="ยกเลิก" >
            <input type="submit" class="btn btn-success" value="บันทึกข้อมูล" >
            </div>
        </div>
     </div>
</form>
@endsection
