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

    protected $with = ['user:id,name,image','comments.user:id,name,image']; // คือ การดึงข้อมูล user มาด้วย และ comments.user ดึงข้อมูล user ของ comment มาด้วย เพื่อลดโหลดการดึงข้อมูล และ ให้แสดงผลเป็น json ได้เลย

    protected $withCount = ['likes'];

    protected $fillable = [
        'user_id',
        'content',
    ]; // อธิบาย คือ protected $fillable คือ การกำหนดว่า คอลัมน์ไหนบ้างที่อนุญาติให้เขียนข้อมูลลงไป

    public function comments(){
        return $this->hasMany(Comment::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function likes(){
        return $this->belongsToMany(User::class,'idea_like')->withTimestamps();
    }
}
