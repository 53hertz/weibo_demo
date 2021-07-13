<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class FollowersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::all();
        $user = User::first();
        $following_users = $users->slice(1);

        $following_ids = $following_users->pluck('id')->toArray();

        $user->follow($following_ids);

        foreach ($following_users as $follower) {
            $follower->follow($user->id);
        }
    }
}
