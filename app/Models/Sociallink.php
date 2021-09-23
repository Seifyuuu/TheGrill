<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Chef;
use App\Models\Icon;
class Sociallink extends Model
{
    use HasFactory;
    protected $table = 'sociallinks';

    protected $fillable = ["link","icon_id","chef_id"];

    public function chef(){
        return $this->belongsTo(Chef::class);
    }
    public function icon(){
        return $this->belongsTo(Icon::class);

    }

}
