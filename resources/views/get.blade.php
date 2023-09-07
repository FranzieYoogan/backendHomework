@extends('welcome')
@section('content')

<head>
  <link rel="stylesheet" href="/css/get.css">
</head>
<form class="container" action="/get" method="GET">
@csrf

<section class="borderStyle">

@foreach ($teamsName as $team)
  <input  type="hidden" id="team" value="{{$team->teamsName}}"/>   

  @endforeach

  <secction class="containerFor">
  
@for($i = 1; $i<101; $i++)

<h1 class="textStyle">{{$i}} => {{($team->teamsName)}}<h1> 
  
@endfor
</section


</section>
</form>
@endsection