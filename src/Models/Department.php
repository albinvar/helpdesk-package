<?php

namespace Albinvar\Helpdesk\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;


    // Disable Laravel's mass assignment protection
    protected $guarded = [];
    
    protected $table = 'helpdesk_departments';

    protected $fillable = [
      'name',
      'description',
  ];


    protected $casts = [

    ];

    public function tickets()
    {
        return $this->hasMany(HelpdeskTicket::class);
    }
}
