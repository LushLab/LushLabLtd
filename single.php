<?php
// Check if post_id is set in GET parameters
if (isset($_GET['post_id'])) {
    $post_id = intval($_GET['post_id']); // Get the post_id and ensure it's an integer for security

    // Fetch the specific post data
    $api_url = "https://lushlabblog.wordpress.com/wp-json/wp/v2/posts/" . $post_id;
    $json = file_get_contents($api_url);
    $post = json_decode($json);

    // Now set the title
    $page_title = 'LushLab: ' . $post->title->rendered;
} else {
    // No post_id given, set a default title
    $page_title = 'LushLab Blog Post';
}

include 'header.php';
?>


<?php
    // Get the id from the URL
    if(!isset($_GET['id'])) {
        die("No post ID provided");
    }

    $postId = $_GET['id'];  

    // cURL Initialization
    $ch = curl_init();

    // Set cURL options
    curl_setopt($ch, CURLOPT_URL, 'https://public-api.wordpress.com/wp/v2/sites/lushlabblog.wordpress.com/posts/' . $postId);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // Execute cURL and get the response
    $response = curl_exec($ch);
    
    // Check for cURL errors
    if(curl_errno($ch)){
        die("cURL fetch failed: " . curl_error($ch));
    }

    // Close cURL
    curl_close($ch);

    // Decode the JSON response
    $post = json_decode($response);

    // Check if the post was fetched successfully
    if(isset($post->code) && $post->code === 'rest_no_route'){
        die("Invalid post ID");
    }

    // Get the featured image URL
    preg_match('/<img.+src=[\'"](?P<src>.+?)[\'"].*>/i', $post->content->rendered, $image);
    $image_url = (!empty($image['src'])) ? $image['src'] : 'PATH_TO_DEFAULT_IMAGE'; // replace PATH_TO_DEFAULT_IMAGE with default image URL

    echo '
        <div class="post-content">
            <div class="container">
                <div class="row">
                    <h1>'.$post->title->rendered.'</h1>
                    <div class="col-sm-12 col-md-12 col-lg-12">'.$post->content->rendered.'
                    </div>
                </div>
            </div>
        </div>
    ';
?>


<!-- footer -->
<?php include 'footer.php'; ?>