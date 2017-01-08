<?php

use Illuminate\Database\Seeder;
use App\Model\Webapp\Note;

class NotesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Note::create([
            'user_id' => '1',
            'title'   => 'Lorem morbi massa sit amet consectetur',
            'content' => 'Morbi massa massa, ultricies sit amet porttitor sit amet, tempus sit amet lacus. Vivamus porta velit ut libero aliquet porttitor eget at justo.'
        ]);

        Note::create([
            'user_id' => '1',
            'title'   => 'Nullam lobortis diam nulla sit amet amet porttitor',
            'content' => 'Sed dapibus faucibus aliquam. Nullam lobortis diam nulla, non egestas nisi pulvinar a. Aenean efficitur eu felis sed luctus.'
        ]);

        Note::create([
            'user_id' => '2',
            'title'   => 'Vivamus porta velit ut libero aliquet porttitor',
            'content' => 'Ultricies sit amet porttitor sit amet, tempus sit amet lacus. Vivamus porta velit ut libero aliquet porttitor eget at justo lobortis diam nulla, non egestas nisi pulvinar efficitur felis.'
        ]);

    }
}