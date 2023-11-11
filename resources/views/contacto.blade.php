@extends('layout.app')
@section('content')

<!-- Contenido de la página -->
<div class="container mt-5">
    <div class="row">
      <div class="col-lg-8 mx-auto">
        <div class="contact-form">
          <h2 class="text-center mb-4">Contáctanos</h2>
          <!-- Formulario de contacto -->
          <form>
            <div class="form-group">
              <label for="nombre">Nombre:</label>
              <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
            <div class="form-group">
              <label for="email">Correo Electrónico:</label>
              <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
              <label for="mensaje">Mensaje:</label>
              <textarea class="form-control" id="mensaje" name="mensaje" rows="4" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Enviar Mensaje</button>
          </form>
        </div>
      </div>
    </div>
    <!-- Lista de contactos realizados (puedes mostrarlos de alguna manera) -->
    <div class="row mt-5">
      <div class="col-lg-8 mx-auto">
        <h2 class="text-center mb-4">Consultas Recientes</h2>
        <ul class="list-group">
          <li class="list-group-item">Consulta 1 - Nombre del Cliente</li>
          <li class="list-group-item">Consulta 2 - Nombre del Cliente</li>
          <!-- Agrega más elementos según sea necesario -->
        </ul>
      </div>
    </div>
  </div>
@endsection
