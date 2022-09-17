<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Transaction extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id'
    ];

    public function detail()
    {

        {
            return $this->hasMany('App\Models\TransactionDetail');
        }
    }
}
