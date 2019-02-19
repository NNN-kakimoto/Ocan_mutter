<?php

use Illuminate\Database\Seeder;

class MuttersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
				//
				DB::table('mutters')->truncate();
				DB::table('mutters')->insert([
					[
						'content' => 'こんにちは',
						'nickname' => 'kakimoto',
						'created_at' => now(),
						'updated_at' => now()
					],[
						'content' => 'こんばんは',
						'nickname' => 'kakimoto',
						'created_at' => now(),
						'updated_at' => now()
					],[
						'content' => 'さようなら',
						'nickname' => 'kakimoto',
						'created_at' => now(),
						'updated_at' => now()
					],[
						'content' => 'OIC楽しい！',
						'nickname' => 'kakimoto',
						'created_at' => now(),
						'updated_at' => now()
					],[
						'content' => 'OIC神',
						'nickname' => 'kakimoto',
						'created_at' => now(),
						'updated_at' => now()
					],[
						'content' => 'プログラミング楽しい',
						'nickname' => 'kakimoto',
						'created_at' => now(),
						'updated_at' => now()
					],[
						'content' => 'プログラミング滅びろ',
						'nickname' => 'kakimoto',
						'created_at' => now(),
						'updated_at' => now()
					],
			]);
    }
}
