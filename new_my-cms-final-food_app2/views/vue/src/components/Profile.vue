<template>
<div>
    <div class="container-liquid">

        <div class="header ">
            <div class="columns ">

                <div class=" column is-2 is-offset-2  ">
                    <div class="logo"><a href="#"><img src="/img/logo.png" alt=""></a></div>
                </div>
                <div class=" column is-two-quarter is-offset-4  ">
                    <ul>
                        <li>
                            <router-link to="/">Home</router-link>
                            <router-link to="/profile">Profile</router-link>
                            <a href="/logout">Logut</a>


                        </li>
                    </ul>
                </div>

            </div>

        </div>
        <div class="fantom"></div>
        <br>
            <table>
            <tr>
                <th>User Name</th>
                <th>Email</th>

            </tr>
            <tr>
                <td>{{me.username}}</td>
                <td>{{me.email}}</td>

            </tr>

        </table>


        </div>
    </div>
</div>
</template>

<script>

    export default {

        name: 'profile',
        data () {
            return {
               users:[],
                me:''
            }
        },
        methods:{
            getAllUsers(){

                axios.get('api/users')
                    .then( (response)=> {
                            this.users= response.data;
                    })
            },
            getMe(){
                axios.get('api/me')
                    .then((response)=> {
                        this.me = response.data;
                    })
            }
        },
       mounted:function () {
            this.getAllUsers();
            this.getMe();
        }
    }
</script>


<style>




</style>