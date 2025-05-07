<?php

namespace App\Traits;

use Illuminate\Http\UploadedFile;

trait FileUpload
{
    //
    public function uploadFile(UploadedFile $file, string  $directory = 'uploads'): string
    {
        $filename = 'edu-core_' . uniqid() . " . " . $file->getClientOriginalExtension();
        $file->move(public_path($directory), $filename);
        return $directory . '/' . $filename;
    }
}
