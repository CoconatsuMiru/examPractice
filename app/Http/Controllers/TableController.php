<?php

namespace App\Http\Controllers;

use App\Models\Player;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class TableController extends Controller
{
    public function index()
    {
        $name = Player::paginate(10);
        return view('table.index', compact('name'));
    }
}
