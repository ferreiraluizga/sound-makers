<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/global_style.css">
    <title>Sound Makers</title>

    <style>
        #hero {
            background-image: url("assets/img/hero_image.png");
            background-size: cover;
            background-position: center;
            height: 55dvh;
        }
    </style>
</head>

<body>

    <!-- navbar offcanvas -->
    <div class="offcanvas offcanvas-start text-bg-dark" data-bs-scroll="true" tabindex="-1" id="nav_offcanvas"
        aria-labelledby="offcanvasWithBothOptionsLabel">
        <div class="offcanvas-header">
            <img src="assets/svg/website_logo.svg" alt="website_logo" class="mb-4">
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <p class="fw-semibold mb-5">a música pulsa e vive em cada nota, em cada acorde,
                transformando aprendizado em verdadeira harmonia.</p>
            <nav class="nav flex-column nav-underline mb-5">
                <a class="nav-link text-white active" aria-current="page" href="#">Home</a>
                <a class="nav-link text-white" href="">Cursos</a>
                <a class="nav-link text-white" href="">Músicas</a>
            </nav>
            <a class="text-white" href="">Fazer Login</a>
        </div>
    </div>
    <!-- fixed navbar -->
    <nav class="navbar navbar-expand-lg bg-dark py-3 sticky-top" data-bs-theme="dark">
        <div class="container justify-content-center">
            <span class="navbar-brand" style="cursor: pointer;">
                <img src="assets/svg/website_logo.svg" alt="website_logo" data-bs-toggle="offcanvas"
                    data-bs-target="#nav_offcanvas" aria-controls="nav_offcanvas">
            </span>
        </div>
    </nav>

    <!-- hero -->
    <section id="hero" class="d-flex justify-content-start align-items-end mt-0 p-5 mb-5">
        <div class="text-start px-3 py-5">
            <img src="assets/svg/hero_logo.svg" alt="website_logo" class="mb-4">
            <h3 class="text-white fw-semibold">a música pulsa e vive em cada nota, em cada acorde, <br> transformando aprendizado em
                verdadeira harmonia.</h3>
        </div>
    </section>

    <div class="container">

        <h1 class="display-5 fw-bolder mb-5">Top Charts</h1>

        <div class="row mb-5">
            <div class="col-8">
                <div class="card h-100">
                    <div class="card-header text-white" style="background-color: #CC9211;">
                        <h5 class="card-title fw-semibold mb-0">Top Músicas</h5>
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <iframe style="border-radius:12px" src="https://open.spotify.com/embed/track/2hXnSyCk28BryCwBvoWW7L?utm_source=generator" width="100%" height="152" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
                            <li class="list-group-item d-flex justify-content-between align-items-center mt-2">
                                <span class="fs-5 fw-medium"><span class="fs-3 fw-bold me-2">1.</span> Bohemian Rhapsody</span>
                                <a href="" class="link-underline-secondary link-underline-opacity-0 link-offset-2-hover link-underline-opacity-75-hover"><span class="text-muted">Queen</span></a>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span class="fs-5 fw-medium"><span class="fs-3 fw-bold me-2">2.</span> Shape of You</span>
                                <a href="" class="link-underline-secondary link-underline-opacity-0 link-offset-2-hover link-underline-opacity-75-hover"><span class="text-muted">Ed Sheeran</span></a>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span class="fs-5 fw-medium"><span class="fs-3 fw-bold me-2">3.</span> Blinding Lights</span>
                                <a href="" class="link-underline-secondary link-underline-opacity-0 link-offset-2-hover link-underline-opacity-75-hover"><span class="text-muted">The Weeknd</span></a>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span class="fs-5 fw-medium"><span class="fs-3 fw-bold me-2">4.</span> Rolling in the Deep</span>
                                <a href="" class="link-underline-secondary link-underline-opacity-0 link-offset-2-hover link-underline-opacity-75-hover"><span class="text-muted">Adele</span></a>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span class="fs-5 fw-medium"><span class="fs-3 fw-bold me-2">5.</span> Smells Like Teen Spirit</span>
                                <a href="" class="link-underline-secondary link-underline-opacity-0 link-offset-2-hover link-underline-opacity-75-hover"><span class="text-muted">Nirvana</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card h-100">
                    <div class="card-header text-white" style="background-color: #CC9211;">
                        <h5 class="card-title mb-0 fw-semibold">Artista da Semana</h5>
                    </div>
                    <div class="card-body">
                        <iframe style="border-radius:12px" src="https://open.spotify.com/embed/artist/3nm10RPR7Ts3qPCwhQBUew?utm_source=generator" width="100%" height="445" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>

        <hr>

        <h1 class="display-5 fw-bolder mt-5 mb-5">Cursos</h1>

        <div class="card shadow-lg border-0 rounded-4 mb-3">
            <div class="card-header p-0">
                <img src="https://images.unsplash.com/photo-1471478331149-c72f17e33c73?q=80&w=800&h=300&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" style="filter: brightness(0.7);" alt="Violão e Guitarra" class="img-fluid w-100">
                <div class="position-absolute top-50 start-50 translate-middle text-white text-center">
                    <h1 class="fw-bold">Violão e Guitarra</h1>
                </div>
            </div>
            <div class="card-body row p-4">
                <div class="col-6">
                    <p class="mb-4 text-justify">O curso de violão e guitarra da plataforma Sound Makers oferece uma jornada prática e envolvente, ideal para iniciantes e intermediários. Com instrutores experientes, vídeos tutoriais e exercícios interativos, os alunos aprendem desde os fundamentos até técnicas avançadas, expandindo seu repertório e aprimorando suas habilidades musicais de forma eficaz e divertida.</p>
                </div>
                <div class="col-6">
                    <div class="row justify-content-center">
                        <div class="col-md-4 col-lg-3 text-center">
                            <img src="https://via.placeholder.com/100" alt="Professor Rodrigo Rocha" class="rounded-circle mb-2">
                            <h6 class="fw-bold">Rodrigo Rocha</h6>
                        </div>
                        <div class="col-md-4 col-lg-3 text-center">
                            <img src="https://via.placeholder.com/100" alt="Professor DELEO GT" class="rounded-circle mb-2">
                            <h6 class="fw-bold">DELEO GT</h6>
                        </div>
                        <div class="col-md-4 col-lg-3 text-center">
                            <img src="https://via.placeholder.com/100" alt="Professor Fábio Lima" class="rounded-circle mb-2">
                            <h6 class="fw-bold">Fábio Lima</h6>
                        </div>
                    </div>
                </div>
                <a href="#" class="btn btn-warning btn-lg p-2">Fazer Curso</a>
            </div>
        </div>

        <div class="card shadow-lg border-0 rounded-4 mb-3">
            <div class="card-header p-0">
                <img src="https://images.unsplash.com/photo-1529086261532-e7761dc62181?q=80&w=800&h=300&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" style="filter: brightness(0.7);" alt="Violão e Guitarra" class="img-fluid w-100">
                <div class="position-absolute top-50 start-50 translate-middle text-white text-center">
                    <h1 class="fw-bold">Teclado</h1>
                </div>
            </div>
            <div class="card-body row p-4">
                <div class="col-6">
                    <p class="mb-4 text-justify">O curso de violão e guitarra da plataforma Sound Makers oferece uma jornada prática e envolvente, ideal para iniciantes e intermediários. Com instrutores experientes, vídeos tutoriais e exercícios interativos, os alunos aprendem desde os fundamentos até técnicas avançadas, expandindo seu repertório e aprimorando suas habilidades musicais de forma eficaz e divertida.</p>
                </div>
                <div class="col-6">
                    <div class="row justify-content-center">
                        <div class="col-md-4 col-lg-3 text-center">
                            <img src="https://via.placeholder.com/100" alt="Professor Rodrigo Rocha" class="rounded-circle mb-2">
                            <h6 class="fw-bold">Rodrigo Rocha</h6>
                        </div>
                        <div class="col-md-4 col-lg-3 text-center">
                            <img src="https://via.placeholder.com/100" alt="Professor DELEO GT" class="rounded-circle mb-2">
                            <h6 class="fw-bold">DELEO GT</h6>
                        </div>
                        <div class="col-md-4 col-lg-3 text-center">
                            <img src="https://via.placeholder.com/100" alt="Professor Fábio Lima" class="rounded-circle mb-2">
                            <h6 class="fw-bold">Fábio Lima</h6>
                        </div>
                    </div>
                </div>
                <a href="#" class="btn btn-warning btn-lg p-2">Fazer Curso</a>
            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>