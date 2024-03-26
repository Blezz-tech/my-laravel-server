<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Post;

/**
 * Class Rubric
 *
 * @property int $id
 * @property string $name
 * @property string $description
 *
 * @package App\Models
 */
class Rubric extends Model
{
    protected $table = 'rubrics';
    public $timestamps = false;

    protected $fillable = [
        'name',
        'description'
    ];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
