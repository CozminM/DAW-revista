<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous" defer></script>
    <title>Revista DAW - Index</title>
</head>

<body id="page-top">
    <!-- Navbar -->
    <nav class="navbar navbar-dark navbar-expand-lg bg-dark static-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Revista</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled">Disabled</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Content -->
    <div class="container text-center pt-5 pb-5">
        <div class="row row-cols-3 g-4">
            <?php
            $api_url = 'https://newsapi.org/v2/top-headlines?country=ro&apiKey=8117bcf50a544891b4c556175a62282b';
            $json_data = file_get_contents($api_url);
            $response_data = json_decode($json_data);
            $news_data = $response_data->articles;
            $news_data = array_slice($news_data, 0, 20);

            foreach ($news_data as $news) {
                echo '<div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">'.$news->title.'</h5>
                                <h6 class="card-subtitle mb-2 text-muted">'.$news->author.'</h6>
                                <p class="card-text">'.$news->description.'</p>
                                <a href="'.$news->url.'" class="card-link">Go to story</a>
                                <a href="#" class="card-link">Another link</a>
                            </div>
                        </div>
                    </div>';
            }
            ?>
        </div>
    </div>
    <!-- Footer -->
    <footer class="bg-dark text-center text-lg-start static-bottom">
        <!-- Grid container -->
        <div class="container text-light p-4 pb-0">
            <form action="">
                <!--Grid row-->
                <div class="row">
                    <!--Grid column-->
                    <div class="col-auto mb-4 mb-md-0">
                        <p class="pt-2">
                            <strong>Sign up for our newsletter</strong>
                        </p>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-5 col-12 mb-4 mb-md-0">
                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <input type="email" id="form5Example25" class="form-control" />
                            <label class="form-label" for="form5Example25">Email address</label>
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-auto mb-4 mb-md-0">
                        <!-- Submit button -->
                        <button type="submit" class="btn btn-primary mb-4">
                            Subscribe
                        </button>
                    </div>
                    <!--Grid column-->
                </div>
                <!--Grid row-->
            </form>
        </div>
        <!-- Grid container -->
    </footer>
</body>

</html>