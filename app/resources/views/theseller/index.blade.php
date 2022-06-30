@extends('theseller.layout')
@section('content')
@
<div class="row">
	<div class="col-lg-12 margin-tb">
		<div class="pull-left">
			<h2>Laravel 6 CRUD Example</h2>
            <a class="btn btn-info" href="{{ route('theseller.create') }}">New seller</a>
    		</div>
	</div>
</div>

<div class="row">
	<div class="col-lg-12 margin-tb">
	<table border=1>
	<tr>
		<td>รหัสผู้ขาย</td>
		<td>ชื่อผู้ขาย</td>
		<td>นามสกุลผู้ขาย</td>
        <td>Email</td>
		<td>เบอร์โทรศัพท์</td>
		<td>ที่อยู่</td>
		
	</tr>
	@foreach ($theseller as $seller)
	<tr>
		<td>{{ $seller->SellerID }}</td>
		<td>{{ $seller->SellerFirstname }}</td>
		<td>{{ $seller->SellerLastname }}</td>
        <td>{{ $seller->Email }}</td>
		<td>{{ $seller->Phone }}</td>
		<td>{{ $seller->Address }}</td>
		<td align=center>
            
        <form action="{{ route('theseller.destroy',$seller->id) }}" method="POST">
        <a class="btn btn-info" href="{{  route('theseller.show',$seller->id)  }}">Show</a>
        <a class="btn btn-primary" href="{{  route('theseller.edit',$seller->id)  }}">Edit</a>

        @csrf
        @method('DELETE')

        <button type="submit" class="btn btn-danger">Delete</button>
        </form>
        </td>




	</tr>
	@endforeach
	</div>
</div>
@endsection
