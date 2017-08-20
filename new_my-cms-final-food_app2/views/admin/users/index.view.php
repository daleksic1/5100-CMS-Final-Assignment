<?php get_headerAdmin() ?>
<div class="text-right">
    <a href="/admin/users/create" class="btn btn-primary"><i class="fa fa-plus-circle"></i> Add New</a>
</div>

<table class="table table-bordered table-striped">
    <tr>
        <th>Username</th>
        <th>First name</th>
        <th>Last name</th>
        <th>Email</th>
        <th>City</th>
        <th>Height</th>
        <th>Weight</th>
        <th>Gender</th>
        <th>Date of birth</th>


        <th>Actions</th>
    </tr>

    <?php foreach ($users as $user): ?>
        <tr>
            <td><?= $user->username ?></td>
            <td><?= $user->first_name?></td>
            <td><?= $user->last_name ?></td>
            <td><?= $user->email?></td>
            <td><?= $user->city?></td>
            <td><?= $user->height?></td>
            <td><?= $user->weight?></td>
            <td><?= $user->gender?></td>
            <td><?= $user->date_of_birth?></td>

            <td style="text-align: center"><a href="/admin/users/edit?id=<?= $user->id ?>" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Update</a> | <a href="/admin/users/delete?id=<?= $user->id ?>" class="btn btn-warning btn-sm"><i class="fa fa-trash"></i> Delete</a></td>
        </tr>
    <?php endforeach; ?>

</table>
<?php get_footerAdmin() ?>
