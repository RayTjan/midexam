@extends('layouts.app')
@section('judul', 'Habitats')
@section('content')
    <div class="headFlag">
        <h1 class="nunito">ADD HABITAT</h1>
    </div>
    <div class="container-fluid formInput">
        <div class="row">
            <div class="col">
                <form action="{{ route('habitat.store') }}" method="post">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label>Name: </label>
                        <input type="text" class="form-control" name="name" required>
                    </div>
                    <div class="form-group">
                        <label>Type: </label>
                        <select name="type" class="custom-select">
                            <option value="Forests">Forests</option>
                            <option value="Grasslands">Grasslands</option>
                            <option value="Deserts">Deserts</option>
                            <option value="Polar">Polar</option>
                            <option value="Aquatic">Aquatic</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Description:</label>
                        <textarea class="form-control" name="description" required></textarea>
                    </div>
                    <button type="submit" class="btn greenButton nunito">Submit</button>
                </form>
            </div>
        </div>
    </div>

@endsection
