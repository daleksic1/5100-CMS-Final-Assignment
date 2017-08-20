<?php get_plain_header() ?>

<body class="login">
<div class="container">
    <div class="columns">
        <div class="column is-4 is-offset-5 logo-login">
            <div class="img">
                <img src="/img/logo1.png" alt="">
            </div>
        </div>
    </div>
    <div class="columns">
        <div class="column is-6 is-offset-3 log">


            <div class="log-form">
                <form action="/login" method="post" class="control">
                    <div class="columns ">
                        <div class="column is-4 is-offset-1 log-col">
                            <label for="logname" class="label">Username</label>
                        </div>
                        <div class="column is-6  log-col">
                            <input type="text" id="logname" name="email" class="input">
                        </div>
                    </div>
                    <div class="columns">
                        <div class="column is-4 is-offset-1 ">
                            <label for="logpass" class="label">Password</label>
                        </div>
                        <div class="column is-6  ">
                            <input type="password" id="logpass" name="password" class="input">
                        </div>
                    </div>
                    <button class="button sgn-btn">Login</button>
                    <a href="/register" class="button  log-btn">Signup</a>
                </form>
            </div>
        </div>
    </div>
</div>



</body>
<?php get_footer() ?>
