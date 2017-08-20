<?php get_headerAdmin() ?>

    <h1>Create new post</h1>
    <form action="/admin/users" method="POST">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" name="username" id="username">
        </div>
        <div class="form-group">
            <label for="firstname">First Name</label>
            <input type="text" class="form-control" name="first_name" id="firstname">
        </div>
        <div class="form-group">
            <label for="lastname">Last Name</label>
            <input type="text" class="form-control" name="last_name" id="lastname">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" id="password">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" id="email">
        </div>



        <div class="form-group">
            <label for="date">Date of birth</label>
            <input type="date" class="form-control" name="date_of_birth" id="date">
        </div>
        <div class="form-group">
            <label for="weight">Weight</label>
            <input type="number" class="form-control" name="weight" id="weight">
        </div>
        <div class="form-group">
            <label for="height">Height</label>
            <input type="number" class="form-control" name="height" id="height">
        </div>
        <div class="form-group">
            <label for="city">City</label>
            <input type="text" class="form-control" name="city" id="city">
        </div>
        <div class="form-group">
            <label for="activity">Activity</label>
            <select name="activity" id="activity">
                <option value="Low">Low</option>
                <option value="Medium">Medium</option>
                <option value="High">High</option>

            </select>

        </div>
        <div class="form-group">
            <label for="gen">Gender</label>
            <select name="gender" id="gen">
                <option value="Male">Male</option>
                <option value="Female">Female</option>


            </select>
            <div class="form-group">
                <label for="role">Activity</label>
                <select name="role_id" id="role">
                    <option value="1">Admin</option>
                    <option value="2">User</option>


                </select>


            </div>
        <div class="form-group">
            <label for="food">Type of food that you mostly eat:</label>
            <input type="text" class="form-control" name="type_of_food" id="food">
        </div>
        <div class="form-group">
            <label for="occupation">Occupation</label>
            <input type="text" class="form-control" name="occupation" id="occupation">
        </div>
        <div class="form-group">
            <label for="goal">Goal</label>
            <select name="goal" id="goal">
                <option value="weight_loss">Weight loss</option>
                <option value="weight_gain">Weight gain</option>
                <option value="healthy_living">Healthy living</option>

            </select>

        </div>
        <div class="form-group">
            <label for="avatar">Avatar</label>
            <input type="text" class="form-control" name="avatar" id="avatar">
        </div>
        <div class="text-right">
            <button class="btn btn-primary">Submit</button>
        </div>

    </form>

<?php get_footerAdmin() ?>