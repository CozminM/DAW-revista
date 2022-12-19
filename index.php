<?php include 'templates/header.php' ?>

<!-- Content -->
<div class="container text-center pt-5 pb-5">
    <div class="row row-cols-3 g-4">
        <?php

        function getNews($search_term = "")
        {
            $api_url = 'https://newsapi.org/v2/top-headlines?country=ro&q=' . $search_term . '&apiKey=8117bcf50a544891b4c556175a62282b';
            $json_data = file_get_contents($api_url);
            $response_data = json_decode($json_data);
            $news_data = $response_data->articles;
            $news_data = array_slice($news_data, 0, 20);

            foreach ($news_data as $news) {
                echo '<div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">' . $news->title . '</h5>
                                <h6 class="card-subtitle mb-2 text-muted">' . $news->author . '</h6>
                                <p class="card-text">' . $news->description . '</p>
                                <a href="' . $news->url . '" class="card-link">Go to story</a>
                                <a href="#" class="card-link">Another link</a>
                            </div>
                        </div>
                    </div>';
            }
        }

        getNews($_GET['search']);
        ?>
    </div>
</div>

<?php include 'templates/footer.php' ?>

</body>

</html>