<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
//    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'UPC', 'pressingYear','artist', 'condition', 'note', 'image',
    ];


  public function user()
  {
      return $this->belongsTo(User::class);
  }
}
