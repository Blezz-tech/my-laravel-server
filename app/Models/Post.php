<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use App\Models\Review;
use App\Models\Rubric;

/**
 * Class Post
 *
 * @property int $id
 * @property string $title
 * @property string $content
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property int $rubric_id
 *
 * @package App\Models
 */
class Post extends Model
{
    protected $table = 'posts';

    protected $casts = [
        'rubric_id' => 'int'
    ];

    protected $fillable = [
        'title',
        'content',
        'rubric_id'
    ];

    public function review()
    {
        return $this->hasOne(Review::class);
    }

    public function rubric()
    {
        return $this->belongsTo(Rubric::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
