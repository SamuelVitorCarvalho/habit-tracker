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

    public function wasCompletedOn(Carbon $date): bool
    {
        return $this->habitLogs
            ->where('completed_at', $date->toDateString())
            ->isNotEmpty();
    }

    /**
     * Generate a year grid for the given year.
     *
     * @param int $year
     * @return array
     */
    public static function generateYearGrid(int $year): array
    {
        $startDate = \Carbon\Carbon::create($year, 1, 1);
        $endDate = \Carbon\Carbon::create($year, 12, 31);

        $weeks = [];
        $currentWeek = [];

        $firstDayOfWeek = $startDate->dayOfWeek;
        for ($i = 0; $i < $firstDayOfWeek; $i++) {
            $currentWeek[] = null;
        }

        for ($date = $startDate->copy(); $date->lte($endDate); $date->addDay()) {
            $currentWeek[] = $date->copy();

            if ($date->isSaturday() || $date->eq($endDate)) {
                $weeks[] = $currentWeek;
                $currentWeek = [];
            }
        }

        return $weeks;
    }
}
