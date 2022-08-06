<?php

namespace App\Traits;

use Illuminate\Http\Request;

trait UploadimageTrait
{

    public function upload(Request $request, $filename){

    $image= $request->file('photo')->getClientOriginalName();
    $path = $request->file('photo')->storeAs($filename, $image, 'mahmoud');

    return $path;
}
}
