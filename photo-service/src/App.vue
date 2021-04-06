<template>
  <div class="navbar">
    <router-link to="/">Home</router-link>
    <router-link to="/signup">Registration</router-link>
    <router-link to="/login">Login</router-link>
    <router-link to="/"><img src="./images/logo.svg"></router-link>
    <router-link to="/logout">Logout</router-link>
    <router-link to="/photo">Add Photo</router-link>
    <router-link to="/user">User</router-link>
  </div>
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
  font-family: Source Sans Pro, sans-serif;
  font-size: 18px;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}



.hide {
  display: none;
}

.navbar {
  display: flex;
  justify-content: space-around;
}
</style>
