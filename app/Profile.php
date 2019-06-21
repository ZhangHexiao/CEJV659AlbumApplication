<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'title', 'description','url', 'image',
    ];

    public function profileImage()
    {
        $imagePath = ($this->image)? '/storage/'.$this->image : '/storage/profile/4lGEB2Yl6Dzk5Nx6GsDRIftqIADJy34zrOqHe4y6.jpeg';
        return $imagePath;


    }

    public function user()
    {
        return $this->belongsTo(User::class);

    }
}
