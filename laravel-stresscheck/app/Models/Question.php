<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Question extends Model
{
    use HasFactory;
    protected $fillable = [
        'content',
    ];
    // StressCheckモデルとのリレーション（Questionは多くのStressCheckを持つ）
    public function stressChecks()
    {
        return $this->hasMany(StressCheck::class);
    }
}