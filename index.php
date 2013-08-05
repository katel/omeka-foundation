<?php
head();
?>


<?php
echo head(array(
    'bodyid' => 'home',
    'bodyclass' => 'two-col'
));
?>
<div id="primary">
    <?php
if ($homepageText = get_theme_option('Homepage Text')):
?>
    <p><?php
    echo $homepageText;
?></p>
    <?php
endif;
?>


    <?php
if ((get_theme_option('Display Featured Exhibit')) && function_exists('exhibit_builder_display_random_featured_exhibit')):
?>
    <!-- Featured Exhibit -->
    <?php
    echo exhibit_builder_display_random_featured_exhibit();

?>
    <?php
endif;
?>

</div>
<!-- Featured Collection -->
<div class="row">
<div class="large-12 columns">

			<div id="featured" class="panel">

	<?php
if (get_theme_option('Display Featured Collection')):
?>

	<div id="featured-collection" >
<?php
    echo random_featured_collection();
?>

	</div>
	
	</div>
	

	</div>

<?php
endif;
?>
	<!-- end featured collection -->

<!-- Featured Item -->

<?php
if (get_theme_option('Display Featured Item') == 1):
?>

</div>

<div class="row">
  <div id="featured-items" class="small-12 large-6 columns">
		      <h2><?php
		echo __('Featured Item');
		?></h2>

	<?php
    echo random_featured_items(1);
?>
</div>


<?php
endif;
?>
<!--end featured-item-->

<!-- Recent Items -->
<div id="recent-items" class="small-12 large-6 columns">
	<!-- Recent Items -->		
  <div id="recent-items">
      <h2><?php
echo __('Recently Added Items');
?></h2>
      <?php
$homepageRecentItems = (int) get_theme_option('Homepage Recent Items') ? get_theme_option('Homepage Recent Items') : '3';
set_loop_records('items', get_recent_items($homepageRecentItems));
if (has_loop_records('items')):
?>
      <ul class="items-list">
      <?php
    foreach (loop('items') as $item):
?>
      <li class="item">
          <h3><?php
        echo link_to_item();
?></h3>
          <?php
        if ($itemDescription = metadata('item', array(
            'Dublin Core',
            'Description'
        ), array(
            'snippet' => 150
        ))):
?>
              <p class="item-description"><?php
            echo $itemDescription;
?></p>
          <?php
        endif;
?>						
      </li>
      <?php
    endforeach;
?>
      </ul>
      <?php
else:
?>
      <p><?php
    echo __('No recent items available.');
?></p>
      <?php
endif;
?>
      <p class="view-items-link"><?php
echo link_to_items_browse(__('View All Items'));
?></p>
</div>
</div>
<!-- end recent-items -->

	</div>
	<!-- Featured Exhibit -->
	
	<div class="row">


    <?php
if ((get_theme_option('Display Featured Exhibit')) && function_exists('exhibit_builder_random_featured_exhibit')):
?>
</div>


 <?php
    echo exhibit_builder_display_featured_exhibit();
?>
  <?php
endif;
?>


</div><!-- end primary -->


<footer>
<?php
echo foot();
?></footer>
