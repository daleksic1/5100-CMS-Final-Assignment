<?php get_headerAdmin() ?>

    <h1>Edit post</h1>
    <form action="/admin/users/update" method="POST">
        <input type="hidden" name="id" value="<?= $user->id ?>">

        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" name="username" id="username" value="<?= $user->username?>">
        </div>
        <div class="form-group">
            <label for="firstname">First Name</label>
            <input type="text" class="form-control" name="first_name" id="firstname" value="<?= $user->first_name ?>">
        </div>
        <div class="form-group">
            <label for="lastname">Last Name</label>
            <input type="text" class="form-control" name="last_name" id="lastname" value="<?= $user->last_name ?>">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" id="password" value="<?= $user->password ?>">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" id="email" value="<?= $user->email ?>">
        </div>



        <div class="form-group">
            <label for="date">Date of birth</label>
            <input type="date" class="form-control" name="date_of_birth" id="date" value="<?= $user->date_of_birth ?>">
        </div>
        <div class="form-group">
            <label for="weight">Weight</label>
            <input type="number" class="form-control" name="weight" id="weight" value="<?= $user->weight ?>">
        </div>
        <div class="form-group">
            <label for="height">Height</label>
            <input type="number" class="form-control" name="height" id="height" value="<?= $user->height ?>">
        </div>
        <div class="form-group">
            <label for="city">City</label>
            <input type="text" class="form-control" name="city" id="city" value="<?= $user->city ?>">
        </div>
        <div class="form-group">
            <label for="activity">Activity</label>
            <select name="activity" id="activity" >
                <option value="Low" <?= ($user->activity == "Low") ? "selected" : "" ?>>Low</option>
                <option value="Medium" <?= ($user->activity == "Medium") ? "selected" : "" ?>>Medium</option>
                <option value="High" <?= ($user->activity == "High") ? "selected" : "" ?>>High</option>

            </select>
            <div class="form-group">
                <label for="gen">Gender</label>
                <select name="gender" id="gen" >
                    <option value="Male" <?= ($user->gender == "Male") ? "selected" : "" ?>>Male</option>
                    <option value="Female" <?= ($user->gender == "Female") ? "selected" : "" ?>>Female</option>


                </select>
        </div>
            <div class="form-group">
                <label for="role">Gender</label>
                <select name="role_id" id="role" >
                    <option value="1" <?= ($user->gender == "1") ? "selected" : "" ?>>Admin</option>
                    <option value="2" <?= ($user->gender == "2") ? "selected" : "" ?>>User</option>


                </select>
            </div>
        <div class="form-group">
            <label for="food">Type of food that you mostly eat:</label>
            <input type="text" class="form-control" name="type_of_food" id="food" value="<?= $user->type_of_food ?>">
        </div>
        <div class="form-group">
            <label for="occupation">Occupation</label>
            <input type="text" class="form-control" name="occupation" id="occupation" value="<?= $user->occupation ?>">
        </div>
        <div class="form-group">
            <label for="goal">Goal</label>
            <select name="goal" id="goal">
                <option value="weight_loss" <?= ($user->goal == "Weight loss") ? "selected" : "" ?>>Weight loss</option>
                <option value="weight_gain" <?= ($user->goal == "Weight gain") ? "selected" : "" ?>>Weight gain</option>
                <option value="healthy_living" <?= ($user->goal == "Healthy living") ? "selected" : "" ?>>Healthy living</option>

            </select>

        </div>

        <div class="text-right">
            <button class="btn btn-primary">Submit</button>
        </div>

    </form>

<?php get_footerAdmin() ?>