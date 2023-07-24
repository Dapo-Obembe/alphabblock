<?php
/**
 * Music Player Block Template.
 */

// Support custom "anchor" values.
$id = 'music-player-container' . $block['id'];

if ( ! empty( $block['anchor'] ) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'music-player-container';
if ( ! empty( $block['class_name'] ) ) {
    $class_name .= ' ' . $block['class_name'];
}
if ( ! empty( $block['align'] ) ) {
    $class_name .= ' align' . $block['align'];
}

// Load values and assign defaults.
$image              = get_field('image');
$song_title         = get_field('song_title');
$artistes           = get_field('artistes');
$audio_file         = get_field('music_file');

?>

<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($class_name); ?>">
     <div class="artwork">
        <?php echo wp_get_attachment_image( $image['id'], 'full'); ?>
    </div>
    <div class="music-details">
          <?php if( !empty($song_title) ){?>
               <h3 class="music-title"><?php echo $song_title; ?></h3>
          <?php } ?>

          <?php if( !empty($artistes) ) {?>
               <p><?php echo $artistes; ?></p>
          <?php } ?>

          <?php if( !empty($audio_file) ) {?>
               <audio controls loop src="<?php echo $audio_file['url']; ?>" type="audio/mpeg"></audio>
          <?php } ?>
          <a href="<?php echo $audio_file['url']; ?>"class="download-link" download>DOWNLOAD <img src="https://www.alphawebtips.com/wp-content/uploads/2023/05/download_arrow.gif" alt="download arrow" width="30" height="30" /></a>
    </div>
</div>
