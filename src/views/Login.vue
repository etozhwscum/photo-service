<template>
  <div class="logForm">
    <form >
      <h1>Login & Logout</h1>
      <p><input type="text" placeholder="Phone" v-model="phone" required /></p>
      <p><input type="text" placeholder="Password" v-model="password" required /></p>
      <router-link to="/add_photo"><button @click="logInHandler">Log in</button>Add Photo</router-link>
    </form>
  </div>
  <div>
    <p><button class="logoutButton" @click="logoutHandler">Log out</button></p>
  </div>
</template>


<script>
export default {
  name: "Login",
  name: "Logout",
  data() {
    return {
      phone: "",
      password: ""
    };
  },
  methods: {
    logInHandler() {
      if (
        this.phone.match(/^[0-9]+$/) &&
        this.phone.length === 11 &&
        this.password
      ) {
        this.$store.dispatch("login", {
          phone: this.phone,
          password: this.password
        });
      }
    },
     logoutHandler() {
      this.$store.dispatch("logout");
    }
  }
};
</script>

<style>
</style>
