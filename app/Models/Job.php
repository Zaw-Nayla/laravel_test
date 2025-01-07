<?php // strict

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Job extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'salary'
    ];
    protected $table = 'jobtest_database';

    
    public function employeer()
    {
        return $this->belongsTo(Employeer::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'job_tags');
    }
}
