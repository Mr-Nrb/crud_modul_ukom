<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kontakguru extends Model
{
    use HasFactory;
    protected $table = 'kontak_guru';
    protected $softDelete = false;
    public $timestamps = false;
    protected $fillable = ['nip_guru','kontak'];
}