@extends('products.layout')

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
        <td>รหัสสินค้า</td>
        <td>{{ $products -> ProductID}}</td>
    </tr>
    <tr>
        <td>ประเภทของเสื้อผ้า</td>
        <td>{{ $products -> TypeOfShirt}}</td>
    </tr>
    <tr>
        <td>ขนาด</td>
        <td>{{ $products -> Size}}</td>
    </tr>
    <tr>
        <td>ราคาสินค้าต่อชิ้น</td>
        <td>{{ $products -> PricePerItem}}</td>
    </tr>
    </table>

    </div>
</div>
@endsection