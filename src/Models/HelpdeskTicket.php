<?php

namespace Albinvar\Helpdesk\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HelpdeskTicket extends Model
{
    use HasFactory;


    // Disable Laravel's mass assignment protection
    protected $guarded = [];

    protected $fillable = [
      'user_id',
      'priority_id',
      'department_id',
      'title',
      'labels',
  ];


    protected $casts = [

    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
