<?php

namespace App\Models;

/**
 * Ann Model
 */

use App\Utils\Tools;

class Withdrawal extends Model
{
    protected $connection = "default";
    protected $table = "withdrawal";

    public function user()
    {
        $user = User::where("id", $this->attributes['user_id'])->first();
        if ($user == null) {
            return null;
        } else {
            return $user;
        }
    }

    public function datetime()
    {
        return date("Y-m-d H:i:s", $this->attributes['datetime']);
    }
}
