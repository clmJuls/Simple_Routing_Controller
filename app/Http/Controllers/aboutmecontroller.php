<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class aboutmecontroller extends Controller
{
    public function show()
    {
        return view('aboutme')
            ->with('name', 'Mike Julius Coloma')
            ->with('age', 21)
            ->with('email', 'mjbcoloma@gmail.com');
    }
    
}
?>