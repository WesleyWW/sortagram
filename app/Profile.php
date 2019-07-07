<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];

    public function profileImage()
    {
        $imagePath =  ($this->image) ? $this->image : 'profile/j2bfU2par0H5qCUlpUQRhzP9Q6WEwZijuT3bmDQg.jpeg';
        return '/storage/' . $imagePath;
    }

    public function user() 
    {
        return $this->belongsTo(User::class);
    }
   
}
