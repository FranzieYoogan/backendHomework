@extends('welcome')


@section('content')

<head>
    <link rel="stylesheet" href="{{asset('/css/calculator.css')}}">
</head>
<form class="container" action="/calculator" method="GET">
@csrf
<section class="borderStyle">
    <section class="">
    <div class="col-sm-3">
        <input type="number"  class="form-control formStyle" id="input1" name="input1" placeholder="Value1:">
      </div>
      <div class="col-sm-3">
        <input type="number"  class="form-control formStyle" id="input2" name="input2" placeholder="value2:">
      </div>
    </section>

    <select name="selectOption" id="selectOption" class="form-select selectStyles" aria-label="Default select example">
        <option selected>Choose The Operator</option>
        <option value="+">SUM</option>
        <option value="-">SUBTRACTION</option>
        <option value="*">MULTIPLICATION</option>
        <option value="/">DIVISION</option>
      </select>
     
      <h1 class="textStyle">RESULT: {{$result}}</h1>

      <input type="submit" class="btn btn-primary buttonStyle" value="OPERATION"/>
    </section>
</form>
    
@endsection