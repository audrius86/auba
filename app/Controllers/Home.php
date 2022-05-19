<?php

namespace App\Controllers;

use App\Models\CommentModel;
use App\Models\NewsModel;

class Home extends BaseController
{
    public function index()
    {

        $data = [
            'news' => (new NewsModel)->findAllWithComments(),
        ];
        return view('home', $data);
    }
}
