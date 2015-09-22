<?php

use Illuminate\Database\Seeder;
use stjo\Model\ForumPost;

class ForumPostSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    $faker = Faker\Factory::create();

	    ForumPost::truncate();
        //
		foreach(range(1,200) as $index){
			ForumPost::create(
				[
					'wkt_kirim' => $faker->dateTimeBetween('-2 days','+3 days'),
					'id_user' => $faker->randomDigitNotNull(),
					'id_forum_kategori' => $faker->numberBetween(1,7),
					'id_forum_topik' => $faker->numberBetween(1,30),
					'jdl_post' => $faker->optional()->sentence(5),
					'isi_post' => $faker->paragraphs(6,true),
					'waktu_review' => $faker->optional()->dateTimeBetween('now', '+2 days'),
					'id_reviewer' => $faker->optional()->numberBetween(1,3),

				]
			);
		}
    }
}
