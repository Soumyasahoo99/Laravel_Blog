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
    <div class="container" class="container-md">
        <form action="/comment/{{$data->id}}" method="POST">
            @csrf
            <div class="card" style="width: 400px;">
            
                <p class="card-text">Posted By:<span>{{$data->user->name}}</span></p>
                <p class="card-text">Posted At: <span>{{$data->created_at}}</span></p>
                <img src="{{asset('uploads/post/'.$data->postimage)}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Description:</h5>
                    <p class="card-title">{{$data->postdescription}}</p>
                    <h5 class="card-title">Tags:</h5>
                    <p class="card-title">{{$data->tag->tagname}} </p>
                    <h5 class="card-title">Comments:</h5>
                    @foreach($comment as $cmt)
                    <p>{{$data->user->name}}: <span>{{$cmt->commentname}}</span> </p>
                    @endforeach




                    <label for="commentname" class="form-label">Comment:</label>
                    <textarea class="form-control" name="commentname" id="commentname" rows="2"></textarea>
                    <input type="submit" value="Reply" class="btn btn-success">
        </form>
    </div>
    </div>
    <div class="card-body">

    </div>
    </div>
    </div>
</body>

</html>
@endsection