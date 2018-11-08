<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'content','user_id','done','priority'
    ];

}
