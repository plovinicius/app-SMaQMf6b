<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Log\LogResource;
use App\Models\Log;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class HistoryController extends Controller
{
    public function index(Request $request): AnonymousResourceCollection
    {
        $logs = Log::paginate(config('utils.per_page'));

        return LogResource::collection($logs);
    }
}
