<?php

namespace App\Http\Controllers;

//use Faker\Provider\Image;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()

    {
        return view('posts.create');

    }

    public function update(\App\Post $post)

    {
        return view('posts.update',compact('post'));

    }


    public function store()
    {

        $data = request()->validate([

            'name' => 'required',
            'UPC' => 'required',
            'pressingYear' => 'required',
            'artist' => 'required',
            'condition' => 'required',
            'note' => 'required',
            'image' =>['required','image'],
        ]);

        $imagePath = request('image')->store('uploads','public');

        $image =Image::make(public_path("/storage/{$imagePath}"))->fit(1200,1200);
        $image->save();

        auth()->user()->posts()->create([
                'name'=>$data['name'],
                'UPC'=>$data['UPC'],
                'pressingYear'=>$data['pressingYear'],
                'artist'=>$data['artist'],
                'condition'=>$data['condition'],
                'note'=>$data['note'],
                'image'=>$imagePath,
            ]);

        return redirect ('/profile/'.auth()->user()->id);

    }

    public function change(\App\Post $post)
    {

        $data = request()->validate([

            'name' => 'required',
            'UPC' => 'required',
            'pressingYear' => 'required',
            'artist' => 'required',
            'condition' => 'required',
            'note' => 'required',
            'image' =>'',
        ]);


        if (request('image')){

            $imagePath = request('image')->store('profile','public');

            $image =Image::make(public_path("storage/{$imagePath}"))->fit(1000,1000);
            $image->save();
            $imageArray = ['image'=>$imagePath];

        }

        $data = array_merge(
            $data,
            $imageArray?? []
        );
//        dd($post);
        $rep=$post->update($data);

        return redirect ('/profile/'.auth()->user()->id);

    }

    public function show(\App\Post $post)

    {

        return view('posts.show',compact('post'));
    }

    public function delete(\App\Post $post)

    {

          $rep=$post->delete();

        return redirect ('/profile/'.auth()->user()->id);
    }





}
