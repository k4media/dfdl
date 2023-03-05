<?php
/**
 * The template for Team Members
 */
 get_header();
            
    /**
     * All Members
     */
    $args = array(
        'number'    => -1,
        'role__in ' => array('contributor', 'author', 'editor', 'admin', 'dfdl_member'),
        'meta_key'  => '_dfdl_member_rank',
        'orderby'   => array( '_dfdl_member_rank' => 'ASC', 'user_nicename' => 'ASC' )
    );

    // The Query
    $user_query = new WP_User_Query($args);

?>
<div id="team-all" >
    <?php do_action("dfdl_solutions_country_nav"); ?>
    <div id="results_stage" class="team-stage silo">
        <div>
            <?php
                // The Loop
                if ( ! empty( $user_query->get_results() ) ) {
                    foreach ( $user_query->get_results() as $user ) {
                        set_query_var("user", $user);
                        get_template_part( 'includes/template-parts/content/member' );
                    }
                } else {
                    echo 'No users found.';
                }
            ?>
        </div>
    </div>
</div>

<?php
    /**
     * Show reusable "contact" block, ID 50588
     */
     do_action("dfdl_reusable_block", 50588);
?>

<?php get_footer();