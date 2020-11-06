@extends('layouts.app')
@section('judul', 'Habitats')
@section('content')
<div class="headFlag">
    <h1 class="nunito">HABITAT DATABASE</h1>
</div>
<div class="container-fluid" style="margin-top: 20px;">
    <div class="row">
        {{-- auth to limit content, it cannot be accessed until login
            --}}
        <div class="col-md-2">
            <a href="{{ route('habitat.create') }}" class="btn btn-block nunito greenButton" role="button"
                aria-pressed="true">Add Habitat</a>
        </div>
    </div>
    <div class="row" style="margin-top: 30px;">
        <table class="table table-striped adminTable">
            <thead>
                <tr>
                    <th scope="col">NAME</th>
                    <th scope="col">TYPE</th>
                    <th scope="col">DESCRIPTION</th>
                    <th scope="col">ANIMALS</th>
                    <th scope="col">UPDATED AT</th>
                    <th scope="col">CREATED AT</th>
                    <th scope="col" colspan="2">MODIFY</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($habitats as $habitat)
                <tr>
                    <td>{{ $habitat->name }}</td>
                    <td>{{ $habitat->type }}</td>
                    <td>{{ $habitat->description }}</td>
                    <td>
                        @foreach ($habitat->hasAnimals as $animal)
                        <li>{{ $animal->name }}</li>
                        @endforeach
                    </td>

                    <td>{{ $habitat->updated_at }}</td>
                    <td>{{ $habitat->created_at }}</td>
                    <td><a href="{{ route('habitat.edit', $habitat) }}"><button type="submit"
                                class="btn btn-primary">Edit</button></a></td>

                    <td>
                        <form action="{{ route('habitat.destroy', $habitat) }}" method="post">
                            {{ csrf_field() }}
                            {{-- orr @csrf --}}
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