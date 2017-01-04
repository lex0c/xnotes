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
            'user_id'    => '1',
            'name'       => 'Social',
            'Description' => 'Categoria relacionada com redes sociais, amigos, etc...'
        ]);

        Category::create([
            'user_id'    => '2',
            'name'       => 'Útil',
            'Description' => 'Categoria relacionada a coisas úteis do dia-a-dia.'
        ]);

        Category::create([
            'user_id'    => '2',
            'name'       => 'Fitness',
            'Description' => 'Categoria relacionada a atividades fisicas.'
        ]);
    }
}