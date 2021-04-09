<template>
  <div class="registrationForm">
    <br>
    <br>
    <hr>
    <h1>Registration</h1>
    <br />
    <input class="regInput" type="text" placeholder="First name" v-model="first_name" required />
    <br />
    <br />
    <input class="regInput" type="text" placeholder="Surname" v-model="surname" required />
    <br />
    <br />
    <input class="regInput" type="text" placeholder="Phone" v-model="phone" required />
    <br />
    <br />
    <input class="regInput" type="password" placeholder="Password" v-model="password" required />
    <br />
    <br />
    <router-link to="/login"><button class="acceptButton" @click="signUpHandler">Sign up</button></router-link>
  </div>
</template>

<script>
export default {
  name: "Signup",
  data() {
    return {
      first_name: "",
      surname: "",
      phone: "",
      password: ""
    };
  },
  methods: {
    signUpHandler() {
      if (
        this.phone.match(/^[0-9]+$/) &&
        this.phone.length === 11 &&
        this.first_name &&
        this.surname &&
        this.password
      ) {
        this.$store.dispatch("signup", {
          first_name: this.first_name,
          surname: this.surname,
          phone: this.phone,
          password: this.password
        });
      }
    }
  }
};
</script>
<style>
  .registrationForm{
    font-family: Source Sans Pro, sans-serif;
  }
  .regInput{
    background-color: #BFF2FC;
    border: none;
    width: 180px;
    height: 30px;
    padding: 10px;
    text-align:center;
    border-radius: 20px;
  }
  .regInput::placeholder{
    font-size: 14px;
    color: black;
  }
  .regInput:hover{
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