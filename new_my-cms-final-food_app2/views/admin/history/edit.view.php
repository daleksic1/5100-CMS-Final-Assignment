<?php get_headerAdmin() ?>

    <h1>Edit history</h1>
    <form action="/admin/history/update" method="POST">
        <input type="hidden" name="id" value="<?= $historyE->id ?>">
        <div class="form-group">
            <label for="username">user </label>

            <select name="user_id" id="user_id" class="form-control">
                <?php foreach ($users as $user ):?>
                    <option value="<?=$user->id ?>" <?= ($user->id == $historyE->user_id) ? "selected" : "" ?>><?=$user->username?></option>
                <?php endforeach;?>


            </select>
        </div>
        <div class="form-group">
            <label for="food_id">Food </label>

            <select name="food_id" id="food_id" class="form-control">
                <?php foreach ($foods as $food ):?>
                    <option value="<?=$food->id ?>" <?= ($food->id == $historyE->food_id) ? "selected" : "" ?>><?=$food->food_title?></option>
                <?php endforeach;?>


            </select>
        </div>

        <div class="form-group">
            <label for="date ">Date</label>
            <input type="date" class="form-control" name="date" id="date" value="<?= date("Y-m-d", strtotime($historyE->date)) ?>">
        </div>
        <div class="text-right">
            <button class="btn btn-primary">Submit</button>
        </div>
    </form>

<?php get_footerAdmin() ?>