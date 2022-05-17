<?php

namespace App\Models;

use App\Scopes\FilterScope;
use App\Scopes\ContactSearchScope;
use Illuminate\Database\Eloquent\Model;
use App\Scopes\FilterSearchScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Contact extends Model
{
    use HasFactory;
    protected $fillable = ['first_name','last_name','email','phone','address','email','website','company_id'];
    public $filterColumns = ['company_id'];    
    public function company(){
       
        return $this->belongsTo(Company::class);
    }

    public function scopeLatestFirst($query){
       return $query->orderBy('first_name','asc');
    }


    public static function booted(){
        static::addGlobalScope(new FilterScope);
        static::addGlobalScope(new ContactSearchScope);
    }  
    
}
