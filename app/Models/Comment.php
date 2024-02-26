<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Comment extends Model {


    function comments() {

        $comments = Post::find(2)->comments();

        $test = DB::table('posts')->select('comment')->get();


        foreach ($comments as $comment) {

        }

    }

}
