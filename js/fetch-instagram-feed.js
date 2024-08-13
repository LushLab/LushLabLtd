const axios = require('axios');
const fs = require('fs');

const accessToken = process.env.INSTAGRAM_ACCESS_TOKEN;
const numberOfPosts = 5;

(async () => {
  try {
    const response = await axios.get(`https://graph.instagram.com/me/media?fields=id,caption,media_type,media_url,thumbnail_url,permalink&access_token=${accessToken}`);
    const data = response.data;
    const posts = data.data.slice(0, numberOfPosts);

    fs.writeFileSync('instagram-feed.json', JSON.stringify(posts, null, 2));
    console.log('Instagram feed fetched and saved to instagram-feed.json');
  } catch (error) {
    console.error('Error fetching Instagram feed:', error);
  }
})();
