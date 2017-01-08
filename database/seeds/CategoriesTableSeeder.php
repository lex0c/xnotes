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
            'desc' => 'Categoria relacionada com redes sociais, amigos, etc...'
        ]);

        Category::create([
            'user_id' => '1',
            'name' => 'Faculdade',
            'desc' => 'Categoria relacionada com a faculdade.'
        ]);

        Category::create([
            'user_id' => '2',
            'name' => 'Útil',
            'desc' => 'Categoria relacionada a coisas úteis do dia-a-dia.'
        ]);

        Category::create([
            'user_id' => '1',
            'name' => 'Fitness',
            'desc' => 'Categoria relacionada a atividades fisicas.'
        ]);

        Category::create([
            'user_id' => '2',
            'name' => 'Coisas'
        ]);
    }
}