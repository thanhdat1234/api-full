<?php

namespace App\Home;

//use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Jenssegers\Mongodb\Eloquent\Model as Moloquent;
class Posts extends Moloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'post_collection';
    static public function getList(){
        //$post = DB::collection('posts')->all();
        $post = Posts::all();
        return $post;
    }
}
