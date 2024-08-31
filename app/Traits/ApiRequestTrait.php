<?php

namespace App\Traits;

use App\Libraries\AppLibrary;
use Exception;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Config;

trait ApiRequestTrait
{
    public function makeApiRequest()
    {
		return (object) ['status' => true, 'message' => 'kk'];
    }
}
