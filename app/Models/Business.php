<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Business extends Model
{
    use HasFactory;

    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $fillable = ['userId', 'logo', 'title', 'shortDescription', 'fullDescription'];



    /**
     * The users that belong to the Business
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function likes(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'user_business_likes', 'user_id', 'business_id')
            ->withPivot(['like_dislike_val']);;
    }
}
