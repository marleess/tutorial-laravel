<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function upload(Request $request): string
    {
        $picture = $request->file('picture');
        $picture->storePubliclyAs('pictures', $picture->getClientOriginalName(), 'public');

        return "Success uploaded " . $picture->getClientOriginalName();
    }
}
