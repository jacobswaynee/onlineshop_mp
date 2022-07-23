@extends('layouts.app')

@section('content')
<!-- Gallery Grid-->
<section class="page-section bg-light" id="portfolio">
    <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Welcome To Our Shop Gallery</h2>
                    <h3 class="section-subheading text-muted">Your smart is our parioty</h3>
                </div>
                <section class="page-section bg-light" id="portfolio">
                  <div class="container">
                      <div class="row">
                          <div class="col-lg-4 col-sm-6 mb-4">
                              <!-- Portfolio item 1-->
                              <div class="portfolio-item">
                                  <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                                      <div class="portfolio-hover">
                                          <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                      </div>
                                      <img class="img-fluid" src="{{ asset('assets/img/products/airforce2.jpg') }}" alt="..." />
                                  </a>
                                  <div class="portfolio-caption">
                                      <div class="portfolio-caption-heading">Threads</div>
                                      <div class="portfolio-caption-subheading text-muted">Illustration</div>
                                  </div>
                              </div>
                          </div>
                          <div class="col-lg-4 col-sm-6 mb-4">
                              <!-- Portfolio item 2-->
                              <div class="portfolio-item">
                                  <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
                                      <div class="portfolio-hover">
                                          <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                      </div>
                                      <img class="img-fluid" src="{{ asset('assets/img/products/jacket_gentle.jpg') }}" alt="..." />
                                  </a>
                                  <div class="portfolio-caption">
                                      <div class="portfolio-caption-heading">Explore</div>
                                      <div class="portfolio-caption-subheading text-muted">Graphic Design</div>
                                  </div>
                              </div>
                          </div>
                          <div class="col-lg-4 col-sm-6 mb-4">
                              <!-- Portfolio item 3-->
                              <div class="portfolio-item">
                                  <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
                                      <div class="portfolio-hover">
                                          <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                      </div>
                                      <img class="img-fluid" src="{{ asset('assets/img/products/blackguy.jpg') }}" alt="..." />
                                  </a>
                                  <div class="portfolio-caption">
                                      <div class="portfolio-caption-heading">Finish</div>
                                      <div class="portfolio-caption-subheading text-muted">Identity</div>
                                  </div>
                              </div>
                          </div>
                          <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                              <!-- Portfolio item 4-->
                              <div class="portfolio-item">
                                  <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal4">
                                      <div class="portfolio-hover">
                                          <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                      </div>
                                      <img class="img-fluid" src="{{ asset('assets/img/products/boots.jpg') }}" alt="..." />
                                  </a>
                                  <div class="portfolio-caption">
                                      <div class="portfolio-caption-heading">Lines</div>
                                      <div class="portfolio-caption-subheading text-muted">Branding</div>
                                  </div>
                              </div>
                          </div>
                          <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                              <!-- Portfolio item 5-->
                              <div class="portfolio-item">
                                  <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal5">
                                      <div class="portfolio-hover">
                                          <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                      </div>
                                      <img class="img-fluid" src="{{ asset('assets/img/products/joldan.jpg') }}" alt="..." />
                                  </a>
                                  <div class="portfolio-caption">
                                      <div class="portfolio-caption-heading">Southwest</div>
                                      <div class="portfolio-caption-subheading text-muted">Website Design</div>
                                  </div>
                              </div>
                          </div>
                          <div class="col-lg-4 col-sm-6">
                              <!-- Portfolio item 6-->
                              <div class="portfolio-item">
                                  <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal6">
                                      <div class="portfolio-hover">
                                          <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                      </div>
                                      <img class="img-fluid" src="{{ asset('assets/img/products/trainer_addidas.jpg') }}" alt="..." />
                                  </a>
                                  <div class="portfolio-caption">
                                      <div class="portfolio-caption-heading">Window</div>
                                      <div class="portfolio-caption-subheading text-muted">Photography</div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </section>        
        </div>
    </div>
</section>

    
{{-- @endsection
@extends('layouts.app')
  
@section('content') --}}
{{-- <div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Product</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('gallery') }}"> Back</a>
        </div>
    </div>
</div>
     
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
     
<form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Detail:</strong>
                <textarea class="form-control" style="height:150px" name="detail" placeholder="Detail"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Image:</strong>
                <input type="file" name="image" class="form-control" placeholder="image">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

     
</form> --}}

@endsection