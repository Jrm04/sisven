<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pay_method extends Model
{
    use HasFactory;
    protected $table = 'pay_methods';
    protected $primarykey = 'id';
    public $timetamps = false;
}
