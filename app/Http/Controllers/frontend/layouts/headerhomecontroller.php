<?php

namespace App\Http\Controllers\frontend\layouts;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class headerhomecontroller extends Controller
{
    public function index()
    {
        return veiw ('frontend/layouts/headerhome');
    }
}
