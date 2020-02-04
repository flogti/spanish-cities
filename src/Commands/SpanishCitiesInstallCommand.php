<?php

namespace Flogti\SpanishCities\Commands;

use Illuminate\Console\Command;

class SpanishCitiesInstallCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'spanish-cities:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Run migrations and seeders of this packages tables.';

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
        $this->info('Creating tables');
        \Artisan::call('migrate');
        $this->info('Tables created successfully');
        $this->info('Seeding communities');
        \Artisan::call('db:seed', [
            '--class' => 'Flogti\SpanishCities\Database\Seeders\CommunitiesTableSeeder'
        ]);
        $this->info('Seeded successfully');
        $this->info('Seeding provinces');
        \Artisan::call('db:seed', [
            '--class' => 'Flogti\SpanishCities\Database\Seeders\ProvincesTableSeeder'
        ]);
        $this->info('Seeded successfully');
        $this->info('Seeding towns');
        \Artisan::call('db:seed', [
            '--class' => 'Flogti\SpanishCities\Database\Seeders\TownsTableSeeder'
        ]);
        $this->info('Seeded successfully');

    }
}
