<template>
  <div class="userSearchForm">
    <br>
    <br>
    <hr>
    <h1>Search User</h1>
    <br />
    <input class="userInput" type="text" placeholder="Search user..." v-model="searchUserText" /><br /><br />
    <button class="acceptButton" @click="searchUserHandler">Search</button>
  </div>
</template>

<script>
export default {
  name: 'User',
  data() {
    return {
      searchUserText: '',
    };
  },
  methods: {
    searchUserHandler() {
      if (this.searchUserText) {
        console.log(this.searchUserText);
      }
    },
  },
}
</script>

<style>
.userInput{
    background-color: #BFF2FC;
    border: none;
    width: 180px;
    height: 30px;
    padding: 10px;
    text-align:center;
    border-radius: 20px;
  }
  .userInput::placeholder{
    font-size: 14px;
    color: black;
  }
  .userInput:hover{
    border: 4px solid #263480;
    background-color: #E1A6FF;
  }
</style>
