<?php include 'header.php'; ?>
    <div class="spacer-xxl"></div>
  <div id="gallery"></div>

  <script>
    // Instagram API Credentials
    const accessToken = '<?php echo $accessToken; ?>';
    const userID = '<?php echo $userID; ?>';
    
    // Fetch Instagram posts
    fetch(`https://graph.instagram.com/<?php echo $userID; ?>/media?fields=id,caption,media_type,media_url,permalink&access_token=<?php echo $accessToken; ?>`)
      .then(response => response.json())
      .then(data => {
        console.log('Received Instagram data:', data);

        const galleryContainer = document.getElementById('gallery');
        const posts = data.data;

        posts.slice(0, 4).forEach(post => {
          const card = document.createElement('div');
          card.classList.add('card');

          const cardImage = document.createElement('img');
          cardImage.src = post.media_url;
          cardImage.alt = post.caption;
          card.appendChild(cardImage);

          const cardBody = document.createElement('div');
          cardBody.classList.add('card-body');

          const cardTitle = document.createElement('h5');
          cardTitle.classList.add('card-title');
          cardTitle.textContent = post.caption;
          cardBody.appendChild(cardTitle);

          const cardLink = document.createElement('a');
          cardLink.href = post.permalink;
          cardLink.classList.add('btn', 'btn-primary');
          cardLink.textContent = 'View on Instagram';
          cardBody.appendChild(cardLink);

          card.appendChild(cardBody);
          galleryContainer.appendChild(card);
        });
      })
      .catch(error => console.error('Error fetching Instagram data:', error));
  </script>
<?php include 'footer.php'; ?>