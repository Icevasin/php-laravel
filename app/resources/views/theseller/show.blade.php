@extends('theseller.layout')

@section('content')
<div class="row">
	<div class="col-lg-12 margin-tb">
		<div class="pull-left">
			<h2>Laravel 6 CRUD Example</h2>
    		</div>
	</div>
</div>

<div class="row">
	<div class="col-lg-12 margin-tb">

    <table border=1>
    <tr>
        <td>รหัสผู้ขาย</td>
        <td>{{ $theseller -> SellerID}}</td>
    </tr>
    <tr>
        <td>ชื่อผู้ขาย</td>
        <td>{{ $theseller -> SellerFirstname}}</td>
    </tr>
    <tr>
        <td>นามสกุลผู้ขาย</td>
        <td>{{ $theseller -> SellerLastname}}</td>
    </tr>
    <tr>
        <td>Email</td>
        <td>{{ $theseller -> Email}}</td>
    </tr>
    <tr>
        <td>โทรศัพท์</td>
        <td>{{ $theseller -> Phone}}</td>
    </tr>
    <tr>
        <td>ที่อยู่</td>
        <td>{{ $theseller -> Address}}</td>
    </tr>
    </table>

    </div>
</div>
@endsection