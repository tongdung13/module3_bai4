<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class BaiDemo extends Model
{
    use Notifiable;

    protected $fillable = [
      'name', 'password', 'email'
    ];
    /**
     * @var bool
     */
    public function category()
    {
        return $this->belongsTo('App\Category');
    }

}
