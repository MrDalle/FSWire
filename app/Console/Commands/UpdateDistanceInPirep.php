<?php

namespace App\Console\Commands;

use App\Classes\VAOSHelpers;
use App\PIREP;
use Illuminate\Console\Command;

class UpdateDistanceInPirep extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'vaos:recalculateDistance';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command recalculate distance in Pirep table from null value on distance between departure and arrival';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $pireps = PIREP::all();
        $bar = $this->output->createProgressBar(count($pireps));
        foreach ($pireps as $pirep)
        {
            if((is_null($pirep->distance)) || ($pirep->distance == 0))
            {
                $pirep->distance = VAOSHelpers::getDistance($pirep->depapt->lat,$pirep->depapt->lon,$pirep->arrapt->lat,$pirep->arrapt->lon,'N');


                $pirep->save();
            }
            $bar->advance();
        }
        $bar->finish();
    }
}