<?php

namespace App\Controllers;

use App\Models\StudentModel;

class Student extends User
{
    public function signup()
    {
        $data = $this->request()->getPost(['first_name', 'last_name', 'cin', 'cne', 'phone_number', 'email', 'password', 'confirm_password']);

        $rules = [
            'first_name' => 'required|alpha_space',
            'last_name' => 'required|alpha_space',
            'cin' => 'required|is_unique[users.cin]',
            'cne' => 'required|is_unique[users.cne]',
            'phone_number' => 'required|numeric|min_length[10]|max_length[15]',
            'email' => 'required|valid_email|is_unique[users.email]',
            'password' => 'required|min_length[8]',
            'confirm_password' => 'required|matches[password]' // Matches the 'password' field
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

        unset($validated_data['confirm_password']);

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