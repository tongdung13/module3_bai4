<?php
namespace App\Models;

 use Illuminate\Database\Eloquent\Model;
 use Illuminate\Notifications\Notifiable;

class Task extends Model
{
    use Notifiable;

    protected $fillable = [
        'title', 'content', 'create_at', 'due_date', 'image'
];
    public function category()
    {
        return $this->belongsTo("App\category");
    }
}
