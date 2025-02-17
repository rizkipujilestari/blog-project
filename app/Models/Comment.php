<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'comment', 'user_id', 'article_id', 'is_reply', 'main_comment_id',
    ];

    public function article() {
        return $this->belongsTo(Article::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function parent() {
        return $this->belongsTo(Comment::class, 'main_comment_id');
    }

    // Fitur komentar dapat dikomentari ulang dengan kedalaman 1.
    public function children() {
        return $this->hasMany(Comment::class, 'main_comment_id');
    }

}
