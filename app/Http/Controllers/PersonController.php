<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function index(): View
    {
        return view('person.person');
    }

    public function store(Request $request)
    {
        $person = new Person([
            'id' => $request->get('person_id'),
            'name' => $request->get('person_name')
        ]);

        $person->save();

        return view('person.person');
    }
}
