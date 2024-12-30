<?php

namespace App\Controllers;

use App\Models\UserModel;

class User extends BaseController
{
    public function login(): string
    {       
        $data = $this->request()->getPost(['email', 'password']);

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
            'is_logged_in' => true,
        ]);

        return redirect()->to('/welcome_message');
    }

    public function signup()
    {
        $data = $this->request()->getPost(['firstName', 'lastName', 'cin', 'cne', 'phone', 'email', 'password', 'confirmPassword']);

        $rules = [
            'firstName' => 'required',
            'lastName' => 'required',
            'cin' => 'required',
            'cne' => 'required',
            'phone' => 'required',
            'email' => 'required|valid_email|is_unique[users.email]',
            'password' => 'required|min_length[8]',
            'confirmPassword' => 'required|matches[password]'
        ];

        if (!$this->validateData($data, $rules)) {
            return view('register_student', [
                'errors' => $this->validator->getErrors(),
                'old' => $data
            ]);
        }

        // Gets the validated data.
        $validated_data = $this->validator->getValidated();

        $model = model(UserModel::class);

        // Remove confirm_password key before inserting into the database
        $validated_data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

        unset($validated_data['confirmPassword']);

        $model->insert($validated_data);

        // Retrieve the ID of the newly inserted user
        $user_id = $model->getInsertID();

        // Set session data
        session()->set([
            'user_id' => $user_id,
            'is_logged_in' => true,
        ]);

        return redirect()->to('/welcome_message');
    }

    public function logout()
    {
        // Destroy the session
        session()->destroy();

        // Redirect to the login page or homepage
        return redirect()->to('/login');
    }
}