@extends('layout.app')

@section('title', 'Dashboard')

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Dashboard</h1>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                  <i class="fas fa-users"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <a href="/anggota"><h4>Anggota</h4></a>
                  </div>
                  <div class="card-body">
                    {{$anggota->count()}}
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-danger">
                  <i class="fas fa-book"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <a href="/buku"><h4>Buku</h4></a>
                  </div>
                  <div class="card-body">
                  {{$buku->count()}}
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-warning">
                  <i class="fas fa-list"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <a href="/category"><h4>Category</h4></a>
                  </div>
                  <div class="card-body">
                  {{$category->count()}}
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-success">
                  <i class="fas fa-pen-nib"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <a href="/penerbit"><h4>Penerbit</h4></a>
                  </div>
                  <div class="card-body">
                  {{$penerbit->count()}}
                  </div>
                </div>
              </div>
            </div>                  
          </div>
    </div>
</section>
@endsection