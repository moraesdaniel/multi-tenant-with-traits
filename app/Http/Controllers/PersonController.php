<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function index(): View
    {
        $people = Person::all();
        return view('person.person', ['people' => $people]);
    }

    public function store(Request $request)
    {
        $person = new Person([
            'id' => $request->get('person_id'),
            'name' => $request->get('person_name')
        ]);

        $person->save();
        $people = Person::all();
        return view('person.person', ['people' => $people]);
    }
}
