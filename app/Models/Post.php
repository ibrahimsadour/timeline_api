<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    protected $table = 'posts';

    protected $fillable = [
        'user_id', 'title','published','type','published_till','deleted_at','created_at', 'updated_at'
    ];

    /**
     * @todo scopeSelection
     * @todo select all items of the table posts with this method
     * @param  mixed $query
     * @return void
     */
    public function scopeSelection($query)
    {
        return $query->select(
        'id','user_id','title','published','type','published_till','deleted_at','created_at','updated_at');
    }

    /**
     * @todo scopePublished
     * @todo select the published items of the table posts with this method
     * @param  mixed $query
     * @return void
     */
    public function scopePublished($query)
    {
        return $query->where('published', 1);
    }
    
}
