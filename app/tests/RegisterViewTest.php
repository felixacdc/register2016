<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class RegisterViewTest extends TestCase
{

    public function testSendForm()
    {
        $this->visit('/')
                ->type('Juan Marino', 'name')
                ->type('juana@gmail.com', 'email')
                ->type('77713989', 'phone')
                ->select('Cuarto', 'semester')
                ->select('Diario', 'plan')
                ->type('Auditoria de sistemas', 'course')
                ->type('C4CA4238A0B923820DCC509A6F75849B', 'code')
                ->press('enviar')
                ->seePageIs('/')
                ->see('Juan Marino');
    }

    public function testDataView()
    {
        $this->visit('/')
             ->see('VI Convención')
             ->assertViewHas('people');
    }
}
