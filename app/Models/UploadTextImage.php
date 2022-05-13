<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UploadTextImage extends Model
{
    protected $fillable =['heading','description','user_id','status'];
}
