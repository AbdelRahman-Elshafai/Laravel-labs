<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Post extends Model
{
    protected $fillable = [
        'title',
        'description',
        'user_id'
    ];


    public function user()
    {

        return $this->belongsTo(User::class);

    }

    public function getHumanReadableDateAttribute(){

        return $this->created_at->format('l jS  F Y h:i:s A');
    }


}
