<template>

        <div class="container-liquid">

        <div class="header ">

            <div class="columns col">

                <div class=" column is-2 is-offset-2  ">
                    <div class="logo"><a href="#"><img src="img/logo.png" alt=""></a></div>
                </div>
                <div class=" column is-two-quarter is-offset-4  ">
                    <ul>
                        <li>
                            <router-link to="/">Home</router-link>
                            <router-link to="/profile">Profile</router-link>
                            <router-link to="/food">Food</router-link>

                            <a href="/logout">Logut</a>

                        </li>
                    </ul>
                </div>

            </div>

        </div>
        <br>
        <br>
        <div class="hero">
            <div class="row">
                <div class="columns">

                    <div class="column is-6">
                        <h1>Dashboard</h1>
                    </div>
                    <div class="column is-6">
                        <div class="column is-4 is-offset-8">
                            <a  class="button btn" >
                                <div class="column is-4 is">
                                    <img src="/img/add.png" alt="">
                                </div>
                                <div class="column is-8 add"><h2>Add meal</h2></div>

                            </a>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <div class="row">
            <div class="columns">
                <div class="column is-8 is-offset-2 main">

                    <div class="row r1">
                        <div class="column is-12 pr">
                            <h1>Today calories</h1>
                            <p v-model="cal">{{cal}}</p>
                            <progress class="progress bar" value="45" max="100">15%</progress>
                        </div>
                    </div>
                    <div class="fantom">

                    </div>
                    <div class="row">



                    </div>
                </div>
            </div>
        </div>

    </div>






</template>
<script>
    import Modal from 'modal-vue'
    export default {
        components: { Modal },
        data: function(){
            return {
                    cal:''

            }
        },
        methods:{
            getAllFoods(){

                axios.get('api/food')
                    .then( (response)=> {
                        this.food= response.data;
                    })
            },getCall(){

                axios.get('api/cal')
                    .then( (response)=> {
                        this.cal= response.data;

                    })
            },

        },mounted:function () {
            this.getCall();
        }
    }

</script>
<style>

</style>