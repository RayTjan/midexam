@extends('layouts.app')
@section('judul', 'Animal')
@section('content')
    <div class="headFlag">
        <h1 class="nunito">ANIMAL DATABASE</h1>
    </div>
    <div class="container-fluid" style="margin-top: 20px;">

        <div class="row">
            {{-- auth to limit content, it cannot be accessed until login
            --}}
            <div class="col-md-2">
                <a href="{{ route('animal.create') }}" class="btn btn-block greenButton nunito" role="button"
                    aria-pressed="true">Add Animal</a>
            </div>
        </div>
        <div class="row" style="margin-top: 30px;">
            <table class="table table-striped adminTable">
                <thead>
                    <tr>
                        <th scope="col">NAME</th>
                        <th scope="col">FAMILY</th>
                        <th scope="col">DIET</th>
                        <th scope="col">QUANTITY</th>
                        <th scope="col">CARETAKER</th>
                        <th scope="col">HABITAT</th>
                        <th scope="col">DESCRIPTION</th>
                        <th scope="col">ARRIVAL DATE</th>
                        <th scope="col">IMAGE</th>
                        <th scope="col" colspan="2">MODIFY</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($animals as $animal)
                        <tr>
                            <td>
                                <p>{{ $animal->name }}</p>
                            </td>
                            <td>
                                <p>{{ $animal->family }}</p>
                            </td>
                            <td>{{ $animal->diet }}</td>
                            <td>{{ $animal->quantity }}</td>
                            <td>{{ $animal->takenCareBy->name }}</td>
                            <td>{{ $animal->isIn->name }}</td>
                            <td>{{ $animal->description }}</td>
                            <td>{{ $animal->arrival_date }}</td>
                            <td><img class="dataImage" src="{{ asset('images/' . $animal->image) }}"></td>
                            <td><a href="{{ route('animal.edit', $animal) }}"><button type="submit"
                                        class="btn btn-primary">Edit</button></a></td>

                            <td>
                                <form action="{{ route('animal.destroy', $animal) }}" method="post">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>


@endsection
