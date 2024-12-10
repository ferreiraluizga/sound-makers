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

    <div class="offcanvas offcanvas-start text-bg-dark" data-bs-scroll="true" tabindex="-1" id="nav_offcanvas"
        aria-labelledby="offcanvasWithBothOptionsLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Backdrop with scrolling</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <p>Try scrolling the rest of the page to see this option in action.</p>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg bg-dark pb-0 pt-3" data-bs-theme="dark">
        <div class="container justify-content-center">
            <a class="navbar-brand" href="#">
                <img src="assets/svg/website_logo.svg" alt="website_logo" data-bs-toggle="offcanvas"
                    data-bs-target="#nav_offcanvas" aria-controls="nav_offcanvas">
            </a>
        </div>
    </nav>
    
    <section id="hero" class="d-flex justify-content-start align-items-end mt-0 p-5 mb-5">
        <div class="text-start px-3 py-5">
            <img src="assets/svg/hero_logo.svg" alt="website_logo" class="mb-4">
            <h3 class="text-white fw-semibold">a música pulsa e vive em cada nota, em cada acorde, <br> transformando aprendizado em
                verdadeira harmonia.</h3>
        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>