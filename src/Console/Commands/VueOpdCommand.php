<?php

namespace Bantenprov\VueOpd\Console\Commands;

use Illuminate\Console\Command;

/**
 * The VueOpdCommand class.
 *
 * @package Bantenprov\VueOpd
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class VueOpdCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'bantenprov:vue-opd';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Demo command for Bantenprov\VueOpd package';

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
        $this->info('Welcome to command for Bantenprov\VueOpd package');
    }
}
