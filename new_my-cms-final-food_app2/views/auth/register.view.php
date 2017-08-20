<?php get_plain_header() ?>


<form action="/register" method="POST" class="box">
    <h1 style="font-size: 20px;">Register</h1>
    <br>
    <div class="field">
        <label for="username" class="label">Username</label>
        <input type="text" class="input" name="username" id="username">
    </div>
    <div class="field">
        <label for="firstname">First Name</label>
        <input type="text" class="input" name="first_name" id="firstname">
    </div>
    <div class="field">
        <label for="lastname">Last Name</label>
        <input type="text" class="input" name="last_name" id="lastname">
    </div>
    <div class="field">
        <label for="password">Password</label>
        <input type="password" class="input" name="password" id="password">
    </div>
    <div class="field">
        <label for="email">Email</label>
        <input type="email" class="input" name="email" id="email">
    </div>



    <div class="field">
        <label for="date">Date of birth</label>
        <input type="date" class="input" name="date_of_birth" id="date">
    </div>
    <div class="field">
        <label for="weight">Weight</label>
        <input type="number" class="input" name="weight" id="weight">
    </div>
    <div class="field">
        <label for="height">Height</label>
        <input type="number" class="input" name="height" id="height">
    </div>
    <div class="field">
        <label for="city">City</label>
        <input type="text" class="input" name="city" id="city">
    </div>
    <div class="field">
        <label for="activity" class="label">Activity</label>
        <select name="activity" id="activity" class="select control">
            <option value="Low">Low</option>
            <option value="Medium">Medium</option>
            <option value="High">High</option>

        </select>

    </div>
    <div class="field">
        <label for="gen" class="label">Gender</label>
        <select name="gender" id="gen" class="select control">
            <option value="Male">Male</option>
            <option value="Female">Female</option>


        </select>



        </div>
        <div class="field">
            <label for="food">Type of food that you mostly eat:</label>
            <input type="text" class="input" name="type_of_food" id="food">
        </div>
        <div class="field">
            <label for="occupation">Occupation</label>
            <input type="text" class="input" name="occupation" id="occupation">
        </div>
        <div class="field">
            <label for="goal" class="label">Goal</label>
            <select name="goal" id="goal" class="select control">
                <option value="weight_loss">Weight loss</option>
                <option value="weight_gain">Weight gain</option>
                <option value="healthy_living">Healthy living</option>

            </select>

        </div>
        <div class="field">
            <label for="avatar">Avatar</label>
            <input type="text" class="input" name="avatar" id="avatar">
        </div>
        <div class="right">
            <button class="button is-primary">Submit</button>
        </div>

</form>
<?php get_footer() ?>