<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = ['Highlighted','Latest','Whimsical','Nostalgic', 'Nature','Random'];
        foreach($categories as $category){

            $newCategory = new Category();
            $newCategory->name = $category;
            $newCategory->slug = Str::slug($newCategory->name, '-');
            $newCategory->save();


        };
    }
}
