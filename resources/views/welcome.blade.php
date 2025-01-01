@extends("layout")

@section("naslovStranice")
    Home
@endsection

@section("sadrzajStranice")
    <p>Trenutno vreme je:{{date("h:i:s")}}</p>
@endsection
