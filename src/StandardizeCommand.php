<?php 
namespace Felipepkgs\Standard\Console\Commands;

use Illuminate\Console\Command;

class StandardizeCommand extends Command
{
    protected $signature = 'code:standardize';
    protected $description = 'Run the standardization process';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $this->info('Standardizing code...');

        // $this->call('rector:process', [
        //     '--config' => base_path('rector-config.php'),
        // ]);

        // $this->call('pint', [
        //     '--config' => base_path('pint.json'),
        // ]);

        $this->info('Code has been standardized!');
    }

}
