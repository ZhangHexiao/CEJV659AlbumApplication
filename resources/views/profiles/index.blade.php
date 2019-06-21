
@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
            <div class="col-3 p-5">
                <img src="{{$user->profile->profileImage()}}" class="rounded-circle" height="200px">
            </div>
            <div class="col-9 pt-5">
                <div><h1>Personal Album Service</h1></div>
                <div class="d-flex justify-content-between align-items-lg-baseline">

                    <div class="d-flex align-items-center pb-3">

                    <h3>Welcome, {{ $user->username }}</h3>

                        <example-component> </example-component>

                    </div>
                    <div>
                     @can('update', $user->profile)
                        <a href="/pp/create">Add New Albums</a>
                     @endcan
                    </div>

                </div>

                <div>

                    @can('update',$user->profile)
                        <a href="/profile/{{$user->id}}/edit">Edit Personal File</a>
                    @endcan


                </div>

                <div class="d-flex">
                <div class="pr-5 font-weight-bold "><strong><h3>{{$user->posts->count()}} Albums</h3></strong> </div>
                </div>

                <div class="pt-4 font-weight-bold">{{ $user->profile->description}}</div>
                <div>In our album service your can make your own album list, follow others and add your own favorate albums.</div>

                <div> <a href="{{$user->profile->url}}" >{{ $user->profile->url}}</a></div>
            </div>

            <div class="row pt-5">
                @foreach($user->posts as $post)

                <div class="col-4 pd-4">
                    <a href="/p/{{$post->id}}">
                        <img src="/storage/{{ $post->image }}" class="w-100">
                    </a>
                </div>

                @endforeach
                {{--<div class="col-4">--}}
                    {{--<img src="/imgLogo/fantexi.jpg" class="w-100">--}}
                {{--</div>--}}
            </div>
    </div>
</div>
@endsection
