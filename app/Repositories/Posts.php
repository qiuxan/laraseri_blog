<?php
/**
 * Created by PhpStorm.
 * User: xianqiu
 * Date: 5/11/18
 * Time: 12:13 PM
 */

namespace App\Repositories;

use App\Post;

class Posts{

    public function all(){

        //return all posts

        return Post::all();

    }

    public function find(){


    }
}