<?php

namespace Database\Seeders;

use App\Models\Photo;//import model
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;  //import faker

class PhotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i=0; $i < 10 ; $i++) { 
            $photo = new Photo();//create new instance 
            $photo->name = $faker->words(3, true);
            $photo->cover_image= $faker->imageUrl(640,400,'Photos',true, $photo->name, true, 'jpg');
            $photo->description = $faker->paragraphs(1,true);
            $photo->save();
        }
    }
}
