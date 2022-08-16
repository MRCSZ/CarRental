@extends('layout.main')

@section('content')
    <div class="row mt3">
        <div class="card">
            <div class="card-header"><i class="fa fa-table mr-1"></i>Szczegóły samochodu</div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-dark" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Marka</th>
                                <th>Model</th>
                                <th>Rok produkcji</th>
                                <th>Typ silnika</th>
                                <th>Ocena użytkowników</th>
                            </tr>
                        </thead>
                        <tbody>
                                <tr>
                                    <td>{{ $car->brand }}</td>
                                    <td>{{ $car->model }}</td>
                                    <td>{{ $car->production_year }}</td>
                                    <td>{{ $car->engine }}</td>
                                    <td>{{ $car->score }}</td>
                                </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
