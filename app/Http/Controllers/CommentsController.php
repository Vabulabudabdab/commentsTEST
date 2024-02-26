<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CommentsController extends Controller {

    function post(Request $request) {

        $comment = $request->post('comment');

        $user = $request->post('username');

        DB::table('posts')->insert(['user'  => $user,'comment' => $comment]);

        return redirect('/');
    }

}
