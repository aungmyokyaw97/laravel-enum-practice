<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'title','description','image','available'
    ];

    public function userOrder(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'orders');
    }


}
