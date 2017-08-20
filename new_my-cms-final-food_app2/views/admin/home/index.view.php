<?php get_headerAdmin() ?>


<table class="table table-bordered table-striped">
    <tr>
        <th>Users</th>




    </tr>

    <?php foreach ($users as $user): ?>
        <tr>
            <td><?= $user->username ?></td>



        </tr>
    <?php endforeach; ?>

</table>
<?php get_footerAdmin() ?>
