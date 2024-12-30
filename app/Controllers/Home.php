<?php

namespace App\Controllers;

use App\Models\UserModel;
class Home extends BaseController
{

    public function index(): string
    {
        $user = new UserModel();
        $data = [
            'first_name' => 'John',
            'last_name'  => 'Doe',
            'email'      => 'john.doe@example.com',
            'phone'      => '1234567890',
            'password'   => password_hash('mypassword', PASSWORD_DEFAULT), // Hachage du mot de passe
        ];
        $user->insert($data);
        return view('welcome_message');
    }
}
