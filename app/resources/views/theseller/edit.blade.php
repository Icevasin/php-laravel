@extends('theseller.layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Seller</h2>
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
   
<form action="{{ route('theseller.update',$theseller->id)}}" method="POST">
    @csrf
    @method('PUT')
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>รหัสผู้ขาย:</strong>
                <input type="text" name="SellerID" class="form-control" placeholder="SellerID" value="{{ $theseller -> SellerID }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ชื่อผู้ขาย:</strong>
                <input type="text" name="SellerFirstname" class="form-control" placeholder="SellerFirstname" value="{{ $theseller -> SellerFirstname }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>นามสกุลผู้ขาย:</strong>
                <input type="text" name="SellerLastname" class="form-control" placeholder="SellerLastname" value="{{ $theseller -> SellerLastname }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email:</strong>
                <input type="text" name="Email" class="form-control" placeholder="Email" value="{{ $theseller -> Email }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>เบอร์โทรศัพท์:</strong>
                <input type="text" name="Phone" class="form-control" placeholder="Phone" value="{{ $theseller -> Phone }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ที่อยู่:</strong>
                <input type="text" name="Address" class="form-control" placeholder="Address" value="{{ $theseller -> Address }}">
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
