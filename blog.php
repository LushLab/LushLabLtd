<?php
$page_title = 'Lush Lab Blog';
include 'header.php';
?>
<div class="spacer-xxl"></div>
<div class="spacer-lg"></div>
<?php
// Get the current page from the URL parameters, default to 1
$current_page = isset($_GET['page']) ? intval($_GET['page']) : 1;

// The base URL for your WordPress API endpoint
$base_url = 'https://public-api.wordpress.com/wp/v2/sites/lushlabblog.wordpress.com/posts';

// Calculate the offset for the posts (pagination)
$offset = ($current_page - 1) * 12;

// Fetch the posts for the current page
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $base_url . '?per_page=12&page=' . $current_page);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);
$posts = json_decode($response);

// Fetch total number of posts
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $base_url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);
$total_posts = count(json_decode($response));

// Calculate total number of pages
$total_pages = ceil($total_posts / 12);

echo '<div class="container">';
echo '<div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <h2 class="text-center">Latest blog and beauty articles</h2>
                <div class="spacer-md"></div>
                <p class="text-center">Providing useful information and recommendations for  products for various skin conditions, general every day routines and protection and more.</p>
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

// Display numbered pagination at the bottom
echo '<div class="pagination">';
for ($i = 1; $i <= $total_pages; $i++) {
    if ($i == $current_page) {
        echo '<span class="current-page">' . $i . '</span>';
    } else {
        echo '<a href="?page=' . $i . '">' . $i . '</a>';
    }
}
echo '</div>';
echo '</div>'; // closes the div for the container
?>



<!-- footer -->
<?php include 'footer.php'; ?>