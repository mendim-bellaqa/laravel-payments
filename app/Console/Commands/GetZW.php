<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class GetZW extends Command
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
        echo "Procesi filloi\n";
        echo "============================================\n";
        $dbconn = pg_connect("host=89.174.178.194 port=5432 dbname=hcelblag user=hcelb password=homvendo123");
        echo "Lidhja me databaze u formua\n";

        $qry = 'select * from ZW';

        $result = pg_query($dbconn, $qry);
        $results = pg_fetch_all($result);
        echo "Te dhenat u morren nga databaza\n";
        echo "============================================\n";
        echo "Update perfundoi\n";
        //lidhja me vendo
        // krjimi i aws
        //            
    }
}
