@extends('layout.app')
@section('content')

<div id="promocionesCarousel" class="carousel slide" data-bs-ride="carousel">
    <!-- Slides del carrusel -->
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="https://images.unsplash.com/photo-1448932223592-d1fc686e76ea?q=80&w=1469&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="d-block w-100" alt="Promoción 1">
            <div class="carousel-caption">
                <h3>COMPROMISO</h3>
                <p class="frase">Comprometidos en ofrecer soluciones web innovadoras.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="https://images.unsplash.com/photo-1520333789090-1afc82db536a?q=80&w=1471&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="d-block w-100" alt="Promoción 2">
            <div class="carousel-caption">
                <h3>DEDICACIÓN</h3>
                <p class="frase">Dedicados a la creación de sitios web a medida.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="d-block w-100" alt="Promoción 3">
            <div class="carousel-caption">
                <h3>CONOCIMIENTO</h3>
                <p class="frase">Amplio conocimiento en desarrollo de sistemas web.</p>
            </div>
        </div>
    </div>

    <!-- Controles del carrusel -->
    <a class="carousel-control-prev" href="#promocionesCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Anterior</span>
    </a>
    <a class="carousel-control-next" href="#promocionesCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Siguiente</span>
    </a>
</div>

 <!-- Sección de Clientes -->
 <div class="container clientes-section">
    <h1>CLIENTES</h1>
    <div class="clientes-container">
        <div class="clientes-logos">
            <img src="https://logos-marcas.com/wp-content/uploads/2021/12/Postobon-Logo.jpg" class="cliente-logo" alt="Cliente 1">
            <img src="https://cdn.designcrowd.com/blog/2016/November/entrepreneur-logos/Logos-25-300x300%20luiz%20otavio%20I%20DESIGN.png" class="cliente-logo" alt="Cliente 2">
            <img src="" class="cliente-logo" alt="Cliente 3">

        </div>
    </div>
</div>
@endsection
