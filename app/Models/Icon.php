<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Chef;
use App\Models\Sociallink;
class Icon extends Model
{
    use HasFactory;
    protected $table = "icons";

    protected $fillable = ["name"];


    public function sociallinks(){
        return $this->hasMany(Sociallink::class);
    }


}
