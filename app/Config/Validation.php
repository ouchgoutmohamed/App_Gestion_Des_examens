<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Validation\StrictRules\CreditCardRules;
use CodeIgniter\Validation\StrictRules\FileRules;
use CodeIgniter\Validation\StrictRules\FormatRules;
use CodeIgniter\Validation\StrictRules\Rules;

class Validation extends BaseConfig
{
    // --------------------------------------------------------------------
    // Setup
    // --------------------------------------------------------------------

    /**
     * Stores the classes that contain the
     * rules that are available.
     *
     * @var list<string>
     */
    public array $ruleSets = [
        Rules::class,
        FormatRules::class,
        FileRules::class,
        CreditCardRules::class,
    ];

    /**
     * Specifies the views that are used to display the
     * errors.
     *
     * @var array<string, string>
     */
    public array $templates = [
        'list'   => 'CodeIgniter\Validation\Views\list',
        'single' => 'CodeIgniter\Validation\Views\single',
    ];

    // --------------------------------------------------------------------
    // Rules
    // --------------------------------------------------------------------

    public $signup = [
        'first_name' => [
            'rules' => 'required|alpha_space',
            'errors' => [
                'required' => 'The first name is mandatory.',
                'alpha_space' => 'The first name can only contain alphabetic characters and spaces.',
            ],
        ],
        'last_name' => [
            'rules' => 'required|alpha_space',
            'errors' => [
                'required' => 'The last name is mandatory.',
                'alpha_space' => 'The last name can only contain alphabetic characters and spaces.',
            ],
        ],
        'cin' => [
            'rules' => 'required|is_unique[users.cin]',
            'errors' => [
                'required' => 'The CIN (National ID) is mandatory.',
                'is_unique' => 'This CIN is already registered.',
            ],
        ],
        'cne' => [
            'rules' => 'required|is_unique[users.cne]',
            'errors' => [
                'required' => 'The CNE (National Student ID) is mandatory.',
                'is_unique' => 'This CNE is already registered.',
            ],
        ],
        'phone' => [
            'rules' => 'required|numeric|min_length[10]|max_length[15]',
            'errors' => [
                'required' => 'The phone number is mandatory.',
                'numeric' => 'The phone number must contain only digits.',
                'min_length' => 'The phone number must be at least 10 digits long.',
                'max_length' => 'The phone number cannot exceed 15 digits.',
            ],
        ],
        'email' => [
            'rules' => 'required|valid_email|is_unique[users.email]',
            'errors' => [
                'required' => 'The email address is mandatory.',
                'valid_email' => 'Please provide a valid email address.',
                'is_unique' => 'This email address is already registered.',
            ],
        ],
        'password' => [
            'rules' => 'required|min_length[8]',
            'errors' => [
                'required' => 'The password is mandatory.',
                'min_length' => 'The password must be at least 8 characters long.',
            ],
        ],
        'confirm_password' => [
            'rules' => 'required|matches[password]',
            'errors' => [
                'required' => 'The confirm password field is mandatory.',
                'matches' => 'The confirm password must match the password.',
            ],
        ],
    ];
}
