@extends('layout.main')

@section('content')
    <div class="row mt3">
        <div class="card">
            <div class="card-header"><i class="fa fa-table mr-1"></i>Nasze samochody</div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Lp</th>
                                <th>Marka</th>
                                <th>Model</th>
                                <th>Rodzaj nadwozia</th>
                                <th>Rok produkcji</th>
                                <th>Typ silnika</th>
                                <th>Ocena użytkowników</th>
                                <th>Podgląd</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Lp</th>
                                <th>Marka</th>
                                <th>Model</th>
                                <th>Rodzaj nadwozia</th>
                                <th>Rok produkcji</th>
                                <th>Typ silnika</th>
                                <th>Ocena użytkowników</th>
                                <th>Podgląd</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($cars ?? [] as $car)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $car->brand }}</td>
                                    <td>{{ $car->model }}</td>
                                    <td>{{ $car->body_name }}</td>
                                    <td>{{ $car->production_year }}</td>
                                    <td>{{ $car->engine }}</td>
                                    <td>{{ $car->score }}</td>
                                    <td>
                                        <a href="{{ route('cars.show', ['carId' => $car->id]) }}">Szczegóły</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            {{ $cars->links('pagination::bootstrap-4') }}
            </div>
        </div>
    </div>
@endsection
