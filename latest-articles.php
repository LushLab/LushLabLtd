<?php
    // cURL Initialization
    $ch = curl_init();

    // Set cURL options
    curl_setopt($ch, CURLOPT_URL, 'https://public-api.wordpress.com/wp/v2/sites/lushlabblog.wordpress.com/posts?per_page=4');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // Execute cURL and get the response
    $response = curl_exec($ch);

    // Close cURL
    curl_close($ch);

    // Decode the JSON response
    $posts = json_decode($response);

    echo '<div class="container">';
    echo '<div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <h2 class="text-center">Latest blog and beauty articles</h2>
                <div class="spacer-md"></div>
                <p class="text-center">Providing usefull information and recommendations for  products for various skin conditions, general every day routines and protection and more.</p>
                <div class="spacer-lg"></div>
            </div> 
        </div>';
    echo '<div class="row">';

    foreach ($posts as $post) {
        // Get the featured image URL
        preg_match('/<img.+src=[\'"](?P<src>.+?)[\'"].*>/i', $post->content->rendered, $image);

        $image_url = (!empty($image['src'])) ? $image['src'] : 'PATH_TO_DEFAULT_IMAGE'; // replace PATH_TO_DEFAULT_IMAGE with default image URL
        echo '
            <div class="col-sm-12 col-md-6 col-lg-3">
                <div class="post-card">
                    <div class="featured-image">
                        <a href="single.php?id='.$post->id.'">
                        <img src="'.$image_url.'" class="card-img-top" alt="'.$post->title->rendered.'">
                        </a>
                    </div>
                    <div class="spacer-sm"></div>
                    <div class="card-body">
                        <a href="single.php?id='.$post->id.'">
                        <h5 class="card-title">'.$post->title->rendered.'</h5>
                        </a>
                        <div class="spacer-xs"></div>
                        <p class="card-text">'.substr(strip_tags($post->content->rendered), 0, 100).'...</p>
                        <div class="spacer-default"></div>
                        <a href="single.php?id='.$post->id.'" class="button-secondary">Read More</a>
                    </div>
                </div>
                </a>
            </div>
        ';
    }

    echo '</div>';
    echo '</div>';
?>
