<?php

namespace App\Http\Traits;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

trait FilesTrait
{
    protected function save_file($path, $name)
    {
        $path_dir = $path;
        $name = $name;
        $fake_name = Str::random(8);
        
        if (!Storage::exists('/'.$path_dir.'/'.$fake_name.' - '.$name)) {
            return $fake_name.' - '.$name;
        } else {
            $this->save_file($path, $name);
        }
    }
}