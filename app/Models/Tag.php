<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tag
 *
 * @property int $id
 * @property string $title
 *
 * @package App\Models
 */
class Tag extends Model
{
    protected $table = 'tags';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'title'
    ];

    public function posts()
    {
        return $this->belongsToMany(
            Post::class,
            'post_tag',
            'tag_id',
            'post_id'
        );
    }
}
