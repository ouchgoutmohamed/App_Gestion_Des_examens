<?php

namespace App\Controllers;

use App\Models\StudentModel;

class StudentController extends UserController
{
    public function signup()
    {
        $data = $this->request->getPost(['first_name', 'last_name', 'cin', 'cne', 'phone', 'email', 'password', 'confirm_password']);

        if (!$this->validateData($data, config('Validation')->signup)) {
            return view('register_student', [
                'errors' => $this->validator->getErrors(),
                'old' => $data
            ]);
        }

        // Gets the validated data.
        $validated_data = $this->validator->getValidated();

        $validated_data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
        
        // Remove confirm_password key before inserting into the database
        unset($validated_data['confirm_password']);
        
        $result = model(StudentModel::class)->signup($validated_data);

        if(!$result){
            return view('register_student', [
                'errors' => ['An error occurred while signing up. Please try again.'],
                'old' => $data
            ]);
        }
        return redirect()->to('/login');
    }
}