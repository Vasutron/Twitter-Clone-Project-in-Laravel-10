<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Idea extends Model
{
    use HasFactory;

    // protected $guarded = [ // อธิบาย คือ protected $guarded คือ การกำหนดว่า คอลัมน์ไหนบ้างที่ไม่อนุญาติให้เขียนข้อมูลลงไป
    //     'id',
    //     'created_at',
    //     'updated_at'
    // ];

    protected $fillable = [ // อธิบาย คือ protected $fillable คือ การกำหนดว่า คอลัมน์ไหนบ้างที่อนุญาติให้เขียนข้อมูลลงไป
        'content',
        'like'
    ];

    public function comments(){
        return $this->hasMany(Comment::class);
    }
}
