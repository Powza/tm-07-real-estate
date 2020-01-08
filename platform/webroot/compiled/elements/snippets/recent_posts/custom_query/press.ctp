<?php
/*
** fields are already pre included, there is no reason to add them to the snippet
** since the important available blog fields will be usable.
** title, slug, body, active (bool), allow_comments (bool), start_date (), is_bloglister (bool), featured_image,
** visibility (public, private), created (datetime), modified (datetime)
*/

// query conditions
$blog_cond['conditions'] = array();

// you need the id of the blog category id, you can get it in the backend
// one blog category
$blog_cond['conditions']['BlogCategory.id'] = '5db9898f-45bc-432f-ad54-10ab43e19366';

// multiple blog categories
/*$blog_cond['conditions']['BlogCategory.id'] = array(
    '48800c79-21d4-41fb-98d2-0d1c96e92e70',
    '4eba948f-1fc0-41c0-9e1b-2f34ae79a992'
);*/

// additional blog conditions
$blog_cond['conditions']['Blog.is_bloglister'] = 0;

/*
** hard limit is 50
** recommend ~25ish for speed since it's just supposed to show recently posted blogs.
*/
$limit = 5;

$recent_blogs = $this->requestAction('/snippets/recent_posts_custom_query', array(
  'named' => $blog_cond,
  'limit' => $limit,
));

if(isset($recent_blogs) && !empty($recent_blogs)) {
    App::import('Helper', array(/*'Text',*/'Time'));
    $time = new TimeHelper;

    // uncomment this if using the truncate function below. Don't forget to uncomment the 'Text' in the App::import above
    //$text = new TextHelper;

    foreach($recent_blogs as $recent_blog) {

        // example blog category title and link output
        $postCategory = '<a href="/post_category/view/'.$recent_blog['BlogCategory']['slug'].'"><small>('.$recent_blog['BlogCategory']['title'].')</small></a>';

        // example blog posted by output
        /*
        $postedBy = trim($recent_blog['User']['firstname'].' '.$recent_blog['User']['lastname']);
        if(!empty($postedBy)) {
            echo '<span>Posted by <strong>'.$postedBy.'</strong></span>';
        }
        */

        // example truncated body
        /*
        ** NOTE: I would not recommend using the $recent_blog['Blog']['body'] unless you truncate.
        ** example body truncate code (as used on the index, but it's still too much text for a snippet probably...).
        ** If you use it, I suggest changing the 700 to something like 150 or so in the below example.
        ** $blog_body = $text->truncate(strip_tags($recent_blog['Blog']['body'], '<p><a><div><img><h1><h2><h3><h4><h5><h6><span><ul><ol><li><strong><em><b><i><br><br /><table><tr><td><th><iframe>'), 700, '...', true, true);
        */

        // default output like recent_posts snippet with category addition.
        echo '<p>';
    	echo '<a href="'.$html->url(array('controller' => 'blogs', 'action' => 'view', 'slug' => $recent_blog['Blog']['slug'])).'"><strong>'.$recent_blog['Blog']['title'].'</strong></a> ';
        echo $postCategory.'<br />';
        echo '<small>'.$time->friendlyDate($recent_blog['Blog']['start_date']).'</small><br />';
    	echo '</p>';
        ?>

        <?php if(!empty($recent_blog['Blog']['featured_image'])) { ?>
            <div class="blog-thumbnail">
                <a href="<?php echo $blog_url; ?>">
                    <img class="blog-featured-image" alt="<?php echo $recent_blog['Blog']['title']; ?>" src="<?php echo $recent_blog['Blog']['featured_image']; ?>" />
                </a>
            </div>
        <?php } ?>

        <?php

    }
    echo '<p align="right"><a href="/blog.html">More Posts</a></p>';
}
?>