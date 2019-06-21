
@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="/post_update/{{$post->id}}" enctype="multipart/form-data" method="post">
            @csrf
            <div class="row">
                <div class="col-8 offset-2">

                    <di> <h1>update an original Album</h1></di>

                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label">Name</label>


                        <input id="name" type="text"
                               class="form-control @error('name') is-invalid @enderror"
                               name="name" value="{{ old('name') }}"
                               required autocomplete="name">

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group row">
                        <label for="UPC" class="col-md-4 col-form-label">UPC</label>


                        <input id="UPC" type="text"
                               class="form-control @error('UPC') is-invalid @enderror"
                               name="UPC" value="{{ old('UPC') }}"
                               required autocomplete="UPC">

                        @error('UPC')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>


                    <div class="form-group row">
                        <label for="pressingYear" class="col-md-4 col-form-label">Pressing Year</label>


                        <input id="pressingYear" type="text"
                               class="form-control @error('pressingYear') is-invalid @enderror"
                               name="pressingYear" value="{{ old('pressingYear') }}"
                               required autocomplete="Pressing Year">

                        @error('pressingYear')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>




                    <div class="form-group row">
                        <label for="artist" class="col-md-4 col-form-label">Artist</label>


                        <input id="artist" type="text"
                               class="form-control @error('artist') is-invalid @enderror"
                               name="artist" value="{{ old('artist') }}"
                               required autocomplete="artist">

                        @error('artist')
                        <span class="invalid-feedback" role="alert">
                             <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>


                    <div class="form-group row">
                        <label for="condition" class="col-md-4 col-form-label">Condition</label>

                        <input id="condition" type="text"
                               class="form-control @error('condition') is-invalid @enderror"
                               name="condition" value="{{ old('condition') }}"
                               required autocomplete="Condition">

                        @error('condition')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>


                    <div class="form-group row">
                        <label for="note" class="col-md-4 col-form-label">Note</label>

                        <input id="note" type="text"
                               class="form-control @error('note') is-invalid @enderror"
                               name="note" value="{{ old('note') }}"
                               required autocomplete="Condition">

                        @error('note')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>


                    <div class="row">
                        <label for="image" class="col-md-4 col-form-label">Image</label>
                        <input type="file" class="form-control-file" id="image" name="image">

                        @error('image')
                        <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                         </span>
                        @enderror

                    </div>

                    <div class="row pt-4">
                        <button class="btn btn-primary">Update original Album</button>
                    </div>

                </div>
            </div>
        </form>
    </div>
@endsection
