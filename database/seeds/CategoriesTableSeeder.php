<?php

use Illuminate\Database\Seeder;
use App\Model\Webapp\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'user_id' => '1',
            'name' => 'Social',
            'description' => 'Categoria relacionada com redes sociais, amigos, etc...'
        ]);

        Category::create([
            'user_id' => '1',
            'name' => 'Faculdade',
            'description' => 'Categoria relacionada com a faculdade.'
        ]);

        Category::create([
            'user_id' => '2',
            'name' => 'Útil',
            'description' => 'Categoria relacionada a coisas úteis do dia-a-dia.'
        ]);

        Category::create([
            'user_id' => '1',
            'name' => 'Fitness',
            'description' => 'Categoria relacionada a atividades fisicas.'
        ]);

        Category::create([
            'user_id' => '2',
            'name' => 'Something'
        ]);
    }
}