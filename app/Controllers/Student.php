<?php

namespace App\Controllers;

use App\Models\StudentModel;

class Student extends User
{
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

        $model = model(StudentModel::class);

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
}