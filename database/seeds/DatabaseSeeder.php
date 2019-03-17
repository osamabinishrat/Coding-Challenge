<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(RoleSeed::class);
         $this->call(UserSeed::class);
         $this->call(AssetStatusSeed::class);
         $this->call(AssetTypeSeed::class);
         $this->call(AssetObjectSeed::class);
    }
}
