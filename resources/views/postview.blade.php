@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Postview</title>
</head>
<body>

<div class="card" style="width: 25%;">
<p class="card-text">{{$data->user->name}}</p>
<p class="card-text">Posted At: <span>{{$data->created_at}}</span></p>
  <img src="{{asset('uploads/post/'.$data->postimage)}}" class="card-img-top" alt="...">
  <div class="card-body">
      <p>Description:</p>
    <h5 class="card-title">{{$data->postdescription}}</h5>
<p class="card-text">Tags: </p>

  </div>

  <div class="card-body">
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
  </div>
</div>
</div>
</body>
</html>
@endsection