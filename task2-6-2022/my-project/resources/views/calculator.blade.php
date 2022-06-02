@extends('masterpage')

@section('content')
<div class="container">
    <h2>Calculater form</h2>
    <form action="" method="get">
      {{ csrf_field() }}

      <div class="form-group">
        <label for="email">Number 1:</label>
        <input type="number" class="form-control"   name="num1">
      </div>
      <div class="form-group">
        <label for="pwd">Number 2:</label>
        <input type="number" class="form-control"   name="num2">
      </div><br>
      <select name = "operator">
          <option value="add">+</option>
          <option value="subtract">-</option>
          <option value="multiply">*</option>
          <option value="divide">/</option>
      </select><br><br>
      <button type="submit" class="btn btn-default" name="btn">Enter</button>

      <div>operation result is : {{$result}}</div>

    </form>
  </div>

@endsection
