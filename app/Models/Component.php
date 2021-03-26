<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Component extends Model
{
    use HasFactory;

    public function getComponentType(){
        return ComponentType::find($this->component_type_id);
    }

    public function getKeywords(){
        return ComponentKeyword::where('component_id', $this->id)->get();
    }
}
