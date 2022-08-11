@extends('layout.main')

@section('content')
    <main>
        <div class="container-fluid">
            @if ($formMsg == 0)
                @include('shared.flashMsg_resultError')
                @yield('content')
            @else
                @include('shared.flashMsg_resultAccept')
                @yield('content')
            @endif
        </div>
    </main>

    <div class="card">
        <div class="card-header"><i class="fas fa-table mr-1"></i>Lista użytkowników</div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Lp</th>
                            <th>Id</th>
                            <th>Nick</th>
                            <th>Opcje</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Lp</th>
                            <th>Id</th>
                            <th>Nick</th>
                            <th>Opcje</th>
                        </tr>
                    </tfoot>

                    <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $user['id'] }}</td>
                                <td>{{ $user['name'] }}</td>
                                <td><a href="{{ route('get.user.show', ['userId' => $user['id']]) }}">Szczegóły</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
