<h2>Plugin test</h2>

<?php Icarus\Support\Facades\Notice::display(); ?>

<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem voluptatum porro autem, id, impedit ullam deserunt officia explicabo eaque deleniti, ea reiciendis! Sunt possimus doloremque delectus culpa expedita eos explicabo!</p>

<h3>Form test</h3>

<form action="<?= esc_url(admin_url('admin-post.php')); ?>" method="post">
    <input type="hidden" name="action" value="process_test">
    <label for="input">Input</label>
    <input type="text" name="input" id="input">
    <button type="submit">Submit</button>
</form>
