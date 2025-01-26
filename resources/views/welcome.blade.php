@extends("layout")

@section("naslovStranice")
    Home
@endsection

@section("sadrzajStranice")
    @if($trenutniSat >= 0 && $trenutniSat <= 12)
        <p>Dobro jutro</p>
    @endif
    <p>Trenutno vreme je:{{$trenutnoVreme}}</p>
    <p>Trenutno sati je:{{$trenutniSat}}</p>
@endsection
