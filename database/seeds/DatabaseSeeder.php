<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    private $tables = array(
        'posts',
        'messages'
    );

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        switch (App::environment()) {
            case 'local':
                $this->cleanDB();

                $this->call(PostsTableSeeder::class);

                break;
            default:
                break;
        }

        Model::reguard();
    }

    /**
     * Truncate all tables in database
     *
     * @return void
     */
    private function cleanDB()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');

        foreach ($this->tables as $table) {
            DB::table($table)->truncate();
        }

        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
