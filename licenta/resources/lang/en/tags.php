<?php

return [
    'create'				=> 'Create Tag',
    'destroy'				=> 'Delete Tag',
    'edit'					=> 'Edit Tag',
    'index'					=> 'All Tags',
//    'restore' 				=> 'Recuperează elev',
//    'search'				=> 'Caută elev',
//    'show'					=> 'Detalii elev',
//    'title'					=> 'Elevi',
//    'trashed'				=> 'Elevi șterși',
//    'class_history'			=> 'Istoric pe clase',
//    'printable_info'		=> 'Situatia elevului',

    'label' => [
        'name'			=> 'Tag Name'
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

    'empty' => [
        'title'				=> 'Nu sunt elevi, conform criterilor de filtrare',
        'content'			=> 'Momentan nu sunt elevi conform criterilor de filtrare. Dacă doriţi să adăugaţi unul, utilizaţi opțiunea
								Adăugare elevi din partea stângă a ecranului.'

    ],
];
