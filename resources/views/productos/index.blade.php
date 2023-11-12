@extends('layouts.app') <!-- Asumiendo que tienes un layout base -->
@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col">
            <h1 class="page-title">Productos</h1>
        </div>
    </div>

    <div class="row">
        @foreach ($productos as $producto)
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="{{ asset('img/projects/' . $producto->imagen) }}" class="card-img-top" alt="{{ $producto->nombre }}">
                <div class="card-body">
                    <h2 class="card-title text-black">{{ $producto->nombre }}</h2>
                    <p class="card-text">{{ $producto->descripcion }}</p>
                    <p class="price">
                        <del>${{ $producto->precio_original }}</del>
                        <ins>${{ $producto->precio_descuento }}</ins>
                    </p>
                    <form action="{{ route('carrito.agregar', $producto->id) }}" method="post">
                        @csrf
                        <button type="submit" class="btn btn-primary">Añadir al carrito</button>
                    </form>
                    <a href="{{ route('cotizar') }}" class="btn btn-light">Cotizar por WhatsApp</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection
