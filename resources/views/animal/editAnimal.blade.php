@extends('layouts.app')
@section('judul', 'Animal')
@section('content')
    <div class="headFlag">
        <h1 class="nunito">EDIT ANIMAL</h1>
    </div>
    <div class="container-fluid formInput">
        <div class="row">
            <div class="col">
                <form action="{{ route('animal.update', $animal) }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="PATCH">
                    <div class="form-group">
                        <label>Name: </label>
                        <input type="text" class="form-control" name="name" value="{{ $animal->name }}" required>
                    </div>
                    <div class="form-group">
                        <label>Family: </label>
                        <input type="text" class="form-control" name="family" value="{{ $animal->family }}" required>
                    </div>
                    <div class="form-group">
                        <label>Diet: </label>
                        <select name="diet" class="custom-select">
                            <option @if ($animal->diet == 'Carnivore') selected
                                @endif value="Carnivore">Carnivore</option>
                            <option @if ($animal->diet == 'Herbivore') selected
                                @endif value="Herbivore" >Herbivore</option>
                            <option @if ($animal->diet == 'Omnivore') selected
                                @endif value="Omnivore">Omnivore</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Quantity: </label>
                        <input type="number" class="form-control" name="quantity" value="{{ $animal->quantity }}" required>
                    </div>
                    <div class="form-group">
                        <label>Caretaker: </label>
                        <select name="caretaker" class="custom-select">
                            @foreach ($users as $user)
                                @if ($animal->takenCareBy->name == $user->name)
                                    <option selected value="{{ $user->id }}">{{ $user->name }}</option>
                                @else
                                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Habitat: </label>
                        <select name="habitat" class="custom-select">
                            @foreach ($habitats as $habitat)
                                @if ($animal->isIn->name == $habitat->name)
                                    <option selected value="{{ $habitat->id }}">{{ $habitat->name }}</option>
                                @else
                                    <option value="{{ $habitat->id }}">{{ $habitat->name }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Description:</label>
                        <textarea class="form-control" name="description" required>{{ $animal->description }}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Arrival Date:</label>
                        <input type="date" class="form-control" name="arrival_date" value="{{ $animal->arrival_date }}"
                            required>
                    </div>
                    <div class="form-group">
                        <label>Insert Image:</label>
                        <input type="file" name="image" id="image">
                    </div>
                    <button type="submit" class="btn greenButton nunito">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
