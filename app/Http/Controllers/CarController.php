<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class CarController extends Controller
{
    public function dashboard(): View
    {
        $stats = [
            'count' => DB::table('cars')->count(),
            'countCarsGtseven' => DB::table('cars')->where('score', '>', 7)->count(),
            'countCarsRatingTen' => DB::table('cars')->where('score', 10)->count(),
            'avg' => DB::table('cars')->avg('score')
        ];

        $bestCars = DB::table('cars')
            ->join('body', 'cars.body_style_index', '=', 'body.id')
            ->select('cars.id', 'cars.brand', 'cars.model', 'cars.production_year',
                    'cars.engine', 'cars.score', 'cars.body_style_index', 'body.name as body_name')
            ->where('score', '>', 9)
            ->get()
        ;

        return view('cars.dashboard', [
            'stats' => $stats,
            'bestCars' => $bestCars
        ]);
    }

    public function index(): View
    {
        $cars = DB::table('cars')
            ->join('body', 'cars.body_style_index', '=', 'body.id')
            ->select('cars.id', 'cars.brand', 'cars.model', 'cars.production_year',
                    'cars.engine', 'cars.score', 'cars.body_style_index', 'body.name as body_name')
            ->orderBy('score', 'desc')
            ->paginate(20)
        ;

        return view('cars.list', [
            'cars' => $cars,
        ]);
    }

    public function show($carId): View
    {
        $cars = DB::table('cars')->find($carId);

        return view('cars.show', [
            'cars' => $cars
        ]);
    }
}
