<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

class Article extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'body'
    ];
    
    protected function validator(array $data)
    {  
        $rule = [
            'title' => 'required|max:30',
            'body' => 'required',
       ];

        return Validator::make($data, $rule);
    }
}