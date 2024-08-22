<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
   
    protected $fillable = ['name', 'status', 'duration','description','remark', 'user_id'];
    use HasFactory;
    public function logs()
    {
        return $this->hasMany(ActivityLog::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
