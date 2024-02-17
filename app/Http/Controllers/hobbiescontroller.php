<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class hobbiescontroller extends Controller
{
    public function show()
    {
        return view('hobbies')
            ->with('hobbie1', 'Basketball')
            ->with('hobbie2', 'Watching Anime')
            ->with('hobbie3', 'Playing Computer Games');
    }
}
?>
