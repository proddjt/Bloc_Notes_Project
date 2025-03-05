<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['title', 'author', 'content', 'tag', 'img'];

    public function contentPreview(){
        if (strlen($this->content) > 130){
            return substr($this->content, 0, 130) . '...';
        }else{
            return $this->title;
        }
    }
}
