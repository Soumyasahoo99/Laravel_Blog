@extends('layouts.app')

@section('content')
<div class="container">
    <div class="container px-4">
        <div class="row gx-5">
            <div class="col">
                <div class="card">
                    <div class="card-header">Tags

                        <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#tagModal" style="float: right;">Add Tag</button>
                        <div class="modal fade" id="tagModal" tabindex="-1" aria-labelledby="tagModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="tagModalLabel">Add Tags</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="post" action="{{ route('tagss') }}" enctype="multipart/form-data">
                                            @csrf
                                            <select name="tagsname" class="form-select" aria-label="Default select example">
                                                <option value="Technology">Technology</option>
                                                <option value="Web Dev">Web Dev</option>
                                                <option value="Media">Media</option>
                                                <option value="News">News</option>
                                                <option value="Jobs">Jobs</option>
                                                <option value="IT">IT</option>
                                                <option value="Weather">Weather</option>
                                            </select>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save Post</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="card-body">
                        <table>
                            @foreach($tags as $tag)
                            <tr>
                               <a href="/tagdetaiils/{{$tag->id}}">{{$tag->tagname}}</a> <br>

                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-header">Posts

                        <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#Modalpost" style="float: right;">Add Post</button>
                        <div class="modal fade" id="Modalpost" tabindex="-1" aria-labelledby="postModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="postModalLabel">Add Posts</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">

                                        <form action="{{url('postssss')}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="posttitle" class="form-label">Title:</label>
                                                <input type="text" name="posttitle" class="form-control" id="posttitle" aria-describedby="emailHelp">
                                            </div>
                                            <div class="mb-3">
                                                <label for="postdescription" class="form-label">Description:</label>
                                                <textarea class="form-control" name="postdescription" id="postdescription" rows="3"></textarea>
                                            </div>
                                            <div class="mb-3">
                                                <label for="postimage" class="form-label">Image:</label>
                                                <input type="file" name="postimage" class="form-control" id="postimage" aria-describedby="emailHelp">
                                            </div>
                                            <div class="mb-3">
                                                <label for="tag_id" class="form-label">Tags:</label>
                                                @foreach($tags as $tag)
                                                <div class="form-check">

                                                    <input class="form-check-input" name="tag_id[]" type="checkbox" value="{{$tag->id}}" id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        {{$tag->tagname}}
                                                    </label>
                                                </div>

                                                @endforeach

                                                <!-- <select name="posttag" class="form-control js-example-basic-multiple" style="width: 20.75em;" id="" multiple="multiple">
                                                    @foreach($tags as $tag)
                                                    <option value="{{$tag->id}}">{{$tag->tagname}}</option>
                                                    @endforeach
                                                </select> -->
                                                <!-- <input type="text" class="form-control" name="posttag" id="posttag" aria-describedby="emailHelp"> -->
                                            </div>




                                            <!-- <button type="submit" class="btn btn-primary">Submit</button> -->

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" name="savepost" class="btn btn-primary">Save </button>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="card-body">
                        <div class="card" style="width: 500px;">
                            @foreach($posts as $post)
                            <div class="text-center">
                                <a href="postview/{{$post->id}}">  <img src="{{asset('uploads/post/'.$post->postimage)}}" class="card-img-top" alt="..."> </a>
                              
                            </div>
                            <div class="card-body">
                      <a href="">{{$post->posttitle." ".'posted by'."   ".$post->user->name.''}}</a>
                            
                              <a href="">{{$post->created_at}}</a>   
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @endsection