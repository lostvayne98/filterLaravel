<?php

namespace App\Models;

use App\Filters\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UserStatus extends Model
{
    use HasFactory;
    use Filterable;

    protected $fillable = [
        'user_id',
        'status'
    ];
    /*protected $dateFormat = 'Y-m-d';*/

    public function users():BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
