<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Batch extends Model
{
    protected $table = 'batches';
    protected $primarykey = 'id';
    protected $fillable = ['name', 'course_id', 'start_date'];
   
    public function course()
    {
        return $this->belongsto(Course::class);
    }
}
