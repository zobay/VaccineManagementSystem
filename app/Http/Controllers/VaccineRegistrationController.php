<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRegistrationRequest;
use App\Models\Center;
use App\Models\VaccineRegistration;
use Illuminate\Http\Request;

class VaccineRegistrationController extends Controller
{
    public function create()
    {
        return view('home.registration', [
            'centers' => Center::all(),
        ]);
    }

    public function store(StoreRegistrationRequest $request)
    {
//        dd($request->validated());

        VaccineRegistration::create($request->validated());

        return view('home.thanks');
    }
}
