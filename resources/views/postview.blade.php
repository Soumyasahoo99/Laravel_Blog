@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Postview</title>
    <style>
        .card {
            padding-left: 20px;
            padding-right: 20px;
            box-shadow: 0 0px 20px 0 rgba(0, 0, 0, 0.2);
            background-color: rgba(0, 0, 0, 0.2);
            transition: 0.3s;
        }

        .card-text {
            font-weight: bold;
            font-style: oblique;
            color: peru;
        }

        span {
            color: black;
            font-weight: normal;
            font-style: normal;
        }
    </style>
</head>

<body>
    <div class="container" class="container-md">

        <a href="/home" class="btn btn-info float-left">Back</a>

        <form action="/comment/{{$data->id}}" method="POST">
            @csrf
            <div class="card bg-dark" style="width: 40rem">
                <ul class="list-group  ">
                    <img src="{{asset('uploads/post/'.$data->postimage)}}" class="card-img-top" alt="...">
                    <li class="list-group-item ">
                        <p class="card-text">Posted By: &nbsp;<span>{{$data->user->name}}</span></p>
                    </li>
                    <li class="list-group-item ">
                        <p class="card-text">Posted At: &nbsp;<span>{{$data->created_at}}</span></p>
                    </li>
                    <li class="list-group-item ">
                        <p class="card-text">Description: &nbsp;<span>{{$data->postdescription}}</span></p>
                    </li>
                    <li class="list-group-item ">
                        <p class="card-text">Tags:</p>
                        @foreach($arr as $tag)
                        <span>{{$tag->tagname}}</span>
                        @endforeach
                    </li>
                    <li class="list-group-item ">
                        <p class="card-text">Comments:</p>
                        @foreach($comment as $cmt)
                        <p>{{$data->user->name}}: <span>{{$cmt->commentname}}</span> <span class="float-right">{{$data->created_at}}</span></p>
                        @endforeach
                    </li>
                    <li class="list-group-item ">
                        <label for="commentname" class="form-label card-text">Comment:</label>
                        <textarea class="form-control" name="commentname" id="commentname" rows="2"></textarea>
                        <input type="submit" value="Reply" class="btn btn-md btn-success">
                    </li>
                </ul>

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