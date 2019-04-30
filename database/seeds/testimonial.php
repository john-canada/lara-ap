<?php

use Illuminate\Database\Seeder;
use App\Testimonial;

class testimonial extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $test = new App\Testimonial([
            'image_path'=>'/storage/images/ava4.jpg',
            'name'=>'Harry Potter',
            'body'=>'Cool Harry Potter Book 1 series',
            'company'=>'cdu',
        ]);
        $test->save();

        $test = new App\Testimonial([
            'image_path'=>'/storage/images/ava4.jpg',
            'name'=>'Harry Potter',
            'body'=>'Cool Harry Potter Book 1 series',
            'company'=>'cdu',
        ]);
        $test->save();

        $test = new App\Testimonial([
            'image_path'=>'/storage/images/ava4.jpg',
            'name'=>'Haper',
            'body'=>'Cool Harry Potter Book 3 series',
            'company'=>'cdu',
        ]);
        $test->save();

        $test = new App\Testimonial([
            'image_path'=>'/storage/images/ava4.jpg',
            'name'=>'Potter',
            'body'=>'Cool Harry Potter Book 4 series',
            'company'=>'cdu',
        ]);
        $test->save();
   
    }
}
