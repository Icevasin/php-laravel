@extends('products.layout')
@section('content')
@
<div class="row">
	<div class="col-lg-12 margin-tb">
		<div class="pull-left">
			<h2>Laravel 6 CRUD Example</h2>
            <a class="btn btn-info" href="{{ route('products.create') }}">New Product</a>
    		</div>
	</div>
</div>

<div class="row">
	<div class="col-lg-12 margin-tb">
	<table border=1>
	<tr>
		<td>รหัสสินค้า </td>
		<td>ประเภทของเสื้อผ้า </td>
		<td>ขนาด</td>
		<td>ราคาสินค้าต่อชิ้น</td>
		
	</tr>
	@foreach ($products as $pdt)
	<tr>
		<td>{{ $pdt->ProductID }}</td>
		<td>{{ $pdt->TypeOfShirt }}</td>
		<td>{{ $pdt->Size }}</td>
		<td>{{ $pdt->PricePerItem }}</td>
		<td align=center>
            
        <form action="{{ route('products.destroy',$pdt->id) }}" method="POST">
        <a class="btn btn-info" href="{{  route('products.show',$pdt->id)  }}">Show</a>
        <a class="btn btn-primary" href="{{  route('products.edit',$pdt->id)  }}">Edit</a>

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
