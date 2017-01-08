<?php

use Illuminate\Database\Seeder;
use App\Model\Webapp\NoteCategory;

class NoteCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        NoteCategory::create([
            'note_id' => '1',
            'category_id' => '1'
        ]);

        NoteCategory::create([
            'note_id' => '1',
            'category_id' => '2'
        ]);

        NoteCategory::create([
            'note_id' => '1',
            'category_id' => '5'
        ]);

        NoteCategory::create([
            'note_id' => '2',
            'category_id' => '1'
        ]);

        NoteCategory::create([
            'note_id' => '3',
            'category_id' => '3'
        ]);
    }
}
