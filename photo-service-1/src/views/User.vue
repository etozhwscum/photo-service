<template>
  <div>
    <br />
    <input
      type="text"
      placeholder="Search user..."
      v-model="searchUserText"
    /><br /><br />
    <button @click="searchUserHandler">Search</button>
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
    async searchUserHandler() {
      if (this.searchUserText) {
        await this.$store.dispatch('searchUser', { text: this.searchUserText });
      }
    },
  },
};
</script>

<style></style>
