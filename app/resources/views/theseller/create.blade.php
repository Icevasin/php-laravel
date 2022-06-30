@extends('theseller.layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New theseller</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('theseller.index') }}"> Back</a>
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
   
<form action="{{ route('theseller.store') }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>รหัสผู้ขาย:</strong>
                <input type="text" name="SellerID" class="form-control" placeholder="SellerID">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ชื่อผู้ขาย:</strong>
                <input type="text" name="SellerFirstname" class="form-control" placeholder="SellerFirstname">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>นามสกุลผู้ขาย:</strong>
                <input type="text" name="SellerLastname" class="form-control" placeholder="SellerLastname">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email:</strong>
                <input type="text" name="Email" class="form-control" placeholder="Email">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>เบอร์โทรศัพท์:</strong>
                <input type="text" name="phone" class="form-control" placeholder="phone">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ที่อยู่:</strong>
                <input type="text" name="address" class="form-control" placeholder="address">
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
