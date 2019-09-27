<h2 class="wp-icarus-page-title">Plugin test</h2>

<?php Icarus\Support\Facades\Notice::display(); ?>

<p>This page was generated using WP Icarus framework config, routing and view modules.</p>

<p>The color of the page title was changed thanks to WP Icarus framework style module.</p>

<p>Open your console to see javascript messages displayed using WP Icarus framework script module.</p>

<h3>Form test</h3>

<p>Submit the form to see the WP Icarus framework Notice module.</p>

<form action="<?= esc_url(admin_url('admin-post.php')); ?>" method="post">
    <input type="hidden" name="action" value="process_test">
    <label for="input">Input</label>
    <input type="text" name="input" id="input">
    <button type="submit">Submit</button>
</form>
