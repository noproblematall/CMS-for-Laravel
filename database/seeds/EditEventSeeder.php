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
        EditEvent::create(['event_name' => '"uuu" added a "nnn" "ccc".','event_type' => 'Product Add']);
        EditEvent::create(['event_name' => '"uuu" edited a "nnn" "ccc".','event_type' => 'Product Edit']);
        EditEvent::create(['event_name' => '"uuu" removed a "nnn" "ccc".','event_type' => 'Product Remove']);
        
    }
}
