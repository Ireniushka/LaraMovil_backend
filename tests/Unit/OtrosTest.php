<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class OtrosTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

    public function testInicio(){
        $this->get('/')->assertSee('Salesianos San Ignacio');
    }

    public function testGenerador(){
        $this->get('generador')->assertSee('Generador de informes');
    }

    public function testAutenticar_admin()
    {
        $this->get('login')->assertSee('Login');

        $credentials = [
            "email" => "admin@damin.com",
            "password" => "123456",
            "type" => "admin user"
        ];

        $this->post('login', $credentials)->assertSee('Menu principal');
        // $this->assertCredentials($credentials);

        // $this->assertDatabaseHas('users', [
        //     'name' => 'Administrador',
        //     'email' => 'admin@damin.com'
        // ])->assert(True);
    }

    public function testControl_acceso_no_admin()
    {
        // $user = User::insert(['name' => 'Cualquiera', 
        //     'email' => 'cualquiera@damin.com', 'password'=>bcrypt('654321'), 
        //     'type'=>'admin user']
        // );

        $this->get('login')->assertSee('Login');

        $credentials = [
            "email" => "cualquier_user@gmail.com",
            "password" => "secret",
            "type" => "normal user"

        ];

        $response = $this->post('login', $credentials);
        $response->assertSee('Acceso denegado');

        }
}
