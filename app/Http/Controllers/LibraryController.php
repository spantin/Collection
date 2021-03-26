<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Component;

class LibraryController extends Controller
{
    public function index() {
        $components = ComponentController::getAllComponents();
        $pageData = [
            "components" => $components
        ];
        return view("library", $pageData);
    }
}
