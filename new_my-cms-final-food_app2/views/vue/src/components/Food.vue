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
                    <th>Food</th>
                    <th>Food Calories</th>

                </tr>
                <tr v-for="food in foods">
                    <td>{{food.food_title}}</td>
                    <td>{{food.food_calories}}</td>


                </tr>

            </table>


        </div>
    </div>
    </div>
</template>

<script>

    export default {

        name: 'food',
        data () {
            return {
                foods:[],

            }
        },
        methods:{
            getAllFood(){

                axios.get('api/food')
                    .then( (response)=> {
                        this.foods= response.data;
                    })
            }

        },
        mounted:function () {
            this.getAllFood();

        }
    }
</script>


<style>




</style>