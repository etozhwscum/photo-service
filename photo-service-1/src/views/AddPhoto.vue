<template>
  <div>
    <br />
    <input type="file" ref="fileInput" @change="addPhotoHandler" />
  </div>
</template>

<script>
export default {
  name: 'AddPhoto',
  methods: {
    async addPhotoHandler(e) {
      const photo = e.target.files[0];
      const fd = new FormData();
      fd.append('photo', photo);
      console.log(photo);
      await this.$store.dispatch('addPhoto', { fd });
      this.$router.replace({ path: '/photo' });
    },
  },
};
</script>

<style></style>
