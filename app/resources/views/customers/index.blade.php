@extends('customers.layout')
@section('content')
@
<div class="row">
	<div class="col-lg-12 margin-tb">
		<div class="pull-left">
			<h2>Laravel 6 CRUD Example</h2>
            <a class="btn btn-info" href="{{ route('customers.create') }}">New Customer</a>
    		</div>
	</div>
</div>

<div class="row">
	<div class="col-lg-12 margin-tb">
	<table border=1>
	<tr>
		<td>รหัสลูกค้า </td>
		<td>ชื่อลูกค้า </td>
		<td>นามสกุลลูกค้า</td>
		<td>เบอร์โทรศัพท์</td>
		<td>ที่อยู่</td>
		
	</tr>
	@foreach ($customers as $cust)
	<tr>
		<td>{{ $cust->customerID }}</td>
		<td>{{ $cust->customerFirstname }}</td>
		<td>{{ $cust->customerLastname }}</td>
		<td>{{ $cust->phone }}</td>
		<td>{{ $cust->address }}</td>
		<td align=center>
            
        <form action="{{ route('customers.destroy',$cust->id) }}" method="POST">
        <a class="btn btn-info" href="{{  route('customers.show',$cust->id)  }}">Show</a>
        <a class="btn btn-primary" href="{{  route('customers.edit',$cust->id)  }}">Edit</a>

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
