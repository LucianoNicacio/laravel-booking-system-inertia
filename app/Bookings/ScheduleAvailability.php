<?php

namespace App\Bookings;

use Carbon\Carbon;
use Carbon\CarbonPeriod;
use Spatie\Period\Boundaries;

// ✅ Correct import
use Spatie\Period\Period;
use Spatie\Period\PeriodCollection;
use Spatie\Period\Precision;

class ScheduleAvailability
{
    protected PeriodCollection $periods;

    public function __construct()
    {
        $this->periods = new PeriodCollection();
    }

    public function forPeriod(Carbon $startsAt, Carbon $endsAt)
    {
        collect(CarbonPeriod::create($startsAt, $endsAt)->days())->each(function ($day) {
            dump($day->format('l'));
        });

//        dd($this->periods);
    }
}