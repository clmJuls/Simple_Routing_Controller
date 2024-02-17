<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class skillscontroller extends Controller
{
    public function show()
    {
        return view('skills')
            ->with('skill1', 'Kumain ng Pitong Rice sa Inasal')
            ->with('skill2', 'Mag laho nalang bigla sa klase')
            ->with('skill3', 'Magtago ng cellphone');
    }
}

?>
