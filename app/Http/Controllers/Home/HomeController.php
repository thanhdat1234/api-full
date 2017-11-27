<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Home\Posts;
class HomeController extends Controller
{
    //
    public function testMongo(){
        echo "o";
       $post = Posts::getList();
       print_r($post);
    }
}
