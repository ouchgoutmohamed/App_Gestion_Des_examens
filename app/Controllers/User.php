<?php

namespace App\Controllers;

use App\Models\UserModel;

class User extends BaseController
{
    public function login(): string
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

        $model = model(UserModel::class);

        $user = $model->where('email', $validated_data['email'])->top();

        if ($user === null || !password_verify($validated_data['password'], $user->password)) {
            return view('login', [
                'error' => "Invalid Credentials",
                'old' => $data
            ]);
        }

        // Set session data
        session()->set([
            'user_id' => $user->id,
            'is_professor' => $user->is_professor,
            'is_logged_in' => true,
        ]);

        return redirect()->to('welcome_message');
    }

    public function logout()
    {
        // Destroy the session
        session()->destroy();

        // Redirect to the login page or homepage
        return redirect()->to('login');
    }
}