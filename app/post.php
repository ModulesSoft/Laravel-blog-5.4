<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'user_id', 'title', 'picture', 'position', 'description'
    ];

    //also i can use guarded

    public function user()
    {
        return $this->belongsTo(User::class);
    }

//yousef
    public static function getData($position, $part)
    {
        $posts = Post::all();
        if ($part == 0) {   //link
//            $link = $posts->where('position', '=', $position)->first()->link;
            if (isset($posts->where('position', '=', $position)->first()->link[0])) {
                return $posts->where('position', '=', $position)->first()->link;
            }
        } else if ($part == 1) {   //title
//            $title = $posts->where('position', '=', $position)->first()->title;
            if (isset($posts->where('position', '=', $position)->first()->title[0])) {
                return $posts->where('position', '=', $position)->first()->title;
            }
        } else if ($part == 2) {//description
            if (isset($posts->where('position', '=', $position)->first()->description[0])) {
                return $posts->where('position', '=', $position)->first()->description;
            }
        } else if ($part == 3) {//picture
            if (isset($posts->where('position', '=', $position)->first()->picture[0])) {
                return $posts->where('position', '=', $position)->first()->picture;
            }
        } else if ($part == 4) {//created_at
            if (isset($posts->where('position', '=', $position)->first()->created_at->year)) {
                return $posts->where('position', '=', $position)->first()->created_at->toFormattedDateString();
            }
        }
    }

}
