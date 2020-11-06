@extends('layouts.app')
@section('judul','Habitats')
@section('content')
<div class="headFlag">
    <h1 class="nunito">EDIT HABITAT</h1>
</div>
<div class="container-fluid formInput">
    <div class="row">
        <div class="col">
            <form action="{{route('habitat.update',$habitat)}}" method="post">
                {{csrf_field()}}
                <input type="hidden" name="_method" value="PATCH">
                <div class="form-group">
                    <label>Name: </label>
                    <input type="text" class="form-control" name="name" value="{{$habitat->name}}" required>
                </div>
                <div class="form-group">
                    <label>Type: </label>
                    <select name="type" class="custom-select">
                        <option @if ($habitat->type == "Forests") selected @endif value="Forests">Forests</option>
                        <option @if ($habitat->type == "Grasslands") selected @endif value="Grasslands">Grasslands
                        </option>
                        <option @if ($habitat->type == "Deserts") selected @endif value="Deserts">Deserts</option>
                        <option @if ($habitat->type == "Polar" ) selected @endif value="Polar">Polar</option>
                        <option @if ($habitat->type == "Aquatic")selected @endif value="Aquatic" >Aquatic</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Description:</label>
                    <textarea class="form-control" name="description" required>{{$habitat->description}}</textarea>
                </div>
                <button type="submit" class="btn greenButton nunito">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection