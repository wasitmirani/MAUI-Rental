<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    use HasFactory;

    /**
     * Get the user that owns the Tour
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */

    public function tourDetails(){
        return  $this->belongsTo(User::class, 'tour_id', 'id');
    }
}
