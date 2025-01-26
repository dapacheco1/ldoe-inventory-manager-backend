<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Item extends Model
{
    /** @use HasFactory<\Database\Factories\ItemFactory> */
    use HasFactory;
    use SoftDeletes;

    //relationships
    public function categories(){
        return $this->belongsTo(Category::class);
    }

    public function resources(){
        return $this->belongsTo(ResourceLDOE::class);
    }

    public function inventories(){
        return $this->belongsTo(Inventory::class);
    }

    public function settings(){
        return $this->belongsTo(Setting::class);
    }

}
