@extends('layouts.app')
@section('judul', 'Animal')
@section('content')
    <div class="headFlag">
        <h1 class="nunito">ADD ANIMAL</h1>
    </div>
    <div class="container-fluid formInput">

        <div class="row">
            <div class="col">
                <form action="{{ route('animal.store') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label>Name: </label>
                        <input type="text" class="form-control" name="name" required>
                    </div>
                    <div class="form-group">
                        <label>Family: </label>
                        <input type="text" class="form-control" name="family" required>
                    </div>
                    <div class="form-group">
                        <label>Diet: </label>
                        <select name="diet" class="custom-select">
                            <option value="Carnivore">Carnivore</option>
                            <option value="Herbivore">Herbivore</option>
                            <option value="Omnivore">Omnivore</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Quantity: </label>
                        <input type="number" class="form-control" name="quantity" required>
                    </div>
                    <div class="form-group">
                        <label>Caretaker: </label>
                        <select name="caretaker" class="custom-select" required>
                            @foreach ($users as $user)
                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Habitat: </label>
                        <select name="habitat" class="custom-select" required>
                            @foreach ($habitats as $habitat)
                                <option value="{{ $habitat->id }}">{{ $habitat->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Description:</label>
                        <textarea class="form-control" name="description" required></textarea>
                    </div>
                    <div class="form-group">
                        <label>Arrival Date:</label>
                        <input type="date" class="form-control" name="arrival_date" required>
                    </div>
                    <div class="form-group">
                        <label>Insert Image:</label>
                        <input type="file" name="image" id="image" required>
                    </div>
                    <button type="submit" class="btn greenButton nunito">Submit</button>
                </form>
            </div>
        </div>
    </div>



@endsection
