<?php
use Illuminate\Database;

/**
 * Post
 *
 * @property integer $id
 * @property string $title
 * @property string $body
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\Post whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\Post whereTitle($value)
 * @method static \Illuminate\Database\Query\Builder|\Post whereBody($value)
 * @method static \Illuminate\Database\Query\Builder|\Post whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Post whereUpdatedAt($value)
 */
class Post extends Eloquent
{
    protected $fillable = [];

}