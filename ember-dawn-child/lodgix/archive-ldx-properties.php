<?php
/**
 * Property archive template override
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $wp_query;

if(isset($wp_query->query['paged']) && !empty($wp_query->query['paged'])){
    $page = $wp_query->query['paged'];
} else {
    $page = 1;
}

$postCount = array(
    'totalCount' => $wp_query->found_posts,
    'ppp' => 21,
    'displayCount' => $wp_query->post_count,
    'page' => $page
);

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<?php block_template_part('header'); ?>

<main class="wp-block-group">

<h1 class="ldx-sr-only"><?php the_archive_title(); ?></h1>

<div id="ldx-outter-main" class="<?php echo esc_html(ldx_public_class()); ?>">

    <?php do_action( 'ldx-before-properties', $postCount); ?>

    <div id="ldxMain" class="ldx-mb-12 ldx-min-h-[100vh] ldx-flex md:ldx-flex-row ldx-flex-col ldx-px-4 ldx-gap-4" data-ldx-toggler="ldx-map-toggled">
        
        <?php if( have_posts() ) { ?>

            <?php do_action( 'ldx-before-loop-content', $postCount ); ?>

                    <?php while ( have_posts() ) {
                        the_post();
                        $item = get_the_id();
                        $meta = get_post_custom( $item );
                    ?>

                        <?php do_action( 'ldx-loop-content', $item, $meta ); ?>

                    <?php } ?>

                </div>

            </div>
        
        <?php } else { ?>

            <?php lodgix_no_results(); ?>

        <?php } ?>

    </div>

    <?php do_action( 'ldx-after-loop-content' ); ?>

</div>

</main>

<?php block_template_part('footer'); ?>

<?php wp_footer(); ?>
</body>
</html>
