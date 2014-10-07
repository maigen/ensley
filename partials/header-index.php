      <div class="row collapse" id="banner-image">
        <div class="banner-row"><h1><?php
        $post_id = 18;
        $queried_post = get_post($post_id);
        echo $queried_post->post_content;
        ?></h1></div>
        <div class="banner-row"><h3><?php
        $post_id = 15;
        $queried_post = get_post($post_id);
        echo $queried_post->post_content;
        ?></h3></div>
      </div>
      <div class="small-12 columns" id="video-button-row">
        <div class="small-6 columns" id="video">
          <iframe src="//player.vimeo.com/video/48914510?title=0&amp;byline=0&amp;portrait=0&amp;color=e6c973" width="400" height="200" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
        </div>
        <div class="small-6 columns" id="things">
          <a href="/login"><div class="button-patient-login">Current Patient? Login here</div></a>
          <a href="/new"><div class="button-new-patient">Schedule a FREE consultation</div></a>
        </div>
      </div>