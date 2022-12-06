<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    //table name 
    protected $table = 'posts';

    //Primary Key
    public $primaryKey = 'id';
     
    //Timestapms
    public $timestapms = true;

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
