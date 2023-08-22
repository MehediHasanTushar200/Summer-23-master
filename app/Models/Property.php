<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;
    protected $guarded=[];
    
    public function project()
    {
    
    return $this->belongsTo(Project::class,'project_id','id');
    
    }
}
// return $this->belongsTo(Property_type::class,'property_type_id','id');
