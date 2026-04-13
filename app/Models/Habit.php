<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class Habit extends Model
{
    use HasFactory;

    protected $fillable = [
            'user_id',
            'name',
        ];

    // Um hábito pertence a um usuário
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    // Um hábito pode ter muitos registros
    public function habitLogs(): HasMany
    {
        return $this->hasMany(HabitLog::class);
    }

    public function wasCompletedToday(): bool
    {
        $today = Carbon::today()->toDateString();

        return $this->habitLogs()
            ->whereDate('completed_at', $today)
            ->exists();
    }
}
