<?php

namespace App\Http\Controllers;

use App\Models\DummyApi;
use Illuminate\Http\Request;

class DummyApiController extends Controller
{
    function returndata()
    {
        return 'Hi,This is my first Api';
    }

    function enterdata(Request $request)
    {
        DummyApi::create([
            'deviceName' => $request->deviceName,
            'deviceDescription' => $request->deviceDescription,
        ]);
        return 'Done';
    }
}
