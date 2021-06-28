@extends('layouts.app', ['activePage' => 'dashboard', 'titlePage' => __('Inicio')])

@section('content')

  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6">
          <a href="{{ route('table') }}" class="card card-stats">
            <div class="card-header card-header-warning card-header-icon">
              <div class="card-icon">
                <i class="material-icons">people</i>
              </div>
              <p class="card-category">Registrados</p>
              <h3 class="card-title">
                <small>{{ $peoples }}</small>
              </h3>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <a href="{{ route('table') }}" class="card card-stats">
            <div class="card-header card-header-success card-header-icon">
              <div class="card-icon">
                <i class="material-icons">people</i>
              </div>
              <p class="card-category">Visitas</p>
              <h3 class="card-title">{{ $visits }}</h3>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('js')
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();
    });
  </script>
@endpush