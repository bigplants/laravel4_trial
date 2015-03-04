<?php

class DatabaseSeeder extends Seeder
{

    /**
     * データベースシード（初期値設定）を実行
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();
        // PostTableSeeder を実行する

        $this->call('PostsTableSeeder');
    }

}