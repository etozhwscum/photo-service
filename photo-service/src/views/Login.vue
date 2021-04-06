<template>
  <div class="loginForm">
    <br>
    <br>
    <hr>
    <h1>Login</h1>
    <br />
    <input class="logInput" type="text" placeholder="Phone" v-model="phone" required />
    <br />
    <br />
    <input class="logInput" type="password" placeholder="Password" v-model="password" required />
    <br />
    <br />
    <router-link to="/photo"><button class="acceptButton" @click="logInHandler">Sign up</button></router-link>
  </div>
</template>

<script>
export default {
  name: "Login",
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
    }
  }
};
</script>

<style>
  .loginForm{
    font-family: Source Sans Pro, sans-serif;
  }
  .logInput{
    background-color: #BFF2FC;
    border: none;
    width: 180px;
    height: 30px;
    padding: 10px;
    text-align:center;
    border-radius: 20px;
  }
  .logInput::placeholder{
    font-size: 14px;
    color: black;
  }
  .logInput:hover{
    border: 4px solid #263480;
    background-color: #E1A6FF;
  }
  .acceptButton{
    background-color: #BFF2FC;
    border: none;
    width: 80px;
    height: 40px;
    padding: 10px;
    text-align:center;
    border-radius: 20px;
  }
  .acceptButton:hover{
    border: 4px solid #263480;
    background-color: #E1A6FF;
  }
</style>
