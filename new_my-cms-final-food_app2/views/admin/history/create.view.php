<?php get_headerAdmin() ?>

    <h1>Create history</h1>
    <form action="/admin/history" method="POST">
        <div class="form-group">
            <label for="username">user </label>

            <select name="user_id" id="user_id" class="form-control">
                <?php foreach ($users as $user ):?>
                    <option value="<?=$user->id ?>"><?=$user->username?></option>
                <?php endforeach;?>


            </select>
        </div>
        <div class="form-group">
            <label for="food_id">Food </label>

            <select name="food_id" id="food_id" class="form-control">
                <?php foreach ($foods as $food ):?>
                    <option value="<?=$food->id ?>"><?=$food->food_title?></option>
                <?php endforeach;?>


            </select>
        </div>


        <div class="form-group">
            <label for="food_type_id">Date</label>
            <input type="date" name="date" id="date" class="form-control">
        </div>
        <div class="text-right">
            <button class="btn btn-primary">Submit</button>
        </div>

    </form>

<?php get_footerAdmin() ?>