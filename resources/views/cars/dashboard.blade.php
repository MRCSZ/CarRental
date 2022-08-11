@extends('layout.main')

@section('content')
    <div class="row mt3">
        <div class="col-x col-xl-3 col-md-6 mb-4">
            <div class="card border-left shadow-sm py-2 h-100">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-blod text-primary text-uppercase mb-1">Liczba dostępnych samochodów</div>
                            <div class="h5 mb-o font-weight-blod text-gray-800"> {{ $stats['count'] }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fa fa-car fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-x col-xl-3 col-md-6 mb-4">
            <div class="card border-left shadow-sm py-2 h-100">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-blod text-primary text-uppercase mb-1">Samochody z oceną 7 lub wyższą</div>
                            <div class="h5 mb-o font-weight-blod text-gray-800"> {{ $stats['countCarsGtseven'] }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fa fa-greater-than fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-x col-xl-3 col-md-6 mb-4">
            <div class="card border-left shadow-sm py-2 h-100">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-blod text-primary text-uppercase mb-1">Średnia ocena naszych samochodów</div>
                            <div class="h5 mb-o font-weight-blod text-gray-800"> {{ $stats['avg'] }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fa fa-star fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-x col-xl-3 col-md-6 mb-4">
            <div class="card border-left shadow-sm py-2 h-100">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-blod text-primary text-uppercase mb-1">Liczba samochodów z maksymalną oceną</div>
                            <div class="h5 mb-o font-weight-blod text-gray-800"> {{ $stats['countCarsRatingTen'] }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fa fa-gem fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt3">
        <div class="card">
            <div class="card-header"><i class="fa fa-table mr-1"></i>Najlepsze samochody</div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Lp</th>
                                <th>Marka</th>
                                <th>Model</th>
                                <th>Ocena użytkowników</th>
                                <th>Szczegóły</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($bestCars ?? [] as $car)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $car->brand }}</td>
                                    <td>{{ $car->model }}</td>
                                    <td>{{ $car->score }}</td>
                                    <td>
                                        <a href="{{ route('cars.show', ['carId' => $car->id]) }}">Szczegóły</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
