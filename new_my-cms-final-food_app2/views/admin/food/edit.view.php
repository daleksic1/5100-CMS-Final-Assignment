<?php get_headerAdmin() ?>

    <h1>Edit food</h1>
    <form action="/admin/food/update" method="POST">
        <input type="hidden" name="id" value="<?= $food->id ?>">
        <div class="form-group">
            <label for="food_title">Title</label>
            <input type="text" class="form-control" name="food_title" id="food_title" value="<?= $food->food_title?>">
        </div>
        <div class="form-group">
            <label for="calories">Food calories</label>
            <input type="number" class="form-control" name="food_calories" id="calories" value="
<?= $food->food_calories ?>">
        </div>
        <div class="form-group">
            <label for="food_type_id">Food type</label>
            <select name="food_type_id" id="food_type_id" class="form-control">
                <?php foreach ($food_types as $food_type):?>
                    <option value="<?=$food_type->id?>"><?=$food_type->id?></option>
                <?php endforeach;?>


            </select>
        </div>
        <div class="text-right">
            <button class="btn btn-primary">Submit</button>
        </div>
    </form>

<?php get_footerAdmin() ?>