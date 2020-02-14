<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    //User =>belongsTO
    //Rreplies = >hasmany
    //categories => belongsTo
    //like

    public function replies(){
        return $this->hasMany(Reply::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }



    public function category(){
        return $this->belongsTo(Category::class);
    }


}
