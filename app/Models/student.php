<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

class student extends Model
{
    use HasFactory;
  
    // public function getRulesArray(): array
    // {
    //     return [
    //     'name' => 'required|alpha|max:20',
    //     'phone' => 'required|Numeric|min:10',
    //     'email' => 'required|email|max:20',
    //     'age' => 'required|Numeric',
    // ];
    // }
    // public static function boot()
    // {
    //     parent::boot();

    //     static::creating(function (student $post) {
    //         Validator::validate($post->toArray(), $post->getRulesArray());
    //     });
    //    
    // }


    // public static $rules = [
    //     'name' => 'required|alpha|max:20',
    //         'phone' => 'required|Numeric|min:10',
    //         'email' => 'required|email|max:20',
    //            'age' => 'required|Numeric'
    // ];
    // public function validate() {
    //     Validator::make($this->toArray(), $this->rules)->validate();
    // }

    protected $table="student";
    protected $fillable=['name','phone','email','age'];
}
