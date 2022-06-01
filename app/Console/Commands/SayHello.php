<?php

namespace LaravelPackageTest\Console\Commands;

use Illuminate\Console\Command;

class SayHello extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'say-hello {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Says hello to the given name.';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->info("Hello, {$this->argument('name')}!");
    }
}
