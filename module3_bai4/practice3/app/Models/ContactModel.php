<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

/**
 * @method static findOrFail(int $id)
 */
class ContactModel extends Model
{
    use HasFactory;
    use Notifiable;

    protected $fillable = [
        'name', 'fullName', 'email',
    ];
    public function usesTimestamps() : bool{
        return false;
    }

}
