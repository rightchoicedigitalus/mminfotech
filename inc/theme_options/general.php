<?php

?>
<div id="general">
    <div class="container">
        <div class="card">
            <h1>General</h1>
            <h2>Service Section</h2>

            <form action="options.php" method="post">
                <?php wp_nonce_field('update-options'); ?>
                <input type="text" name="section_name" placeholder="Enter your section name" value="<?php echo get_option('section_name'); ?>">

                <input type="text" name="section_sub_title" placeholder="Enter section sub-title" value="<?php echo get_option('section_sub_title'); ?>">

                <input type="hidden" name="action" value="update">
                <input type="hidden" name="page_options" value="section_name, section_sub_title">


                <input type="submit" name="submit" value="<?php _e('Save Changes', 'mminfotech'); ?>">
            </form>
        </div>
    </div>
</div>
<?php

?>