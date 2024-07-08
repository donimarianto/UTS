<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DekorModel extends Model
{
    use HasFactory;
    protected $table="tbl_dekor";
    public $timestamps = false;
}