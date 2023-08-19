<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Tasks;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\StoreTaskRequest;
use App\Http\Requests\UpdateTaskRequest;

class TaskController extends Controller
{
    public function index()
    {
        return Task::all();
    }

    public function create(): Response
    {
        return Task::all();
    }
}
