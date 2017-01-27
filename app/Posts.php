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
        return $this->belongsTo('App\Authors','author_id','author_name');
    }

    public function parent() {

        return $this->hasOne('App\Posts', 'id', 'parent');

    }

    public function children() {

        return $this->hasMany('App\Posts', 'parent', 'id');

    }

    public static function tree($parent_id) {

        return static::with(implode('.', array_fill(0, 100, 'children')))->where('parent', '=', $parent_id)->get();

    }

}