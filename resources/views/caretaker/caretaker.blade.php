@extends('layouts.app')
@section('judul', 'Caretaker')
@section('content')
    <div class="headFlag">
        <h1 class="nunito">CARETAKER DATABASE</h1>
    </div>
    <div class="container-fluid" style="margin-top: 20px;">
        <div class="row" style="margin-top: 30px;">
            <table class="table table-striped adminTable">
                <thead>
                    <tr>
                        <th scope="col">NAME</th>
                        <th scope="col">EMAIL</th>
                        <th scope="col">ANIMALS</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                @foreach ($user->takecares as $animal)
                                    <li>{{ $animal->name }}</li>
                                @endforeach
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>


@endsection
