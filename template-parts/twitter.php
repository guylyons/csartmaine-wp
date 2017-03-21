<article class="recent-tweets">
    <h4 class="title">Recent Tweets</h4>
    <?php $tweets = getTweets(); ?>
    <?php
    if( $tweets ) {
        $count = 0;
        echo '<ul class="tweets">';
        foreach( $tweets as $tweet ) {
            $created_at = strtotime( $tweet['created_at'] );
            $date       = date( 'm/d/y ', $created_at );
            $count++;
            if ( $count >= 4 ) {
                break;
            } else {
                echo '<li>';
                echo '<a target="_blank" href="http://www.twitter.com/csartmaine">@csartmaine</a> ';
                echo $tweet['text'];
                echo '<div>' . $date . '</div>';
                echo '</li>';
            }
        }
        echo '</ul>';
    }
    ?>
</article>
