<?php

namespace App\Http\Controllers\Preview;

use App\Models\Preview;

class PreviewStoreAction
{
    public function handle($request)
    {
        Preview::create($request);
    }
}
