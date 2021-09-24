<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Chef;
use App\Models\Icon;
use App\Models\Footer;
class Sociallink extends Model
{
    use HasFactory;
    protected $table = 'sociallinks';

    protected $fillable = ["link","icon_id","chef_id","footer_id"];

    public function chef(){
        return $this->belongsTo(Chef::class);
    }
    public function icon(){
        return $this->belongsTo(Icon::class);

    }

    public function footer(){
        return $this->belongsTo(Footer::class);

    }

}
