<?php

namespace App\Models;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tag extends Model
{
 
    use HasFactory;
    protected $table='tag';
    protected $fillable=[
        'tagname',
    ];
    public function post(){
        
        return $this->hasMany(Post::class);
    }
    
}
