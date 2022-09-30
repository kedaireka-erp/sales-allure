<?php

namespace App\Observers;

use App\Models\Fppp;
use Carbon\Carbon;

class FpppObserver
{ 
    /**
     * Handle the Fppp "created" event.
     *
     * @param  \App\Models\Fppp  $fppp
     * @return void
     */
    public function created(Fppp $fppp)
    {   
        $no = $fppp->number . "/FPPP/AST/" . Carbon::now()->format("m/Y"); 
        $fppp->update(["fppp_no"=>$no]);  
    }

    /**
     * Handle the Fppp "updated" event.
     *
     * @param  \App\Models\Fppp  $fppp
     * @return void
     */
    public function updated(Fppp $fppp)
    {
        //
    }

    /**
     * Handle the Fppp "deleted" event.
     *
     * @param  \App\Models\Fppp  $fppp
     * @return void
     */
    public function deleted(Fppp $fppp)
    {
        //
    }

    /**
     * Handle the Fppp "restored" event.
     *
     * @param  \App\Models\Fppp  $fppp
     * @return void
     */
    public function restored(Fppp $fppp)
    {
        //
    }

    /**
     * Handle the Fppp "force deleted" event.
     *
     * @param  \App\Models\Fppp  $fppp
     * @return void
     */
    public function forceDeleted(Fppp $fppp)
    {
        //
    }
}
