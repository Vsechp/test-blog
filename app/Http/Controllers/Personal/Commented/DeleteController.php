<?php

namespace App\Http\Controllers\Personal\Commented;

use App\Http\Controllers\Controller;
use App\Models\Comment;

class DeleteController extends Controller
{
    public function __invoke(Comment $comment)
    {
        $comment = delete();
        return view('personal.commented.delete', compact('comment'));
    }
}
