<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Icon;
use App\Models\sociallinks;
class Chef extends Model
{
    use HasFactory;
    protected $table = "chefs";


    protected $fillable = ["name","img"];


    public function icons(){
        return $this->hasMany(Icon::class);
    }
    public function sociallinks(){

        return $this->hasMany(Sociallink::class);
    }
}
