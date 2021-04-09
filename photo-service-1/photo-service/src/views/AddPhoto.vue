<template>
  <div class="addPhoto">
    <br>
    <br>
    <hr>
    <h1>Add Your Photo</h1>
    <div @click="selectImage">Click here</div>
    <input class="photoInput" type="file" ref="fileInput" @change="pickFile" />
  </div>
</template>

<script>
export default {
  name: 'AddPhoto',
  data() {
    return {
      file: ''
    };
  },
  methods: {
    selectImage() {
      this.$refs.fileInput.click();
    },
    pickFile() {
      const input = this.$refs.fileInput;
      const file = input.files;
      if (file && file[0]) {
        const reader = new FileReader();
        reader.onload = e => {
          this.file = e.target.result;
        };
        reader.readAsDataURL(file[0]);
        this.$emit('input', file[0]);
        console.log(this.file);
        
      }
    }
  }
};
</script>

<style></style>
