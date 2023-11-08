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
<style>
        /* Estilos para la sección de Testimonios */
        .testimonials-section {
            text-align: center;
            padding: 20px;
        }
        .testimonial-card {
            margin: 20px;
        }
</style>
 <div class="container clientes-section">
    <h2 class="section-title">Clientes</h2>
    <div id="clientsCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="client-item">
                    <img src="https://i0.wp.com/www.sergestec.com/wp-content/uploads/2020/10/cm_perpetuo_socorro.jpg?fit=300%2C100&#038;ssl=1" alt="Cliente 1">
                </div>
                <div class="client-item">
                    <img src="https://i0.wp.com/www.sergestec.com/wp-content/uploads/2020/10/cm_perpetuo_socorro.jpg?fit=300%2C100&#038;ssl=1" alt="Cliente 1">
                </div>
                <div class="client-item">
                    <img src="https://i0.wp.com/www.sergestec.com/wp-content/uploads/2020/10/minimarket_c__w.jpg?fit=300%2C100&#038;ssl=1" alt="Cliente 2">
                </div>
                <!-- Agrega más clientes según sea necesario -->
            </div>
            <div class="carousel-item">
                <div class="client-item">
                    <img src="https://i0.wp.com/www.sergestec.com/wp-content/uploads/2020/10/prime_profesional_sac.jpg?fit=300%2C100&#038;ssl=1" alt="Cliente 3">
                </div>
                <div class="client-item">
                    <img src="https://i0.wp.com/www.sergestec.com/wp-content/uploads/2020/10/prime_profesional_sac.jpg?fit=300%2C100&#038;ssl=1" alt="Cliente 3">
                </div>
                <div class="client-item">
                    <img src="https://i0.wp.com/www.sergestec.com/wp-content/uploads/2020/10/group_fernandez_international_sac.jpg?fit=300%2C100&#038;ssl=1" alt="Cliente 4">
                </div>
                <!-- Agrega más clientes según sea necesario -->
            </div>
        </div>
        <a class="carousel-control-prev" href="#clientsCarousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#clientsCarousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Siguiente</span>
        </a>
    </div>
</div>
  <!-- Sección de Productos y Servicios -->
  <div class="container productos-section">
    <h1 class="display-5">PRODUCTOS Y SERVICIOS</h1>
    <div class="row">
        <div class="col-md-4">
            <div class="producto-card">
                <h2>Sistema de Ventas Web</h2>
                <p>Software administrador de compras, ventas e inventario de propósito general, orientado a todo tipo de negocios, podrá gestionar los principales procesos como cotizaciones, caja chica, gastos, balance, clientes, proveedores, múltiples ...</p>
                <a href="#" class="btn btn-primary">VER MÁS</a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="producto-card">
                <h2>Sistema de Ventas Web</h2>
                <p>Software administrador de compras, ventas e inventario de propósito general, orientado a todo tipo de negocios, podrá gestionar los principales procesos como cotizaciones, caja chica, gastos, balance, clientes, proveedores, múltiples ...</p>
                <a href="#" class="btn btn-primary">VER MÁS</a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="producto-card">
                <h2>Sistema de Ventas Web</h2>
                <p>Software administrador de compras, ventas e inventario de propósito general, orientado a todo tipo de negocios, podrá gestionar los principales procesos como cotizaciones, caja chica, gastos, balance, clientes, proveedores, múltiples ...</p>
                <a href="#" class="btn btn-primary">VER MÁS</a>
            </div>
        </div>
        <!-- Agrega más productos y servicios según sea necesario -->
    </div>
</div>


 <!-- Sección de Testimonios -->
  <!-- Sección de Testimonios -->
  <div class="container testimonials-section">
    <h2 class="section-title">TESTIMONIOS</h2>
    <div class="section-desc">
        <p>Socios y clientes agradecidos con nuestros servicios</p>
    </div>
    <div class="row">
        <div class="col-md-3">
            <div class="card testimonial-card card-color-1">
                <div class="card-block">
                    <div class="tes_author">
                        <img width="40px" src="https://static.vecteezy.com/system/resources/previews/008/442/086/non_2x/illustration-of-human-icon-user-symbol-icon-modern-design-on-blank-background-free-vector.jpg" alt="">
                        <cite class="tes__name">Alexander Rios<span>Químico farmacéutico</span></cite>
                    </div>
                    <h4 class="card-title">Excelente atención</h4>
                    <p class="card-text">
                        Muy satisfechos con el servicio recibido, adquirimos el Sistema Administrador de Ventas e Inventario para nuestro Centro Médico, todo funciona de maravilla.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card testimonial-card card-color-2">
                <div class="card-block">
                    <div class="tes_author">
                        <img width="40px" src="https://static.vecteezy.com/system/resources/previews/008/442/086/non_2x/illustration-of-human-icon-user-symbol-icon-modern-design-on-blank-background-free-vector.jpg" alt="">
                        <cite class="tes__name">Alexander Maxwell<span>Agente de ventas</span></cite>
                    </div>
                    <h4 class="card-title">Ingresos adicionales</h4>
                    <p class="card-text">
                        Soy parte de la empresa y recibo excelentes ganancias mensuales a través del Programa de Socios donde promociono los diferentes Sistemas.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card testimonial-card card-color-3">
                <div class="card-block">
                    <div class="tes_author">
                        <img width="40px" src="https://static.vecteezy.com/system/resources/previews/008/442/086/non_2x/illustration-of-human-icon-user-symbol-icon-modern-design-on-blank-background-free-vector.jpg" alt="">
                        <cite class="tes__name">Peter Mendez<span>Director de MIMOBIL SA</span></cite>
                    </div>
                    <h4 class="card-title">Sistemas versátiles</h4>
                    <p class="card-text">
                        Adquirimos el Sistema de Ventas e Inventario, la implementación y uso fue muy rápida, permitiéndonos continuar con nuestras actividades habituales.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card testimonial-card card-color-4">
                <div class="card-block">
                    <div class="tes_author">
                        <img width="40px" src="https://static.vecteezy.com/system/resources/previews/008/442/086/non_2x/illustration-of-human-icon-user-symbol-icon-modern-design-on-blank-background-free-vector.jpg" alt="">
                        <cite class="tes__name">Yessica V<span>CM Perpetuo Socorro</span></cite>
                    </div>
                    <h4 class="card-title">Facturación electrónica</h4>
                    <p class="card-text">
                        Excelente! Nos prestó servicio de Facturación, todo súper rápido y fácil de usar!
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    /* Estilos para la sección de Testimonios */
    .testimonials-section {
        text-align: center;
        padding: 20px;
    }
    .testimonial-card {
        margin: 20px;
    }
    .card-color-1 {
        background-color: #FF5733;
    }
    .card-color-2 {
        background-color: #33FF57;
    }
    .card-color-3 {
        background-color: #5733FF;
    }
    .card-color-4 {
        background-color: #33FFFF;
    }
</style>
@endsection
