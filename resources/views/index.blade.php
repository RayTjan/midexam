@extends('layouts.app')
@section('judul','INDEX')
@section('content')
    <div class="landingImage">
        {{-- <img src="{{asset('images/singapore_zoo.jpg')}}" class="img-fluid w-100 bigImage" alt="Responsive image"> --}}
        <p class="nunito">Welcome to</p>
        <p class="nunito">Singapore Zoo</p>
    </div>
    <div class="conatainer landingText">
        <p class="greya biggerText">To be a world-leading zoological institution that inspires people to value and conserve biodiversity.        </p>
    </div>
    <div class="aboutZoo">
        <img class="aboutImage" src="{{asset('images/zoo_caretaker.jpg')}}" alt="">
        <h1 class=" nunito aboutTitle">ABOUT SINGAPORE ZOO</h1>
        <p class="greya aboutExplain">The Singapore Zoo, formerly known as the Singapore Zoological Gardens or Mandai Zoo and now commonly known locally as the Singapore Zoo, occupies 28 hectares on the margins of Upper Seletar Reservoir within Singapore's heavily forested central catchment area.</p>
    </div>
    <div class="carouselBorder">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{asset('images/zoo_preview.jpg')}}" class="d-block w-100 carouselImage" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                    <h5 class="nunito">Our List of Animals</h5>
                    <p class="greya">Varities of species throughout the world</p>
                    </div>
                </div>
                @foreach($animals as $animal)  
                <tr>
                    <div class="carousel-item">
                        <img src="{{asset('images/' . $animal->image)}}" class="d-block w-100 carouselImage" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                        <h4 class="nunito">{{$animal->name}}</h4>
                        <p class="greya">{{$animal->isIn->name}}</p>
                        </div>
                    </div>
                </tr>
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <div class="container-fluid indexData">
        <div>
            <h2 class="nunito">ANIMAL LIST</h2>
            <table class="table table-striped indexTable">
                <thead>
                    <tr>
                        <th scope="col">ANIMAL</th>
                        <th scope="col">NAME</th>
                        <th scope="col">FAMILY</th>
                        <th scope="col">DIET</th>
                        <th scope="col">QUANTITY</th>
                        <th scope="col">CARETAKER</th>
                        <th scope="col">HABITAT</th>
                        <th scope="col">DESCRIPTION</th>
                        <th scope="col">ARRIVAL DATE</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach($animals as $animal)  
                    <tr>
                        <td><img class="tableImage" src="{{asset('images/' . $animal->image)}}"></td>
                        <td>{{$animal->name}}</td>
                        <td>{{$animal->family}}</td>
                        <td>{{$animal->diet}}</td>
                        <td>{{$animal->quantity}}</td>
                        <td>{{$animal->takenCareBy->name}}</td>
                        <td>{{$animal->isIn->name}}</td>
                        <td>{{$animal->description}}</td>
                        <td>{{$animal->arrival_date}}</td>
                    </tr>
                    @endforeach
                </tbody>
                <tbody>
            </table>
        </div>
    </div>
    @auth()

    <div class=" adminSection">
        <h2 class="nunito underL">ADMIN</h2>
        <br>
        <div class="row adminChoice" >
            <div class="jumbotron jumbotron-fluid left">
                <div class="container ">
                <h1 class="display-3 nunito">ANIMAL DATA</h1>
                <p class="lead greya">Add, Edit, Update, Delete Animals!</p>
                <a class="btn btn-primary btn-lg greenBackground nunito" href="{{route('animal.index')}}" role="button">Go to Animal</a>
                </div>
            </div>
            <div class="jumbotron jumbotron-fluid right">
                <div class="container ">
                <h1 class="display-3 nunito">HABITAT DATA</h1>
                <p class="lead greya">Add, Edit, Update, Delete Habitats!</p>
                <a class="btn btn-primary btn-lg greenBackground nunito" href="{{route('habitat.index')}}" role="button">Go to Habitat</a>
                </div>
            </div>
        </div>
    </div>
        @endauth
    <footer>
        <p class="nunito">
            CONTACT US!
        </p>
        <div>
            <ul class="list-inline">
            <li class="list-inline-item"><a href="https://www.facebook.com/pages/category/Community/Singapore-Zoo-241658052530069/"><img class="externalLogo" src="{{asset('images/facebook.png')}}" alt=""></a></li>
            <li class="list-inline-item"><a  href="https://twitter.com/singaporzoo?lang=en"><img class="externalLogo" src="{{asset('images/twitter.png')}}" alt=""></a></a></li>
            <li class="list-inline-item"><a href="https://www.instagram.com/singaporezoo.sg/"><img class="externalLogo" src="{{asset('images/instagram.png')}}" alt=""></a></a></li>
        </ul>
        </div>
        <p class="greya smolText">@copyright</p>
    </footer>



@endsection