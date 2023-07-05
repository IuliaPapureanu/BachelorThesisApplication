<?php

return [
    'create'				=> 'Create Company',
    'destroy'				=> 'Delete Company',
    'edit'					=> 'Edit Company',
    'index'					=> 'All Companies',

    'label' => [
        'name'			=> 'Company Name',
        'address'			=> 'Address',
        'county'			=> 'County',
        'city'			=> 'City',
        'administrator'			=> 'Administrator',
        'admin_email'			=> 'Contact Email'
    ],

    'alert' => [
        'create'  => [
            'success'		=> 'Elevul a fost adăugat cu succes',
        ],
        'destroy' => [
            'success'		=> 'Elevul a fost șters cu succes',
        ],
        'edit'    => [
            'success'		=> 'Elevul a fost salvat cu succes',
        ],
        'message' => [
            'email' => [
                'unique' 	=> 'Adresa de email introdusă, este folosită de un alt utilizator. Te rugăm folosește o altă adresă de email',
            ],
            'birth_date' => [
                'before' 	=> 'Data nașterii nu poate fi în viitor',
            ],
            'registration_number' => [
                'unique' 	=> 'Numărul matricol introdus este folosit de un alt utilizator. Te rugăm folosește un alt număr matricol',
            ],
            'student_id' => [
                'exists' 	=> 'Elevul selectat nu se află în baza de date.',
            ],
        ],
        'restore' => [
            'success'		=> 'Elevul a fost recuperat cu succes',
        ],
    ],

    'confirm' => [
        'destroy'			=> 'Elevul urmează a fi șters. Continuați?',
        'restore'			=> 'Elevul urmează a fi recuperat. Continuați?',
    ],


];
