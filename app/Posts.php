<?php namespace App;
use Illuminate\Database\Eloquent\Model;
// сущность класа Posts будет ссылаться на таблицу posts в базе данных
class Posts extends Model {
    // запрещает изменение колонок
    protected $guarded = [];
    // у постов множество комментариев
    // возвращает сущность пользователя, который является автором этого поста
    public function author()
    {
        return $this->belongsTo('App\Authors','author_id');
    }
}