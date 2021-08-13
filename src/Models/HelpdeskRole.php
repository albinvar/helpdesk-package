<?php

namespace Albinvar\Helpdesk\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HelpdeskRole extends Model
{
    use HasFactory;


    // Disable Laravel's mass assignment protection
    protected $guarded = [];

    protected $fillable = [
      'name',
    ];


    protected $casts = [

    ];
}
