<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./static/home.css">
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic"
        rel="stylesheet" type="text/css" />
    <title>Wildy-graphy</title>
    <link rel="icon" href="../front-end/media/favicon.ico">
</head>
<style>
    * {
        font-family: 'Sofia';
    }
</style>
<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
    crossorigin="anonymous">
    </script>

<body>
    <button onclick="topFunction()" id="button" title="Go to top">^</button>
    <!-- NavBar -->
    <nav class="navbar navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand text-white" href="/web-project/app/front-end/index.html">Wildy-graphy</a>
            <div>
                <img class="bg-white rounded-pill img-fluid" src="../front-end/media/21440194611594721608.svg">
                <p class="text-white mb-0">
                    <?php echo 'Hi, '; ?> <?php echo $_GET['username'] ?>
                </p>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar"
                aria-labelledby="offcanvasDarkNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Navigation Bar</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body d-flex flex-column justify-content-evenly">
                    <form class="d-flex mt-3" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-light" type="submit">Search</button>
                    </form>
                    <ul class="navbar-nav justify-content-start flex-grow-1 pe-3 mt-5">
                        <li class="nav-item p-3">
                            <a class="nav-link active" aria-current="page"
                                href="/web-project/app/Back-end/logIn_home.php">Home</a>
                        </li>
                        <li class="nav-item p-3">
                            <a class="nav-link active" aria-current="page"
                                href="/web-project/app/front-end/gallery.html">Gallery</a>
                        </li>
                        <li class="nav-item p-3">
                            <a class="btn btn-primary" aria -current="page"
                                href="/web-project/app/Back-end/logIn.php">LogIn /
                                SignUp</a>
                        </li>
                    </ul>
                    <div class="small text-center text-light">Copyright &copy; 2021 - Wildy-graphy</div>
                </div>
            </div>
        </div>
    </nav>
    <!-- Main Content -->
    <div class="container mt-5 pt-5 text-center">
        <div class="p-4 p-md-5 mb-4 rounded text-bg-dark">
            <div class="col-md-12 px-0">
                <h1 class="display-4 fst-italic">
                    About Us
                </h1>
                <p class="lead my-3 fst-italic">
                    At our wildlife website, we are dedicated to educating and inspiring people about the natural world
                    and the animals that
                    inhabit it. We believe that by providing accurate and engaging information, we can help people
                    understand and appreciate
                    the importance of protecting and preserving these amazing creatures and their habitats. Our team of
                    experts includes
                    biologists, ecologists, and conservationists who work tirelessly to provide the most up-to-date and
                    accurate information
                    about a wide variety of species. We also feature stunning photographs and videos that bring the wild
                    right to your screen.
                </p>
            </div>
        </div>
        <!-- Carousel wrapper -->
        <div id="carouselFade" class="carousel slide carousel-fade">
            <h1 class="display-4 fst-italic">Live Video</h1>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <video class="img-fluid" autoplay loop muted>
                        <source src="./media/Aerial Video Of Coastline.mp4" type="video/mp4" />
                    </video>
                </div>
                <div class="carousel-item">
                    <video class="img-fluid" autoplay loop muted>
                        <source src="./media/Pexels Videos 2098989.mp4" type="video/mp4" />
                    </video>
                </div>
                <div class="carousel-item">
                    <video class="img-fluid" autoplay loop muted>
                        <source src="./media/Time Lapse Video Of Night Sky.mp4" type="video/mp4" />
                    </video>
                </div>
                <div class="carousel-item">
                    <video class="img-fluid" autoplay loop muted>
                        <source src="./media/Pexels Videos 2558530.mp4" type="video/mp4" />
                    </video>
                </div>
                <div class="carousel-item">
                    <video class="img-fluid" autoplay loop muted>
                        <source src="./media/pexels-joshua-6739273.mp4" type="video/mp4" />
                    </video>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselFade" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselFade" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="mt-5 pt-5 text-center">
            <h1 class="display-4 fst-italic">Featured Species</h1>
            <!-- elephant -->
            <div class="row row-cols-2 justify-content-evenly my-4 py-4">
                <img src="../front-end/media/pexels-pixabay-247431.jpg" alt="elephant" class="col rounded-4 m-3"
                    id="images">
                <p class="col align-self-end pe-5">" Elephants are the largest land mammals on earth and have
                    distinctly
                    massive
                    bodies, large ears, and
                    long
                    trunks. They
                    use their trunks to pick up objects, trumpet warnings, greet other elephants, or suck up water for
                    drinking or bathing,
                    among other uses. Both male and female African elephants grow tusks and each individual can either
                    be
                    left- or
                    right-tusked, and the one they use more is usually smaller because of wear and tear. Elephant tusks
                    serve many purposes. "</p>
            </div>
            <!-- lion -->
            <div class="row row-cols-2 justify-content-evenly my-4 py-4 d-md-flex flex-row-reverse">
                <img src="../front-end/media/pexels-alexas-fotos-2220336.jpg" alt="elephant" class="col rounded-4 m-3"
                    id="images">
                <p class="col align-self-end pe-5">" The lion is a well-muscled cat with a long body, large head, and
                    short
                    legs. Size and appearance vary considerably
                    between the sexes. The male’s outstanding characteristic is his mane, which varies between different
                    individuals and
                    populations. It may be entirely lacking; it may fringe the face; or it may be full and shaggy,
                    covering
                    the back of the
                    head, neck, and shoulders and continuing onto the throat and chest to join a fringe along the belly.
                    In
                    some lions the
                    mane and fringe are very dark, almost black, giving the cat a majestic appearance. Manes make males
                    look
                    larger and may
                    serve to intimidate rivals or impress prospective mates. A full-grown male is about 1.8–2.1 metres
                    (6–7
                    feet) long,
                    excluding the 1-metre tail; he stands about 1.2 metres high at the shoulder and weighs 170–230 kg
                    (370–500 pounds). The
                    female, or lioness, is smaller, with a body length of 1.5 metres, a shoulder height of 0.9–1.1
                    metres,
                    and a weight of
                    120–180 kg. The lion’s coat is short and varies in color from buff yellow, orange-brown, or silvery
                    gray to dark brown,
                    with a tuft on the tail tip that is usually darker than the rest of the coat. "</p>
            </div>
            <!-- turtle -->
            <div class="row row-cols-2 justify-content-evenly my-4 py-4">
                <img src="../front-end/media/pexels-jeremy-bishop-2765872.jpg" alt="elephant" class="col rounded-4 m-3"
                    id="images">
                <p class="col align-self-end pe-5">" Turtles are fascinating pets to own, but they are sensitive animals
                    so
                    it is important to learn how to care for them
                    before getting one. Space, light, moisture and food are all important for survival. Understanding
                    these
                    aspects of your
                    pet’s care will help your turtle live a long life."</p>
            </div>
            <!-- Gorilla's -->
            <div class="row row-cols-2 justify-content-evenly my-4 py-4 d-md-flex flex-row-reverse">
                <img src="../front-end/media/pexels-julia-filirovska-7190227.jpg" alt="elephant"
                    class="col rounded-4 m-3" id="images">
                <p class="col align-self-end pe-5">" Gorillas are gentle giants and display many human-like behaviors
                    and
                    emotions, such as laughter and sadness. In fact,
                    gorillas share 98.3% of their genetic code with humans, making them our closest cousins after
                    chimpanzees and bonobos.
                    The largest of the great apes, gorillas are stocky animals with broad chests and shoulders, large,
                    human-like hands, and
                    small eyes set into hairless faces. The two gorilla species live in equatorial Africa, separated by
                    about 560 miles of
                    Congo Basin forest. Each has a lowland and upland subspecies. Gorillas live in family groups of
                    usually
                    five to 10, but
                    sometimes two to more than 50, led by a dominant adult male—or silverback—who holds his position for
                    years. The bond
                    between the silverback and his females forms the basis of gorilla social life. Females become
                    sexually
                    mature around
                    seven or eight years old but don’t begin to breed until a couple of years later. Males mature at an
                    even
                    greater age."
                </p>
            </div>
            <!-- mountains -->
            <div class="row row-cols-2 justify-content-evenly my-4 py-4">
                <img src="../front-end/media/pexels-eberhard-grossgasteiger-691668.jpg" alt="elephant"
                    class="col rounded-4 m-3" id="images">
                <p class="col align-self-end pe-5">" mountain, landform that rises prominently above its surroundings,
                    generally exhibiting steep slopes, a relatively
                    confined summit area, and considerable local relief. Mountains generally are understood to be larger
                    than hills, but the
                    term has no standardized geological meaning. Very rarely do mountains occur individually. In most
                    cases,
                    they are found
                    in elongated ranges or chains. When an array of such ranges is linked together, it constitutes a
                    mountain belt. For a
                    list of selected mountains of the world, see below."</p>
            </div>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/db659913a6.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.js"
        integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous">
        </script>

    <script>
        // Get the button
        let mybutton = document.getElementById("button");
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () { scrollFunction() };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
        }
        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
</body>

</html>