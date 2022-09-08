<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\SoftDeletes;

class ConditionDevice extends Pivot
{
    use HasFactory, SoftDeletes;

    public $incrementing = true;

    protected $softDelete = true;
}
