<?php

class PostsTableSeeder extends Seeder
{

    public function run()
    {
        Post::create([
            'title' => 'タイトル',
            'body' => 'これは、記事の本文です。'
        ]);
        Post::create([
            'title' => 'またタイトル',
            'body' => 'そこに本文が続きます。'
        ]);
        Post::create([
            'title' => 'タイトルの逆襲',
            'body' => 'こりゃ本当にわくわくする！うそ。'
        ]);
    }

}