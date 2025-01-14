<?php

namespace App\Controllers;

use App\Enums\Roles;
use App\Models\UserModel;

class UserController extends BaseController
{
    public function login()
    {       
        $data = $this->request->getPost(['email', 'password']);

        $rules = [
            'email' => 'required|valid_email',
            'password' => 'required|min_length[8]'
        ];

        // Checks whether the submitted data passed the validation rules.
        if (!$this->validateData($data, $rules)) {
            // The validation fails, so returns the form.
            return view('login', [
                'error' => "Invalid Credentials",
                'old' => $data
            ]);
        }

        // Gets the validated data.
        $validated_data = $this->validator->getValidated();

        // Attempt to login the user
        $user = model(UserModel::class)->login($validated_data['email'], $validated_data['password']);

        if (!$user) {
            return view('login', [
                'error' => "Invalid Credentials",
                'old' => $data
            ]);
        }

        // Set session data
        session()->set([
            'user_id' => $user['id'],
            'is_professor' => $user['role_id'],
            'is_logged_in' => true,
        ]);
        
        if(Roles::PROFESSOR->getId() == $user['role_id']){
            return redirect()->to('/professor_dashboard');
        }
        return redirect()->to('/student_dashboard');
    }

    public function logout()
    {
        // Destroy the session
        session()->destroy();

        // Redirect to the login page or homepage
        return redirect()->to('/login');
    }
}