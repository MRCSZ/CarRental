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

        $faker = Factory::create();
        $formResult = $faker->numberBetween(0, 1);

        $request->session()->flash('requestResult', $formResult);
        $formMsg = $request->session()->get('requestResult');

        return view('user.list', [
            'formMsg' => ((string) $formMsg),
            'users' => $users
        ]);

        // return view('user.list', [
        //     'users' => $users
        // ]);

    }

    public function show(Request $request, int $userId)
    {
        $prevAction = $request->session()->get('prevAction');
        dump($prevAction);

        $request->session()->put('test_tt', false);

        dump($request->session()->get('flashTestParam'));

        $faker = Factory::create();
        $user = [
            'id' => $userId,
            'name' => $faker->name,
            'firstName' => $faker->firstName,
            'lastName' => $faker->lastName,
            'city' => $faker->city,
            'age' => $faker->numberBetween(12, 25),
            'html' => '<script>alert("XSS")</script>'
        ];

        return view('user.show', [
            'user' => $user,
            'nick' => true
        ]);
    }
}
