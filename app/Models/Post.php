<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    //table name
    protected $table='posts';

    //primary key
    public $primaryKey='id';

    //timestamps
    public $timestamps=false;
}
