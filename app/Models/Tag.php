<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function getRouteKeyName()
    {
        return 'name';
    }

    /**
     * The attractions that belong to the Tag
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function attractions(): BelongsToMany
    {
        return $this->belongsToMany(Attraction::class, 'attraction_tag_table', 'attraction_id', 'tag_id');
    }
}
