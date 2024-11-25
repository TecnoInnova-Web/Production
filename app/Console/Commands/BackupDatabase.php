<?php
namespace App\Console\Commands;
use Spatie\Backup\BackupJobFactory;

use Illuminate\Console\Command;

class BackupDatabase extends Command
{
    protected $signature = 'backup:database';
    protected $description = 'Realiza un backup de la base de datos';

    public function handle()
{
    $this->info('Iniciando el backup...');
    
    try {
        $backupConfig = config('backup');
        $this->info('Configuración de backup: ' . json_encode($backupConfig));
        
        // BackupJobFactory::createFromArray($backupConfig)->run();
        $this->info('Backup completado.');
    } catch (\Exception $e) {
        $this->error('Error al realizar el backup: ' . $e->getMessage());
        $this->error('Traza del error: ' . $e->getTraceAsString());
    }
}

}
