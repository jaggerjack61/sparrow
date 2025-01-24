<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .btn-primary {
            background-color: #1976d2;
            border-color: #1976d2;
        }

        .btn-primary:hover {
            background-color: #1565c0;
            border-color: #1565c0;
        }

        .bg-light {
            background-color: #f8f9fa !important;
        }

        .form-control {
            border-radius: 4px;
            border-color: #ced4da;
        }

        .form-control:focus {
            border-color: #1976d2;
            box-shadow: none;
        }

        section {
            padding: 60px 0;
        }

        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.08);
            transition: transform 0.2s ease-in-out;

        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card-body {
            padding: 20px;
        }

        .img-fluid {
            border-radius: 10px;
        }

        .feature-box {
            background-color: #f0f8ff;
        }

        .pricing-box {
            background-color: #f0f8ff;
            text-align: center;
        }

        .pricing-box.standard {
            background-color: #1976d2;
            color: white;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#home">iLanding</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#features">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#testimonials">Testimonials</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#pricing">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#faq">FAQ</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
                <button class="btn btn-primary ms-lg-3">Get Started</button>
            </div>
        </div>
    </nav>


    <section class="bg-light text-center py-5" id="home">
        <div class="container">
            @include('layouts.message')
            <small class="text-muted">Working for your success</small>
            <h1 class="display-4 fw-bold">Maecenas Vitae Consectetur Led Vestibulum Ante</h1>
            <p class="lead mb-4">Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed
                fringilla
                mauris sit amet nibh. Donec sodales sagittis magna.</p>
            <div class="d-flex justify-content-center">
                <button class="btn btn-primary me-2">Get Started</button>
                <button class="btn btn-outline-primary"> <i class="fas fa-play-circle me-2"></i> Play Video</button>
            </div>

            <div class="row mt-4">
                <div class="col-md-6 offset-md-3">
                    <img src="https://picsum.photos/id/104/800/600" alt="Hero Image" class="img-fluid mt-4">

                </div>
                <div class="text-center">
                    <div class="col-md-12 mt-3">
                        <small> 12,000+ lorem ipsum dolor</small>
                        <br />
                        <small>consectetur adipiscing elit</small>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-3">
                    <div class="text-center">
                        <span class="fs-4 fw-bold">3x</span>
                        <br />
                        <small>Won Awards</small>
                        <br />
                        <small>Vestibulum ante ipsum</small>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="text-center">
                        <span class="fs-4 fw-bold">6.5k</span>
                        <br />
                        <small>Faucibus</small>
                        <br />
                        <small>Nullam quis ante</small>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="text-center">
                        <span class="fs-4 fw-bold">80k</span>
                        <br />
                        <small>Mauris</small>
                        <br />
                        <small>Etiam sit amet ordi</small>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="text-center">
                        <span class="fs-4 fw-bold">6x</span>
                        <br />
                        <small>Phasellus</small>
                        <br />
                        <small>Vestibulum ante ipsum</small>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section id="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h2>Voluptas enim suscipit temporibus</h2>
                    <p class="lead">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                        doloremque
                        laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto
                        beatae vitae dicta sunt explicabo.</p>
                    <ul class="list-unstyled">
                        <li> <i class="fas fa-check text-primary me-2"></i>Lorem ipsum dolor sit amet</li>
                        <li> <i class="fas fa-check text-primary me-2"></i>Consectetur adipiscing elit</li>
                        <li> <i class="fas fa-check text-primary me-2"></i>Sed do eiusmod tempor</li>
                        <li> <i class="fas fa-check text-primary me-2"></i>Incididunt ut labore et</li>
                        <li> <i class="fas fa-check text-primary me-2"></i>Dolore magna aliqua</li>
                        <li> <i class="fas fa-check text-primary me-2"></i>Ut enim ad minim veniam</li>
                    </ul>
                    <div class="d-flex align-items-center mt-3">
                        <img src="https://picsum.photos/id/337/50/50" alt="Author" class="rounded-circle me-2">
                        <div>
                            <strong>Mario Smith</strong><br>
                            <small>CEO & Founder</small>
                        </div>
                        <div class="ms-5">
                            <small>Call us anytime</small><br>
                            <small>+123-456-789</small>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="position-relative">
                        <img src="https://picsum.photos/id/1066/500/400" alt="About Image" class="img-fluid">
                        <div class="position-absolute bottom-0 end-0 p-3 bg-primary text-white rounded-3">
                            <strong>15+ Years</strong>
                            <br />
                            <small>Of experience in business service</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-light text-center" id="features">
        <div class="container">
            <h2>Features</h2>
            <p class="lead">Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>

            <div class="d-flex justify-content-center mt-4">
                <button class="btn btn-outline-primary active">Modisit</button>
                <button class="btn btn-outline-primary mx-2">Praesentis</button>
                <button class="btn btn-outline-primary">Explica</button>
            </div>

            <div class="row mt-5">
                <div class="col-md-6">
                    <h2>Voluptatem dignissimos provident</h2>
                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua.</p>
                    <ul class="list-unstyled">
                        <li> <i class="fas fa-check text-primary me-2"></i>Ullamco laboris nisi ut aliquip ex ea
                            commodo consequat.</li>
                        <li> <i class="fas fa-check text-primary me-2"></i>Duis aute irure dolor in reprehenderit in
                            voluptate velit.</li>
                        <li> <i class="fas fa-check text-primary me-2"></i>Ullamco laboris nisi ut aliquip ex ea
                            commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta
                            storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <img src="https://picsum.photos/id/937/500/400" alt="Feature Image" class="img-fluid">
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-md-3">
                    <div class="feature-box text-center card">
                        <div class="card-body">
                            <i class="fas fa-award fa-3x text-warning mb-3"></i>
                            <h5>Corporis voluptates</h5>
                            <p class="text-muted">Consequuntur aut aut quasi enim aliquam quae harum pariatur laboris
                                nisi ut aliquip</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="feature-box text-center card">
                        <div class="card-body">
                            <i class="fas fa-check-circle fa-3x text-info mb-3"></i>
                            <h5>Explicabo consectetur</h5>
                            <p class="text-muted">Est autem dicta beatae suscipit. Sint veritatis et sit quasi ab
                                inventore</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="feature-box text-center card">
                        <div class="card-body">
                            <i class="fas fa-sun fa-3x text-success mb-3"></i>
                            <h5>Ullamco laboris</h5>
                            <p class="text-muted">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                                officia deserunt</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="feature-box text-center card">
                        <div class="card-body">
                            <i class="fas fa-shield-alt fa-3x text-danger mb-3"></i>
                            <h5>Labore consequatur</h5>
                            <p class="text-muted">Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores
                                omnis facere</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <section class="text-center bg-primary text-white py-5">
        <div class="container">
            <h2 class="fw-bold">Maecenas tempus tellus eget condimentum</h2>
            <p class="lead">Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
                Donec velit neque, auctor sit amet aliquam vel</p>
            <button class="btn btn-light mt-3">Call to Action</button>
        </div>
    </section>

    <section class="bg-light text-center" id="testimonials">
        <div class="container">
            <div class="d-flex justify-content-around">
                <img src="https://picsum.photos/id/1047/80/30" alt="Client" class="img-fluid me-2">
                <img src="https://picsum.photos/id/1057/80/30" alt="Client" class="img-fluid me-2">
                <img src="https://picsum.photos/id/1035/80/30" alt="Client" class="img-fluid me-2">
                <img src="https://picsum.photos/id/1036/80/30" alt="Client" class="img-fluid me-2">
                <img src="https://picsum.photos/id/1058/80/30" alt="Client" class="img-fluid me-2">
                <img src="https://picsum.photos/id/1065/80/30" alt="Client" class="img-fluid me-2">
            </div>
            <div class="mt-4">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row mt-5">
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center mb-3">
                                                <img src="https://picsum.photos/id/100/50/50" alt="Author"
                                                    class="rounded-circle me-2">
                                                <div>
                                                    <strong>Saul Goodman</strong><br>
                                                    <small>Ceo & Founder</small>
                                                </div>
                                            </div>
                                            <p> <i class="fas fa-quote-left text-primary me-2"></i> Proin iaculis purus
                                                consequat sem cure dignissim donec porttitora entum suscipit rhoncus.
                                                Accusantium quam, ultricies eget id, aliquam eget nibh er. Maecen
                                                aliquam, risus at semper.
                                                <i class="fas fa-quote-right text-primary ms-2"></i>
                                            </p>
                                            <p class="text-warning">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </p>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center mb-3">
                                                <img src="https://picsum.photos/id/101/50/50" alt="Author"
                                                    class="rounded-circle me-2">
                                                <div>
                                                    <strong>Sara Wilson</strong><br>
                                                    <small>Designer</small>
                                                </div>
                                            </div>
                                            <p><i class="fas fa-quote-left text-primary me-2"></i>Export tempor illum
                                                tamen malis eram quae irure esse labore quem cillum quid cillum eram
                                                malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet
                                                legam anim culpa.
                                                <i class="fas fa-quote-right text-primary ms-2"></i>
                                            </p>
                                            <p class="text-warning">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row mt-5">
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center mb-3">
                                                <img src="https://picsum.photos/id/103/50/50" alt="Author"
                                                    class="rounded-circle me-2">
                                                <div>
                                                    <strong>Jena Karlis</strong><br>
                                                    <small>Store Owner</small>
                                                </div>
                                            </div>
                                            <p><i class="fas fa-quote-left text-primary me-2"></i>Enim nisi quem export
                                                duis labore cillum quae magna enim sint quorum nullae quem veniam duis
                                                minim tempor labore quem eram duis noster aute fugiat quis sint minim.
                                                <i class="fas fa-quote-right text-primary ms-2"></i>
                                            </p>
                                            <p class="text-warning">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center mb-3">
                                                <img src="https://picsum.photos/id/104/50/50" alt="Author"
                                                    class="rounded-circle me-2">
                                                <div>
                                                    <strong>Matt Brandon</strong><br>
                                                    <small>Freelancer</small>
                                                </div>
                                            </div>
                                            <p><i class="fas fa-quote-left text-primary me-2"></i>Fugiat enim eram quae
                                                cillum dolore dolor amet nulla culpa multos export minim fugiat minim
                                                velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem
                                                dolore labore illum veniam.
                                                <i class="fas fa-quote-right text-primary ms-2"></i>
                                            </p>
                                            <p class="text-warning">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
        <div class="container mt-5">
            <div class="row text-center">
                <div class="col-md-3">
                    <span class="fs-2 fw-bold">232</span><br>
                    <small class="text-muted">Clients</small>
                </div>
                <div class="col-md-3">
                    <span class="fs-2 fw-bold">521</span><br>
                    <small class="text-muted">Projects</small>
                </div>
                <div class="col-md-3">
                    <span class="fs-2 fw-bold">1453</span><br>
                    <small class="text-muted">Hours of Support</small>
                </div>
                <div class="col-md-3">
                    <span class="fs-2 fw-bold">32</span><br>
                    <small class="text-muted">Workers</small>
                </div>
            </div>
        </div>
    </section>
    <section id="services">
        <div class="container">
            <h2>Services</h2>
            <p class="lead text-muted text-center">Necessitatibus eius consequatur ex aliquid fuga eum quidem sint
                consectetur velit</p>

            <div class="row mt-4">
                <div class="col-md-6">
                    <div class="card card-body">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-chart-line fa-3x text-primary me-3"></i>
                            <div>
                                <h4>Nesciunt Mete</h4>
                                <p>Provident nihil minus qui consequatur non omnis maiores. Eos accusantium dolores iure
                                    perferendis tempore et consequatur.</p>
                            </div>
                        </div>
                        <a href="#" class="text-primary">Read More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card card-body">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-share-alt fa-3x text-primary me-3"></i>
                            <div>
                                <h4>Eosle Commodi</h4>
                                <p>Ut autem non a. Sit sint facilis nam iusto sint. Libero corrupti neque hic non ut
                                    nesciunt dolorem.</p>
                            </div>
                        </div>
                        <a href="#" class="text-primary">Read More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-6">
                    <div class="card card-body">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-chalkboard-teacher fa-3x text-primary me-3"></i>
                            <div>
                                <h4>Ledo Markt</h4>
                                <p>Ut excepturi voluptatem nisi sed. Quidem fuga consequatur. Minus ea aut. Vel qui id
                                    voluptas adipisci eos earum corrupti.</p>
                            </div>
                        </div>
                        <a href="#" class="text-primary">Read More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card card-body">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-clipboard-check fa-3x text-primary me-3"></i>
                            <div>
                                <h4>Asperiores Commodit</h4>
                                <p>Non et temporibus minus omnis sed dolor esse consequatur. Cupiditate sed error ea
                                    fuga sit provident adipisci neque.</p>
                            </div>
                        </div>
                        <a href="#" class="text-primary">Read More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-light text-center" id="pricing">
        <div class="container">
            <h2>Pricing</h2>
            <p class="lead text-muted">Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur
                velit</p>
            <div class="row mt-5">
                @foreach($pricings as $pricing)
                <div class="col-md-{{ 12 / count($pricings) }}">
                    <div class="card pricing-box {{$pricing->selected ? 'standard' : ''}} ">
                        <div class="card-body">
                            <h2>{{$pricing->name}}</h2>
                            <h1>${{ number_format($pricing->price, 2) }}</h1>
                            <p> / {{$pricing->period}} </p>
                            <p class="text-muted">{{$pricing->description}}</p>
                            <ul class="list-unstyled mt-3">
                                @forelse($pricing->items as $item)


                                    <li><i class="fas fa-check text-success me-2"></i>{{$item->description}}</li>
                                    @empty
                                    <li>No items available.</li>
                                @endforelse

                            </ul>
                            <button class="btn btn-primary mt-4">Buy Now <i
                                    class="fas fa-arrow-right ms-2"></i></button>
                        </div>
                    </div>
                </div>
                @endforeach


            </div>
        </div>
    </section>

    <section id="faq">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h2>Have a question? Check out the FAQ</h2>
                    <p class="lead text-muted">Maecenas tempus tellus eget condimentum rhoncus sem quam semper libero
                        sit amet adipiscing sem neque sed ipsum.</p>
                </div>
                <div class="col-md-6">
                    <div class="accordion" id="faqAccordion">
                        @foreach ($faqs as $index => $faq)
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading{{ $index }}">
                                    <button class="accordion-button {{ $index == 0 ? '' : 'collapsed' }}" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse{{ $index }}"
                                        aria-expanded="{{ $index == 0 ? 'true' : 'false' }}"
                                        aria-controls="collapse{{ $index }}">
                                        {{ $faq->question}}
                                    </button>
                                </h2>
                                <div id="collapse{{ $index }}"
                                    class="accordion-collapse collapse {{ $index == 0 ? 'show' : '' }}"
                                    aria-labelledby="heading{{ $index }}" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        {{ $faq->answer }}
                                    </div>
                                </div>
                            </div>
                        @endforeach



                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="bg-primary text-white text-center py-5">
        <div class="container">
            <h2 class="fw-bold">Call to Action</h2>
            <p class="lead">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                mollit anim id est laborum.</p>
            <button class="btn btn-light mt-3">Call to Action</button>
        </div>
    </section>


    <section id="contact">
        <div class="container">
            <h2 class="text-center mb-4">Contact</h2>
            <p class="lead text-muted text-center">Necessitatibus eius consequatur ex aliquid fuga eum quidem sint
                consectetur velit</p>
            <div class="row">
                <div class="col-md-4">
                    <div class="bg-primary text-white card card-body">
                        <h3>Contact Info</h3>
                        <p>Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum ante ipsum
                            primis.</p>
                        <div class="d-flex align-items-center mb-3">
                            <i class="fas fa-map-marker-alt fa-2x me-2"></i>
                            <div>
                                <strong>Our Location</strong><br>
                                <small>A108 Adam Street</small><br />
                                <small>New York, NY 535022</small>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <i class="fas fa-phone fa-2x me-2"></i>
                            <div>
                                <strong>Phone Number</strong><br>
                                <small>+1 5589 55488 55</small><br />
                                <small>+1 6678 254445 41</small>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <i class="fas fa-envelope fa-2x me-2"></i>
                            <div>
                                <strong>Email Address</strong><br>
                                <small>info@example.com</small><br />
                                <small>contact@example.com</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card card-body">
                        <h3>Get In Touch</h3>
                        <p>Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum ante ipsum
                            primis.</p>
                        <form action="{{ route('message.store') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <input required name="name" type="text" class="form-control"
                                        placeholder="Your Name">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <input required name="email" type="email" class="form-control"
                                        placeholder="Your Email">
                                </div>
                            </div>
                            <div class="mb-3">
                                <input required name="subject" type="text" class="form-control"
                                    placeholder="Subject">
                            </div>
                            <div class="mb-3">
                                <textarea required name="message" class="form-control" rows="5" placeholder="Message"></textarea>
                            </div>
                            <button class="btn btn-primary">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <footer class="bg-light text-muted py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h5>iLanding</h5>
                    <p>A108 Adam Street <br> New York, NY 535022</p>
                    <p>Phone: +1 5589 55488 55</p>
                    <p>Email: info@example.com</p>
                    <div class="d-flex">
                        <a href="#" class="me-2"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="me-2"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="me-2"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-md-3">
                    <h5>Useful Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Terms of service</a></li>
                        <li><a href="#">Privacy policy</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h5>Our Services</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Web Design</a></li>
                        <li><a href="#">Web Development</a></li>
                        <li><a href="#">Product Management</a></li>
                        <li><a href="#">Marketing</a></li>
                        <li><a href="#">Graphic Design</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h5>Hic solutasetp</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Molestiae accusamus iure</a></li>
                        <li><a href="#">Excepturi dignissimos</a></li>
                        <li><a href="#">Suscipit distinctio</a></li>
                        <li><a href="#">Dilecta</a></li>
                        <li><a href="#">Sit quas consectetur</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h5>Nobis illum</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Ipsum</a></li>
                        <li><a href="#">Laudantium dolorum</a></li>
                        <li><a href="#">Dinera</a></li>
                        <li><a href="#">Trodelas</a></li>
                        <li><a href="#">Flexio</a></li>
                    </ul>
                </div>
            </div>
            <p class="text-center mt-4">© Copyright <strong>iLanding</strong>. All Rights Reserved <br>Designed by <a
                    href="https://bootstrapmade.com/">BootstrapMade</a></p>
        </div>
    </footer>

    <script src="js/bootstrap.bundle.min.js"></script>
    <script></script>



</body>

</html>
