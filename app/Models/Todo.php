<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;
      public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function getPaginateByLimit(int $limit_count = 10)
    {
        // updated_atで降順に並べたあと、limitで件数制限をかける
         return $this->where('achievement',false)->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
    protected $fillable = [
        'name',
        'range',
        'day',
        'achievement',
    ];
}
