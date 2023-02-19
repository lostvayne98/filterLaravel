<?php

namespace Database\Seeders;

use Database\Factories\UserStatusFactory;
use Illuminate\Database\Seeder;
use App\Models\UserStatus as modelUserStatus;
class UserStatus extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        modelUserStatus::factory(20)->create();
    }
}
