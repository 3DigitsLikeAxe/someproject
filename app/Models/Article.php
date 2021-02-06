<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Article extends Model
{
	use HasFactory;
	protected $table = 'articles';
    protected $fillable = [
        'id',
		'img',
		'description',
		'text',
		'user_id',
		'updated_at',
    ];
	
	public function getShortTextAttribute()
    {
        return Str::words((string)$this['text'], 10);
    }
	
	public function user()
	{
		return $this->belongsTo(User::class);
	}
	
	public function tags()
	{
		return $this->belongsToMany(Tag::class);
	}
}
