@extends('welcome')
@section('content')
    
<head>
    <link rel="stylesheet" href="{{asset('/css/randomNumbers.css')}}">
</head>

    <section class="container">
        <form class="formStyle" action="/randomNumbers" method="GET">
            @csrf
            <input type="text" id="number" class="form-control"  value="Value: {{$number}}">

        <section class="containerButton">
        <input type="submit" class="btn btn-secondary buttonStyle" value="BIBIDI BABIDI BOO">
    </section>
    </form>
    </section>

@endsection