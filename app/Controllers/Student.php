<?php

namespace App\Controllers;

use App\Models\StudentModel;

class Student extends User
{
    public function signup()
    {
        $data = $this->request()->getPost(['first_name', 'last_name', 'cin', 'cne', 'phone', 'email', 'password', 'confirm_password']);

        if (!$this->validateData($data, config('Validation')->signup)) {
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