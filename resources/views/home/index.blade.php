@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row align-items-center rounded-4 p-4" style="background-color: #e1bee7; border: 2px solid #f8bbd0;">
        <div class="col-md-6">
            <h1 class="fw-bold" style="color: #5d4037;">
                Arma tu <span style="color: #f06292;">combo ideal</span> de donitas
            </h1>
            <p class="mt-3 text-dark">
                Sorprende a tus seres queridos con delicias artesanales y naturales llenas de sabor.
            </p>
            <div class="mt-4 d-flex gap-3">
                <a href="#" class="btn px-4 py-2" style="background-color: #f06292; color: white; border-radius: 20px;">Hacer pedido</a>
                <a href="#" class="btn btn-outline-dark px-4 py-2" style="border-radius: 20px;">Crear combo</a>
            </div>
        </div>
        <div class="col-md-6 text-center mt-4 mt-md-0">
            <img src="{{ asset('img/donut-hero.png') }}" alt="Donita feliz" class="img-fluid rounded-4 border border-3" style="border-color: #f06292;">
        </div>
    </div>
</div>
<!-- Hero aquí arriba... -->

{{-- Catálogo --}}
<div class="container mt-5 py-5 px-4 rounded-4" style="background-color: #ffffffcc;">
    <h2 class="text-center fw-bold mb-4" style="color: #ef6c00;">Catálogo</h2>

    <div class="d-flex flex-wrap justify-content-center gap-2 mb-4">
        @foreach (['Hot', 'Brochetas', 'Donitas', 'Vasos', 'Cajas', 'Ramos'] as $categoria)
            <button class="btn btn-outline-warning rounded-pill px-4 py-1 fw-semibold">
                {{ $categoria }}
            </button>
        @endforeach
    </div>

    <div class="row row-cols-1 row-cols-md-3 g-4">
        {{-- Producto 1 --}}
        <div class="col">
            <div class="card h-100 border-2" style="border-color: #ffd54f; border-radius: 20px;">
                <img src="{{ asset('img/catalogo/favorito.jpg') }}" class="card-img-top rounded-top" alt="Box Favorito">
                <div class="card-body">
                    <h5 class="card-title fw-bold">Box “Favorito”</h5>
                    <p class="card-text">Variedad de sabores: choco, frutal, coco y más.</p>
                    <p class="fw-semibold">$35.000</p>
                    <div class="d-flex gap-2">
                        <a href="#" class="btn btn-outline-dark">Ver más</a>
                        <a href="#" class="btn text-white" style="background-color: #f06292;">Comprar</a>
                    </div>
                </div>
            </div>
        </div>

        {{-- Producto 2 --}}
        <div class="col">
            <div class="card h-100 border-2" style="border-color: #ffd54f; border-radius: 20px;">
                <img src="{{ asset('img/catalogo/vasos.jpg') }}" class="card-img-top rounded-top" alt="Box Vasos">
                <div class="card-body">
                    <h5 class="card-title fw-bold">Box “Vasos”</h5>
                    <p class="card-text">Donitas cubiertas con chocolates variados.</p>
                    <p class="fw-semibold">$12.000</p>
                    <div class="d-flex gap-2">
                        <a href="#" class="btn btn-outline-dark">Ver más</a>
                        <a href="#" class="btn text-white" style="background-color: #f06292;">Comprar</a>
                    </div>
                </div>
            </div>
        </div>

        {{-- Producto 3 --}}
        <div class="col">
            <div class="card h-100 border-2" style="border-color: #ffd54f; border-radius: 20px;">
                <img src="{{ asset('img/catalogo/brocheta.jpg') }}" class="card-img-top rounded-top" alt="Box Brocheta">
                <div class="card-body">
                    <h5 class="card-title fw-bold">Box “Brocheta”</h5>
                    <p class="card-text">Ideal para cumpleaños y reuniones.</p>
                    <p class="fw-semibold">$6.000</p>
                    <div class="d-flex gap-2">
                        <a href="#" class="btn btn-outline-dark">Ver más</a>
                        <a href="#" class="btn text-white" style="background-color: #f06292;">Comprar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
