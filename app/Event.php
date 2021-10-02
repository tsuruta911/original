<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $guarded = array('id');
    //以下を追記
    public static $rules = array(
        'eventname' => 'required',
        'content' => 'required',
    );
}
