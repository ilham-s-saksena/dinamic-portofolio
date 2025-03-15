<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Portofolio extends Model
{
    use HasUuids;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        "template_id",
        "name",
        "position",
        "description",
        "slug",
        "data",
        "contact"
    ];

    public function template(): BelongsTo {
        return $this->belongsTo(Template::class, 'template_id', 'id');
    }
    public function user(): BelongsTo {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
