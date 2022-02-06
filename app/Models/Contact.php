<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $table = 'contacts';

    protected $guarded = array('id');

    public static $rules = array(
        'fullname' => 'required|max:20',
        'gender' => 'required',
        'email' => ['required', 'string', 'max:255', 'unique:users'],
        'postcode' => 'required|min:8|max:8',
        'address' => 'required|max:200',
        'opinion' => 'required|max:120',
    );
}
