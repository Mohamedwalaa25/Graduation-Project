<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Like extends Model
{
    protected $fillable = [

        'user_id',
        'article_id',
    ];

    public function user()
    {

        return $this->belongsTo(User::class);
    }

    public function article()
    {

        return $this->belongsTo(Article::class);
    }
}
