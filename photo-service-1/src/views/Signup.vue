<template>
  <div class="regForm">
    <form>
      <h1>Registration</h1>
      <p><input  type="text" placeholder="Name" v-model="first_name" required /></p>
      <p><input  type="text" placeholder="Surname" v-model="surname" required /></p>
      <p><input  type="text" placeholder="Phone" v-model="phone" required /></p>
      <p><input  type="password" placeholder="Password" v-model="password" required /></p>
      <router-link to="/login"><button  @click="signUpHandler">Sign up</button></router-link>
    </form>
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
input{
  text-align: center;
  width: 200px;
  height: 40px;
  border-radius: 10px;
  border: none;
  background-color: #6ae0f7;
  outline: none;
}
input::placeholder{
  text-align: center;
  color: black;
}
input:hover{
   background-color: #E1A6FF;
   border: 3px solid #3D6DCC ;
}
button{
  width: 120px;
  height: 40px;
  border-radius: 10px;
  border: none;
  background-color: #6ae0f7;
  outline: none;
}
button:hover{
   background-color: #E1A6FF;
   border: 3px solid #3D6DCC ;
}
</style>