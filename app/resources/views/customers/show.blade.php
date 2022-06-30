@extends('customers.layout')

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
        <td>รหัสลูกค้า</td>
        <td>{{ $customers -> customerID}}</td>
    </tr>
    <tr>
        <td>ชื่อลูกค้า</td>
        <td>{{ $customers -> customerFirstname}}</td>
    </tr>
    <tr>
        <td>นามสกุลลูกค้า</td>
        <td>{{ $customers -> customerLastname}}</td>
    </tr>
    <tr>
        <td>โทรศัพท์</td>
        <td>{{ $customers -> phone}}</td>
    </tr>
    <tr>
        <td>ที่อยู่</td>
        <td>{{ $customers -> address}}</td>
    </tr>
    </table>

    </div>
</div>
@endsection