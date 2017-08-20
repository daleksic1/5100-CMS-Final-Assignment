<?php get_headerAdmin() ?>
<div class="text-right">
    <a href="/admin/history/create" class="btn btn-primary"><i class="fa fa-plus-circle"></i> Add New</a>
</div>

<table class="table table-bordered table-striped">
    <tr>
        <th>User</th>
        <th>Food</th>
        <th>Calories</th>
        <th>Date</th>



        <th>Actions</th>
    </tr>

    <?php foreach ($history_lists as $history_list): ?>
        <tr>
            <td><?= $history_list->username ?></td>
            <td><?= $history_list->food_title ?></td>
            <td><?= $history_list->food_calories ?></td>
            <td><?= $history_list->date ?></td>


            <td style="text-align: center"><a href="/admin/history/edit?id=<?= $history_list->id ?>" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Update</a> | <a href="/admin/history/delete?id=<?= $history_list->id ?>" class="btn btn-warning btn-sm"><i class="fa fa-trash"></i> Delete</a></td>
        </tr>
    <?php endforeach; ?>

</table>
<?php get_footerAdmin() ?>
