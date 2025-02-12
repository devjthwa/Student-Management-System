<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'Courses';
    protected $primarykey = 'id';
    protected $fillable = ['name', 'syllabus', 'duration'];

    public function duration()
    {
        return $this->duration. " Months";
    }
}
