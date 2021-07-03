<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\SocialProfile;

class user extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'email', 'password', 'lname', 'phone', 'addres', 'google_id'];
    /*protected $fillable = ['mail', 'Pass', 'Name', 'Lname', 'Addres', 'Phone'];*/


//Relacion 1aN

    public function SocialProfile(){
        return $this->hasMany(SocialProfile::class);
    }

}