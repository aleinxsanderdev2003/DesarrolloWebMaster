@extends('layout.app')
@section('content')
<style>
      /* Estilos para las imágenes y textos */
      .carousel-item img {
            width: 100%;
            max-height: 400px; /* Altura máxima deseada */
            object-fit: cover; /* Escala y recorta la imagen */
        }
        .carousel-caption {
            background: rgba(0, 0, 0, 0.7); /* Fondo oscuro con opacidad */
            border-radius: 5px;
            text-align: center;
            padding: 10px;
        }
        .carousel-caption h3, .carousel-caption p {
            font-size: 24px; /* Tamaño del texto */
            color: white;
        }
        /* Estilo para los botones de navegación */
        .carousel-control-prev, .carousel-control-next {
            background: rgba(0, 0, 0, 0.7);
            border-radius: 50%;
            width: 50px;
            height: 50px;
            top: 50%;
            transform: translateY(-50%);
        }
        .carousel-control-prev-icon, .carousel-control-next-icon {
            background-color: transparent;
        }
        .carousel-control-prev-icon::before, .carousel-control-next-icon::before {
            content: "";
        }
        /* Estilo para los controles de navegación en dispositivos móviles */
        @media (max-width: 768px) {
            .carousel-control-prev, .carousel-control-next {
                width: 30px;
                height: 30px;
            }
        }
</style>  <div id="promocionesCarousel" class="carousel slide" data-bs-ride="carousel">
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

    <style> .frase{ font-family: 'Edu TAS Beginner', cursive;}

        </style>

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
 <div class="container">
    <h1 class="text-center mt-5">CLIENTES</h1>
    <div id="clientesCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://unionandina.com/wp-content/uploads/2022/02/Ruta-PI-logo-1.png" class="d-block mx-auto" alt="Cliente 1">
            </div>
            <div class="carousel-item">
                <img src="https://www.staffcreativa.pe/blog/wp-content/uploads/6_logotipos_peruanos_m%C3%A1s_recordados.jpg" class="d-block mx-auto" alt="Cliente 2">
            </div>
            <div class="carousel-item">
                <img src="https://logos-marcas.com/wp-content/uploads/2021/12/Postobon-Logo.jpg" class="d-block mx-auto" alt="Cliente 3">
            </div>
            <!-- Agrega más imágenes de clientes según sea necesario -->
        </div>
        <a class="carousel-control-prev" href="#clientesCarousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#clientesCarousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Siguiente</span>
        </a>
    </div>
</div>





@endsection
