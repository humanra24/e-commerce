@extends('layouts.main')


@section('container')
<div id="carouselExampleCaptions" class="carousel slide mb-4" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="https://source.unsplash.com/1200x400?laptop" class="d-block w-100" alt="Laptop">
            <div class="carousel-caption d-none d-md-block d-flex" style="background-color: rgba(0, 0, 0, 0.7)">
                <h5>First slide label</h5>
                <p>Some representative placeholder content for the first slide.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="https://source.unsplash.com/1200x400?dress" class="d-block w-100" alt="dress">
            <div class="carousel-caption d-none d-md-block" style="background-color: rgba(0, 0, 0, 0.7)">
                <h5>Second slide label</h5>
                <p>Some representative placeholder content for the second slide.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="https://source.unsplash.com/1200x400?shoes" class="d-block w-100" alt="shoes">
            <div class="carousel-caption d-none d-md-block" style="background-color: rgba(0, 0, 0, 0.7)">
                <h5>Third slide label</h5>
                <p>Some representative placeholder content for the third slide.</p>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<div class="row">
@for ($i = 0; $i < 28; $i++) 
    <div class="col-3 mb-5">
        <div class="card">
            <img src="https://source.unsplash.com/1200x600?bag" class="card-img-top" alt="bags">
            <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                    content.</p>
            </div>
        </div>
    </div>
@endfor
</div>
@endsection
