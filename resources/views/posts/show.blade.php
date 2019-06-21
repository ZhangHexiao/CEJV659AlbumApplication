
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-7">
                <img src="/storage/{{$post->image}}" class="w-100">
        </div>

            <div class="col-5">
                <div class="d-flex align-items-center">
                    <div >
                    <img src="{{ $post->user->profile->profileImage() }}"
                         class="rounded-circle w-100" style="max-width: 50px" alt="">
                    </div>
                    <div class="font-weight-bold pl-3">
                        <h2>
                        <a href="/profile/{{$post->user->id}}"><span class="text-dark">{{$post->user->username}}   </span></a>
                        </h2>
                    </div>
                    {{--<h3 class="pl-3">{{$post->user->username}}</h3>--}}
                </div>
                <hr>
                <div class="pr-10 pb-5">
                    <h5>{{$post->name}}</h5>
                    <p>{{$post->UPC}}</p>
                    <p>{{$post->artist}}</p>
                    <p>{{$post->condition}}</p>
                    <p>{{$post->note}}</p>
                </div>
                <h5 >
                <a href="/pp/update/{{$post->id}}" class="pl-3 ">Update           |</a>
                <a href="/pp/delete/{{$post->id}}" class="pl-3 ">Delete           |</a>
                <a href="/profile/{{auth()->user()->id}}" class="pl-3 ">Back</a>
                </h5>
                </div>
        </div>
    </div>
@endsection
