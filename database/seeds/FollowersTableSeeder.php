<?php

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
        $user_id = $user->id;

        //获取除了ID为1以外的所有用户id
        $followers = $users->slice(1);
        $followers_ids = $followers->pluck('id')->toArray();

        //关注除一号以外的所有用户
        $user->follow($followers_ids);

        //除一号以外的用户都来关注一号用户
        foreach ($followers as $follower) {
            $follower->follow($user_id);
        }
    }
}
