<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;

/**
 * Class Review
 *
 * @property int $id
 * @property string|null $author
 * @property string $text
 * @property int $post_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Review extends Model
{
    protected $table = 'reviews';

    protected $casts = [
        'post_id' => 'int'
    ];

    protected $fillable = [
        'author',
        'text',
        'post_id'
    ];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
