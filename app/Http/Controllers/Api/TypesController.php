<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Type;

class TypesController extends Controller
{
    public function index() {
        $types = Type::select(['id', 'name'])->get();
        return $types;
    }
}
