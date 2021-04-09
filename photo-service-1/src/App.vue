<template>
  <div class="navbar">
    <router-link to="/">Home</router-link>
    <router-link to="/signup">Registration</router-link>
    <router-link to="/login">Login</router-link>
    <router-link to="/"><img src="../public/logo.svg"></router-link>
    <router-link to="/add_photo">Add Photo</router-link>
    <router-link to="/photo">Photo</router-link>
    <router-link to="/user">User</router-link>
  </div>
  <br>
  <hr>
  <router-view />
</template>

<script>
import { mapState, mapGetters } from "vuex";

export default {
  name: "App",
  components: {},
  computed: {}
};
</script>

<style>
#app {
  font-family: 'Ubuntu', sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: black;
  margin-top: 60px;
}
a{
  text-decoration: none;
  color: black;
  font-size: 18px;
  transition: .2s all ease;
}
a:hover{
   color: #d6d6d6;
   transform: scale(1.4);
}
.hide {
  display: none;
}

.navbar {
  display: flex;
  justify-content: space-around;
}
</style>
