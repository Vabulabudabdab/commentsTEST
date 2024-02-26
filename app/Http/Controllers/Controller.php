<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    protected $usermodel;
    protected $commentModel;
    public function __construct(User $user, Comment $comment) {
        $this->usermodel = $user;
        $this->commentModel = $comment;
    }

    function welcome() {

        $comments = DB::table('posts')->select('*')->get();

        return view('welcome', ['posts' => $comments]);
    }


}
