<?php get_header() ?>

<table class="table table-bordered table-striped">
    <tr>
        <th>Name</th>
        <th>Email</th>

    </tr>

    <?php foreach ($users as $user): ?>
        <tr>
            <td><?= $user->username ?></td>
            <td><?= $user->email ?></td>
            <td><?= ($user->avatar) ? "<img src=\"" . $user->avatar . ">" : "" ?></td>


        </tr>
    <?php endforeach; ?>

</table>
<?php get_footer() ?>
