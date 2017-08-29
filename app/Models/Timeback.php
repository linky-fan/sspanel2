<?php

namespace App\Models;

class Timeback extends Model
{
    protected $connection = "default";
    protected $table = 'timeback';
    
    public function user()
    {
        $user = User::where("id", $this->attributes['userid'])->first();
        if ($user == null) {
            Bought::where('id', '=', $this->attributes['id'])->delete();
            return null;
        } else {
            return $user;
        }
    }
}