<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Http\Controllers\PostController;

class PostControllerTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testcryptMessage()
    {
        $control = new PostController;
        $this->assertEquals('bcd', $control->cryptMessage('abc', 1));
        $this->assertEquals('dqplqwt', $control->cryptMessage('bonjour', 2));
        $this->assertEquals('dqplqwt', $control->cryptMessage('BonJour', 2));
        $this->assertEquals('e', $control->cryptMessage('B', 3));
        $this->assertEquals("l'ckog", $control->cryptMessage("J'aime", 2));
        $this->assertEquals('.? !', $control->cryptMessage('.? !', 6));
        $this->assertEquals('abc', $control->cryptMessage('xyZ', 3));
    }

}
