<?php
/**
 * Alpha Block Template.
 */

// Support custom "anchor" values.
$id = 'alpha-block' . $block['id'];

if ( ! empty( $block['anchor'] ) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'alpha-block';
if ( ! empty( $block['class_name'] ) ) {
    $class_name .= ' ' . $block['class_name'];
}
if ( ! empty( $block['align'] ) ) {
    $class_name .= ' align' . $block['align'];
}

// Load values and assign defaults.
$daytime            = get_field('daytime');
$image              = get_field('image');
$activities_title   = get_field('days_activity_title');
$services           = get_field('available_service');
$am_description     = get_field('am_description');
$pm_description     = get_field('pm_description');
$overnight          = get_field('overnight');

?>

<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($class_name); ?>">
    <div>
        <span class="day"><?php echo esc_attr($daytime); ?></span>
    </div>
    <div class="img">
        <?php echo wp_get_attachment_image( $image['id'] ); ?>
    </div>
    <div class="content-info">
        <?php if(!empty($activities_title)){?>
            <p class="title"><?php echo esc_attr($activities_title);?></p>
        <?php }?>

        <?php if(!empty($am_description)) {?>
                <p><strong>AM/ </strong><?php echo esc_attr($am_description); ?></p>
        <?php } ?>
        
        <?php if(!empty($pm_description)) {?>
                <p><strong>PM/ </strong><?php echo esc_attr($pm_description); ?></p>
        <?php }?>
        
        <?php if(!empty($overnight)){?>
                <p><strong>overnight/ </strong><?php echo esc_attr($overnight); ?></p>
        <?php }?>

    </div>
    <div class="services-info">
        <?php 
            if($services['breakfast'] == 1) {
                $bclass = 'available';
            } else{
                $bclass = 'unavailable';
            }

            if($services['lunch'] == 1) {
                $lclass = 'available';
            } else{
                $lclass = 'unavailable';
            }

            if($services['dinner'] == 1) {
                $dclass = 'available';
            } else{
                $dclass = 'unavailable';
            }
        ?>

        <p>Breakfast<span class="<?php echo $bclass; ?>"></span></p>
        <p>Lunch<span class="<?php echo $lclass; ?>"></span></p>
        <p>Dinner<span class="<?php echo $dclass; ?>"></span></p>
    </div>
</div>