<template>
  <div class="main">
    <br>
    <br>
    <hr>
    <h1>Home page</h1> 
    <img src="https://cdn.betterttv.net/emote/5a6edb51f730010d194bdd46/2x" alt=PeepoDance>
  </div>
 
</template>

<script>
export default {
  name: 'Home',
}
</script>

<style>
  @import url('https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300&display=swap');
  body{
    
    background-color: #99EEFF;
  }
  .main{
    font-family: Source Sans Pro, sans-serif;
  }
  a{
    font-size: 18px;
    text-decoration: none;
    color: black;
  }
  a:hover{
    font-size: 22px;
  }
  h1{
    color: black;
  }
  .acceptPhotoButton{
    background-color: #BFF2FC;
    border: none;
    width: 120px;
    height: 40px;
    padding: 10px;
    text-align:center;
    border-radius: 20px;
  }
  .acceptPhotoButton:hover{
    border: 4px solid #263480;
    background-color: #E1A6FF;
  }
</style>
