<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    //
    protected $table = 'admins';
    protected $fillable = [
        'name',
        'university',
        'class_id',
        'is_active',
    ];
    // đối tượng -> đối tựog khác(đối tượng khác, khoá ngoại, khoá chính)
    
    // đinhj nghĩa Relation :
    // admin->belongsTo('App\Models\ClassRoom');
    //Class->hasMany('App\Models\Admin','class_id','id');
    public function classRoom(){
        return $this->belongsTo('App\Models\ClassRoom','class_id','id');
    }
}
