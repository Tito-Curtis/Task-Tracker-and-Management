<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActivityLog extends Model
{
     
    protected $fillable = ['activity_id', 'user_id', 'status', 'remark', 'updated_at'];
    use HasFactory;
    public function activity()
    {
        return $this->belongsTo(Activity::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}
