<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Faker\Factory;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function list(Request $request)
    {
        $faker = Factory::create();
        $count = $faker->numberBetween(3, 12);

        for ($i=0; $i < $count; $i++) {
            $users[] = [
                'id' => $faker->numberBetween(1, 100),
                'name' => $faker->name
            ];
        }

        return view('user.list', [
            'users' => $users
        ]);

        // return view('user.list', [
        //     'users' => $users
        // ]);

    }

    public function show(Request $request, int $userId)
    {
        $prevAction = $request->session()->get('prevAction');

        $request->session()->put('test_tt', false);

        $faker = Factory::create();
        $user = [
            'id' => $userId,
            'name' => $faker->name,
            'firstName' => $faker->firstName,
            'lastName' => $faker->lastName,
            'city' => $faker->city,
            'age' => $faker->numberBetween(18, 70),
            'brand' => $faker->randomElement(['Volkswagen', 'Opel', 'Audi', 'BMW', 'Kia', 'Mercedes', 'Lexus', 'Toyota']),
        ];

        return view('user.show', [
            'user' => $user,
            'nick' => true
        ]);
    }
}
