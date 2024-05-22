<?php

namespace App\Jobs;

use Carbon\Carbon;
use App\Models\Claim;
use App\Models\Placement;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;

class CalculateAccumulatedInterestJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $placement;

    public function __construct(Placement $placement)
    {
        $this->placement = $placement;

    }

    public function handle()
    {
        $placement = $this->placement;
        $startDate = Carbon::parse($placement->interest_start_date)->startOfDay();
        $endDate = Carbon::now()->endOfDay();
        $accumulatedInterest = 0;

        $componentTypes = ['principal', 'cost', 'attorney', 'interest'];

        foreach ($componentTypes as $type) {
            // Retrieve amount and interest rate for the current component type
            $amount = $placement->placementComponent()
                ->where('name', $type)
                ->value('amount');

            $interestRate = $placement->placementComponent()
                ->where('name', $type)
                ->value('rate');

            // Calculate the number of days between start and end dates
            $days = $startDate->diffInDays($endDate);

            // Calculate daily interest for the current component type
            $dailyInterest = ($amount * $interestRate * $days) / 365;

            // Accumulate daily interest for the number of days
            $accumulatedInterest += $dailyInterest;
        }
        // Format accumulated interest to display two digits after the decimal point
        $formattedAccumulatedInterest = number_format($accumulatedInterest, 2);

        // Once all component types are processed, update the claim
        $claimUpdate = Claim::findOrFail($placement->claim_id);
        $claimUpdate->accumulated_interest = $formattedAccumulatedInterest;
        $claimUpdate->fixed_interest = $formattedAccumulatedInterest;

        $claimUpdate->save();

    }

}
