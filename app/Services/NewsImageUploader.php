<?php

namespace App\Services;

use App\Enums\TypeEnum;
use Illuminate\Http\Request;

class NewsImageUploader
{
    /**
     * Modal handler to upload description image
     *
     * @return mixed
     * @author @cakadi190
     */
    public function process(Request $request)
    {
        return $request->file('image')->store(TypeEnum::NEWSDESC->value, 'public');
    }
}
