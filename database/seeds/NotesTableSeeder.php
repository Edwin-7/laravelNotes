<?php

use Illuminate\Database\Seeder;
use App\Notes; 
class NotesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 20; $i++) { 
        	Notes::create( ['title'=>"Titulo Seeder $i",'note'=>"Nota seeder $i: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga sed recusandae, dicta. Iure quis dignissimos doloremque hic nesciunt corporis provid." ]);
        }
    }
}
