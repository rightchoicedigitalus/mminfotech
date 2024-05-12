<?php
 echo '<h1>Section Header</h1>';
?>

<div class="main_body">

    <!-- About Us Section -->
<div id="aboutUs">
    <div class="container">
        <div class="card">
            <h2>About Us Section</h2>

            <!-- <form action="options.php" method="post" enctype="multipart/form-data"> -->
            <!-- <form method="post" action="options.php" novalidate="novalidate"> -->
            <form method="post" action="options.php">
                <?php wp_nonce_field('update-options'); ?>


                <div class="form_group">
                    <label for="section_name" style="display: block">Section Title</label>
                    <input type="text" id="section_name" style="width: 100%" name="about_us_section_name" placeholder="Enter your section name" value="<?php echo get_option('about_us_section_name'); ?>">
                </div>

                <div class="form_group">
                    <label for="section_sub_title" style="display: block; margin-top: 10px">Section Sub Title</label>
                    <input type="text" id="section_sub_title" style="width: 100%" name="about_us_section_sub_title" placeholder="Enter section sub-title" value="<?php echo get_option('about_us_section_sub_title'); ?>">
                </div>

                <div class="form_group">
                    <label for="section_description" style="display: block; margin-top: 10px">Section Description</label>

                    <textarea rows="5" id="section_description" style="width: 100%" name="about_us_section_description" placeholder="Enter section description" value=""><?php echo get_option('about_us_section_description'); ?></textarea>

                </div>

                <div class="form_group">
                    <label for="your_name" style="display: block; margin-top: 10px">Your Name</label>
                    <input type="text" id="your_name" style="width: 100%" name="about_us_your_name" placeholder="Your Name" value="<?php echo get_option('about_us_your_name'); ?>">
                </div>

                <div class="form_group">
                    <label for="your_designation" style="display: block; margin-top: 10px">Your Designation</label>
                    <input type="text" id="your_designation" style="width: 100%" name="about_us_your_designation" placeholder="Your Designation" value="<?php echo get_option('about_us_your_designation'); ?>">
                </div>

                <div class="form_group">
                    <label for="button_name" style="display: block; margin-top: 10px">Button Name</label>
                    <input type="text" id="button_name" style="width: 100%" name="about_us_button_name" placeholder="Button Name" value="<?php echo get_option('about_us_button_name'); ?>">
                </div>

                <div class="form_group">
                    <label for="button_link" style="display: block; margin-top: 10px">Button Link</label>
                    <input type="text" id="button_link" style="width: 100%" name="about_us_button_link" placeholder="Button Link" value="<?php echo get_option('about_us_button_link'); ?>">
                </div>
                

                <input type="hidden" name="action" value="update">
                <input type="hidden" name="page_options" value="about_us_section_name, about_us_section_sub_title, about_us_section_description, about_us_your_name, about_us_your_designation, about_us_button_name, about_us_button_link, about_us_section_image">


                <input type="submit" style="margin-top: 10px" name="submit" value="<?php _e('Save Changes', 'mminfotech'); ?>">
            </form>
        </div>
    </div>
</div>


<!-- Service Section -->
<div id="service">
    <div class="container">
        <div class="card">
            <h2>Service Section</h2>

            <form action="options.php" method="post">
                <?php wp_nonce_field('update-options'); ?>
                <div class="form_group">
                    <label for="section_name" style="display: block">Section Title</label>
                    <input type="text" id="section_name" style="width: 100%" name="section_name" placeholder="Enter your section name" value="<?php echo get_option('section_name'); ?>">
                </div>

                <div class="form_group">
                    <label for="section_sub_title" style="display: block; margin-top: 10px">Section Sub Title</label>
                    <input type="text" id="section_sub_title" style="width: 100%" name="section_sub_title" placeholder="Enter section sub-title" value="<?php echo get_option('section_sub_title'); ?>">
                </div>

                

                <input type="hidden" name="action" value="update">
                <input type="hidden" name="page_options" value="section_name, section_sub_title">


                <input type="submit" style="margin-top: 10px" name="submit" value="<?php _e('Save Changes', 'mminfotech'); ?>">
            </form>
        </div>
    </div>
</div>

<!-- Skills Section -->
<div id="skills">
    <div class="container">
        <div class="card">
            <h2>Skills Section</h2>

            <form action="options.php" method="post">
                <?php wp_nonce_field('update-options'); ?>
                <div class="form_group">
                    <label for="skills_section_name" style="display: block">Section Title</label>
                    <input type="text" id="skills_section_name" style="width: 100%" name="skills_section_name" placeholder="Enter your section name" value="<?php echo get_option('skills_section_name'); ?>">
                </div>

                <div class="form_group">
                    <label for="skills_section_sub_title" style="display: block; margin-top: 10px">Section Sub Title</label>
                    <input type="text" id="skills_section_sub_title" style="width: 100%" name="skills_section_sub_title" placeholder="Enter section sub-title" value="<?php echo get_option('skills_section_sub_title'); ?>">
                </div>

                <div class="form_group">
                    <label for="section_paragraph" style="display: block; margin-top: 10px">Section Paragraph</label>
                    <textarea name="section_paragraph" style="width: 100%" id="section_paragraph"  rows="5"><?php echo get_option('section_paragraph'); ?></textarea>
                </div>

                

                <input type="hidden" name="action" value="update">
                <input type="hidden" name="page_options" value="skills_section_name, skills_section_sub_title, section_paragraph">


                <input type="submit" style="margin-top: 10px" name="submit" value="<?php _e('Save Changes', 'mminfotech'); ?>">
            </form>
        </div>
    </div>
</div>

</div>


<?php

?>