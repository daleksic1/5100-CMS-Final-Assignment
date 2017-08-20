<?php get_headerAdmin() ?>

    <h1>Add food</h1>
    <form action="/admin/food" method="POST">
        <div class="form-group">
            <label for="food">Food Name</label>
            <input type="text" class="form-control" name="food_title" id="food">
        </div>
        <div class="form-group">
            <label for="food_cal">Cal</label>
            <input type="number" class="form-control" name="food_calories" id="food_cal">
        </div>
        <div class="form-group">
            <label for="food_type_id">Food type</label>
            <select name="food_type_id" id="food_type_id" class="form-control">
                <?php foreach ($food_types as $food_type):?>
                <option value="<?=$food_type->id?>"><?=$food_type->title?></option>
        <?php endforeach;?>


            </select>
        </div>
        <div class="text-right">
            <button class="btn btn-primary">Submit</button>
        </div>

    </form>

<?php get_footerAdmin() ?>