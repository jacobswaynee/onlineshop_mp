 @extends('layouts.app') 
 
 @section('content')
     
       <section class="page-section bg-light" id="team">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
                    <h3 class="section-subheading text-muted">Leadership Team</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="{{ asset('assets/img/team/allan.jpeg') }}" alt="..." />
                            <h4>Allan T Muzeya</h4>
                            <p class="text-muted">Technical Lead Manager</p>
                            <a class="btn btn-dark btn-social mx-2" href="https://twitter.com/home" aria-label="Parveen Anand Twitter Profile"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="https://www.facebook.com" aria-label="Parveen Anand Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="https://www.linkedin.com/learning/?u=83233058" aria-label="Parveen Anand LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="{{ asset('assets/img/team/portia2.jpeg') }}" alt="..." />
                            <h4>Portia Munyakari</h4>
                            <p class="text-muted">Marketing Manager</p>
                            <a class="btn btn-dark btn-social mx-2" href="https://twitter.com/home" aria-label="Diana Petersen Twitter Profile"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="https://www.facebook.com" aria-label="Diana Petersen Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="https://www.linkedin.com/learning/?u=83233058" aria-label="Diana Petersen LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="{{ asset('assets/img/team/mike.jpeg') }}" alt="..." />
                            <h4>Wayne M Jacob</h4>
                            <p class="text-muted">Brand Manager</p>
                            <a class="btn btn-dark btn-social mx-2" href="https://twitter.com/home" aria-label="Larry Parker Twitter Profile"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="https://www.facebook.com" aria-label="Larry Parker Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="https://www.linkedin.com/learning/?u=83233058" aria-label="Larry Parker LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    {{-- <div class="col-lg-8 mx-auto text-center"><p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p></div> --}}
                </div>
            </div>
        </section>
@endsection
