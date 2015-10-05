<?php
  // Do not delete these lines
  if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
      die('Please do not load this page directly. Thanks!');
  
  if (post_password_required()) {
?>
    <p class="nocomments">This post is password protected. Enter the password to view comments.</p>
  <?php
      return;
  }
?>

<!-- You can start editing here. -->
	<?php if (have_comments()) : ?>
<section class="commentlist">	
	<h3 id="comments"><?php comments_number('No comments', '1 comment', '% comments'); ?></h3>
	<ol class="commentlist">
		<?php wp_list_comments();?>
	</ol>
	<div class="navigation">
		<div class="alignleft"><span><?php previous_comments_link() ?></span></div>
		<div class="alignright"><span><?php next_comments_link() ?></span></div>
	</div>
</section>
		<?php else
		    : // this is displayed if there are no comments so far 
		?>
		  	<?php
		      if ('open' == $post->comment_status)
		          :
			?>
		  	<!-- If comments are open, but there are no comments. -->
		  	<?php
		        else
		          : // comments are closed 
			?>
		  	<!-- If comments are closed. -->
		  	<p class="contain closed"><span class="icon">&#128683;</span>Comments are closed.</p>
		  	<?php endif; ?>
	<?php endif; ?>

<?php if ('open' == $post->comment_status) : ?>

<div id="respond">
		<h3 id="respond-title">
			<span class="hook">
				<?php comment_form_title('Leave a comment', 'Leave a reply to %s');?> 
				<span class="cancel-comment-reply">
				<?php cancel_comment_reply_link('<span class="icon">&#10060;</span>Cancel');?></span>
			</span>
		</h3>
	<?php if (get_option('comment_registration') && !$user_ID) : ?>
		<p class="contain"> You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink());?>">logged in</a> to post a comment.</p>
	<?php else : ?>

		<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
		<?php if ($user_ID) : ?>
			<p class="contain">Logged in as <strong><a class="user" href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a></strong>&nbsp;(<a "user" href="<?php echo wp_logout_url(get_permalink()); ?>" title="Log out of this account" class="small"><strong>log out</strong></a>)</p>
		
		<?php else : ?>
			<p class="contain">
			<label for="author">Name <?php if ($req) echo "<br />(<em>required</em>)"; ?></label>
				<input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" tabindex="1" <?php if ($req)
		      echo "aria-required='true'"; ?> />
			</p>
			
			<p class="contain">
			<label for="email">Email <?php if ($req) echo "<br />(<em>required</em>)"; ?></label>
				<input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?> />
			</p>
						
			<p class="contain">
			<label for="url">Website</label>
			<input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" tabindex="3" />
		<?php endif; ?>		
			</p>
			
			<p class="contain">
			<label for="comment">Comment</label>
			<textarea name="comment" id="comment" tabindex="4"></textarea>
			</p>
			<input name="submit" class="button" type="submit" id="submit" tabindex="5" value="Submit Comment" />
		<?php comment_id_fields(); ?>
		
		<?php do_action('comment_form', $post->ID); ?>
		</form>
<?php
  endif;
  // If registration required and not logged in 
?>
</div>
<?php
  endif;
  // if you delete this the sky will fall on your head 
?>
