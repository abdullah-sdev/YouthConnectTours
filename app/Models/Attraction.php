<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attraction extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'display_picture',
        'destination_id'
    ];

    public function slug()
    {

        return str_replace(' ', '-', $this->snake_case($this->name));
    }
    private function snake_case($string)
    {
        return ltrim(strtolower(preg_replace('/\s+/', '_', $string)), '_');
    }        

    public function destination()
    {
        return $this->belongsTo(Destination::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function galleries()
    {
        return $this->hasMany(Gallery::class);
    }

    // public function getRouteKeyName()
    // {
    //     return 'name';
    // }

    // public function getDisplayPictureAttribute($value)
    // {
    //     return asset($value);
    // }

    public function getDisplayPictureThumbAttribute($value)
    {
        return asset($value);
    }

    public function getIdealTimePeriodAttribute($value)
    {
        return $value;
    }

    public function getAverageRatingAttribute()
    {
        return $this->reviews->avg('rating');
    }

    public function getReviewsCountAttribute()
    {
        return $this->reviews->count();
    }
    
}
