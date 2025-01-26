<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ResourceLDOE extends Model
{
    /** @use HasFactory<\Database\Factories\ResourceLDOEFactory> */
    use HasFactory;
    use SoftDeletes;
}
