<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Chef;
use App\Models\Sociallink;
use App\Models\Footer;
class Icon extends Model
{
    use HasFactory;
    protected $table = "icons";

    protected $fillable = ["name","footer_id"];

    public function chef(){
        return $this->belongsTo(Chef::class);
    }
    public function sociallink(){
        return $this->hasMany(Sociallink::class);
    }

    public function footer(){
        return $this->belongsTo(Footer::class);
    }
}
