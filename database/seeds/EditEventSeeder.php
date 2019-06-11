<?php

use Illuminate\Database\Seeder;
use App\Models\EditEvent;

class EditEventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EditEvent::create(['event_name' => '"uuu" updated his profile.','event_type' => 'Profile Update']);
        EditEvent::create(['event_name' => '"uuu" created a "ttt" table.','event_type' => 'Table Create']);
        EditEvent::create(['event_name' => '"uuu" edited a "ttt" table.','event_type' => 'Table Edit']);
        EditEvent::create(['event_name' => '"uuu" erased a "ttt" table.','event_type' => 'Table Erase']);
        
    }
}
