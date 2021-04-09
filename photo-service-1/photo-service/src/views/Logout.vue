<template>
<br>
<br>
<hr>
<h1>Logout</h1>
<div class="logoutForm">
  <button class="logoutButton" @click="logoutHandler"><img src="../images/logout.svg"></button>
</div>
</template>

<script>
export default {
  name: 'Logout',
  methods: {
    logoutHandler() {
      this.$store.dispatch('logout');
    }
  }
};
</script>

<style>
.logoutButton{
  cursor: pointer;
  border: none;
  background-color: #99EEFF;
}
</style>
