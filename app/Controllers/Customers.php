<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index()
    {
        $data['customers'] = [
    [
        'full_name' => 'Tony Stark',
        'email'     => 'tony.stark@example.com',
        'phone'     => '0917-123-4567',
    ],
    [
        'full_name' => 'Bruce Wayne',
        'email'     => 'bruce.wayne@example.com',
        'phone'     => '0918-234-5678',
    ],
    [
        'full_name' => 'Hermione Granger',
        'email'     => 'hermione.granger@example.com',
        'phone'     => '0919-345-6789',
    ],
    [
        'full_name' => 'Katniss Everdeen',
        'email'     => 'katniss.everdeen@example.com',
        'phone'     => '0920-456-7890',
    ],
    [
        'full_name' => 'Jack Sparrow',
        'email'     => 'jack.sparrow@example.com',
        'phone'     => '0921-567-8901',
    ],  
];

        return view('customers', $data);
    }
}