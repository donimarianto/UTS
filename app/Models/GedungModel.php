<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GedungModel extends Model
{
    use HasFactory;
    protected $table="tbl_gedung";
    public $timestamps = false;
}