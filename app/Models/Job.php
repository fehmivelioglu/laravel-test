<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Job extends Model
{
    use HasFactory;
    protected $table = 'job_list';
    protected $fillable = ['title', 'location','employer_id'];
    // protected $guarded = [];

    public function employer()
    {
        return $this->belongsTo(Employer::class);
    }
}
