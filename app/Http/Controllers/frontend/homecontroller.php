<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class homecontroller extends Controller
{
    public function index()
    {
        return veiw ('frontend.index');
    }
}
