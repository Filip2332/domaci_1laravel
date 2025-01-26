@extends("layout")

@section("naslovStranice")

Shop

@endsection
@section("sadrzajStranice")

@foreach($products as $product)
    <p>{{$product->name}}</p>
    <p>{{$product->description}}</p>
    <p>{{$product->price}}</p>
    <p>{{$product->amount}}</p>
@endforeach

@endsection


