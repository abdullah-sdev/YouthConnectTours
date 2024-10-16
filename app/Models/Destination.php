<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'ideal_time_period',
        'ideal_time_to_visit',
        // 'destination_id'
    ];

    public function attractions()
    {
        return $this->hasMany(Attraction::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    // public function getRouteKeyName()
    // {
    //     return 'name';
    // }

    public function getIdealTimePeriodAttribute($value)
    {
        return $value;
    }

    public function getIdealTimeToVisitAttribute($value)
    {
        return $value;
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
