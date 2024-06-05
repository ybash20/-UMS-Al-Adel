<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use crocodicstudio\crudbooster\helpers\CRUDBooster;

class RestoreDatabase extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'restore:database';
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Restore the latest database backup';

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
        // Get the database credentials from the .env file
        $db = escapeshellarg(env('DB_DATABASE'));
        $Pass = escapeshellarg(env('DB_PASSWORD'));
        $User = escapeshellarg(env('DB_USERNAME'));

        // Define the backup path
        $backupPath = storage_path('app\backups\\');

        // Ensure the backup directory exists
        if (!File::exists($backupPath)) {
            File::makeDirectory($backupPath, 0755, true);
            $this->info('The backup folder did not exist and has been created.');
        }

        // Get the latest backup file
        $files = File::files($backupPath);
        usort($files, function ($a, $b) {
            return $b->getMTime() - $a->getMTime();
        });

        if (count($files) === 0) {
            $this->error('No backup files found.');
            return 0;
        }

        $this->info($files[0]);

        $latestBackupFile = $files[0]->getPathname();

        $mysqlPath = 'C:\\xampp\\mysql\\bin\\mysql.exe';
        // Restore the database
        $command = "\"{$mysqlPath}\" --user={$User} --password={$Pass} {$db} < {$latestBackupFile}";

        $returnVar = null;
        $output = null;

        exec($command . ' 2>&1', $output, $returnVar);

        if ($returnVar !== 0) {
            //CRUDbooster::insertLog(cbLang('restore_database_failed') , implode("\n", $output));
            $this->info('Restore Database Failed');

        } else {
            //CRUDbooster::insertLog(cbLang('restore_database_done') , $latestBackupFile);
            $this->info('Restore Database Done');
        }
        return Command::SUCCESS;
    }
}
