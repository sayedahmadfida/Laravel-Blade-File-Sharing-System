<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Folder extends Model
{
    use HasFactory;
    protected $fillable = [
        "folder_name",
        "privacy",
        "user_id"
    ];
    
    public function user(){
        return $this->belongsTo(User::class);
    }
}
