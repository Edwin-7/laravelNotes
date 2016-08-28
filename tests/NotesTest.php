<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use App\Notes;


class NotesTest extends TestCase
{
    
    // use WithoutMiddleware;  
    use DatabaseTransactions;

    public function test_save_notes() 
    {
      // cuento el usuario visite /notas 
      $this->visit('notas')
      // y de click en el enlace llamdo "add note" (este nos debe de llevar a /note/create)
        ->click('add note')
      // verificasmo que se visita esta pagian (/notes/create)
        ->seePageIs('notas/create')
      // donde se debe de visualizar un titulo 
        ->see('Crear una nota')
        // aca se debe de escribir un titulo en un campo llamado "title"
        ->type('My primera titulo desde prueba', 'title') // el primer parametro es el texto que va en el campo y esl segdndo e el nombre del campo 
        // aca se debe de escribir una nota en un campo llamado "Note"
        ->type('My primera Nota desde prueba', 'note') // el primer parametro es el texto que va en el campo y esl segdndo e el nombre del campo (textarea)
        // ya cuando se presione el boton "create note"
        ->press('create note')
        // nos debe de llevar a la pagina listado de notas::post (/notas)
        //->seePageIs('notas')
        // y dentro de esta pagina se debe ver el testo correspondiente a la nota que agregamos 
        //->see('My primera Nota desde prueba')
        // y verificamos que esta nota este en la base de datos
        ->seeInDatabase('notes', [
            'note' => 'My primera Nota desde prueba'
           ]);
        // Nota esta ultima validacion se lee: verfique si el la tabla "notes" si existe en el campo "note" el texto "My primera Nota"
    }


}
