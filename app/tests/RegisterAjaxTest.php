<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class RegisterAjaxTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testAjaxTrue()
    {
        $this->post('verify_code', ['code' => 'E4DA3B7FBBCE2345D7772B0674A318D5'])
                ->see('ok');
    }

    public function testAjaxFalse()
    {
        $this->post('verify_code', ['code' => '00000000000000000000000000000000000'])
                ->see('error');
    }
}
