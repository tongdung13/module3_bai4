<?php


namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use Notifiable;

    protected $fillable = [
      'name', 'price','image','status'
    ];

    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
