<?php get_headerAdmin() ?>
<div class="text-right">
    <a href="/admin/food/create" class="btn btn-primary"><i class="fa fa-plus-circle"></i> Add New</a>
</div>

<table class="table table-bordered table-striped">
    <tr>
        <th>Food Title</th>
        <th>Food calories</th>
        <th>Type of food</th>



        <th>Actions</th>
    </tr>

    <?php foreach ($foods as $food): ?>
        <tr>
            <td><?= $food->food_title ?></td>
            <td><?= $food->food_calories?></td>
            <td><?= $food->title ?></td>


            <td style="text-align: center"><a href="/admin/food/edit?id=<?= $food->id ?>" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Update</a> | <a href="/admin/food/delete?id=<?= $food->id ?>" class="btn btn-warning btn-sm"><i class="fa fa-trash"></i> Delete</a></td>
        </tr>
    <?php endforeach; ?>

</table>
<?php get_footerAdmin() ?>
