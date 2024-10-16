<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'author',
        'profile_pic',
        'content',
        'rating',
        'attraction_id',
    ];

    public function attraction()
    {
        return $this->belongsTo(Attraction::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function destination()
    {
        return $this->belongsTo(Destination::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function getRouteKeyName()
    {
        return 'name';
    }

    public function getDisplayPictureAttribute($value)
    {
        return asset($value);
    }

    public function getDisplayPictureThumbAttribute($value)
    {
        return asset($value);
    }

    
}
