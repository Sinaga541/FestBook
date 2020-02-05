<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $guarded = [];

    public function author(){
        return $this->belongsto(Author::class);
    }

    public function getImage()
    {
        if (substr($this->image,0,5) == "https"){
            return $this->image;
        }

        if ($this->image){
            return asset($this->image);
        }

        return 'https://via.placeholder.com/150x200?text=No+Image';
    }

    public function rented(){
        return $this->belongsToMany(User::class, 'rent_history')
                    ->withTimestamps();
    }
}
