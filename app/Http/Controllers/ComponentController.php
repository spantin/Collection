<?php

namespace App\Http\Controllers;
use App\Models\Component;
use Illuminate\Http\Request;

class ComponentController extends Controller
{
    public function index($componentID){
        $pageData = [
            "component" => Component::find($componentID)
        ];
        return view('component', $pageData);
    }

    public static function getAllComponents(){
        return Component::all();
    }
}
