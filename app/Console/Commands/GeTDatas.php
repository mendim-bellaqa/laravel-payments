<?php

namespace App\Console\Commands;

use App\ZW;
use Carbon\Carbon;
use Illuminate\Console\Command;

class GetAws extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'zw:get';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
     * @return int
     */
    public function handle()
    {
        $dbconn = pg_connect("host=89.174.178.194 port=5432 dbname=hcelblag user=hcelb password=homvendo123");

        $qry = 'select * from ZW';

        $result = pg_query($dbconn, $qry);
        $results = pg_fetch_all($result);
        foreach ($results as $dt)
        {
            // $date = new Carbon($rs['loading_date']);
            $zw = Zw::show(
                [
                    'id_trans' => $dt['idtrans'],
                    'name' => $dt['aw_nr'], 
                    'client' => $dt['client'],
                    'tour_number' => $dt['tour_nr'],
                    'loading_date' => $date->toDateString(),
                    'coli' => $dt['coli'],
                    'led' => $dt['led'] ?? 0,
                    'coverage' => $dt['covered_notcovered'],
                    'wm_quantity' => $dt['wm_quantity'],
                    'created_at' => now(),
                ]
            );
            // $zw->fillTasks();

            // echo 'Task ' . $aw->name . ' added!'."\n";
        }
        // echo "============================================\n";
        // echo "Update perfundoi\n";
        //lidhja me vendo
        // krjimi i aws
        //            
    }
}
