<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index()
    {
        $data['users'] = [
            [
                'username'  => 'peter.parker',
                'full_name' => 'Peter Parker',
                'role'      => 'Cashier',
            ],
            [
                'username'  => 'steve.rogers',
                'full_name' => 'Steve Rogers',
                'role'      => 'Manager',
            ],
            [
                'username'  => 'natasha.romanoff',
                'full_name' => 'Natasha Romanoff',
                'role'      => 'Administrator',
            ],
            [
                'username'  => 'clark.kent',
                'full_name' => 'Clark Kent',
                'role'      => 'Inventory Staff',
            ],
            [
                'username'  => 'diana.prince',
                'full_name' => 'Diana Prince',
                'role'      => 'Supervisor',
            ],
        ];

        return view('users', $data);
    }
}