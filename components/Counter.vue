<template>
  <div>Counter 1: {{ count }}</div>
  <button @click="increase">+</button>
</template>

<script>
export default {
  data() {
    return {
      count: 0,
    };
  },
  methods: {
    increase() {
      this.count++;
    },
  },
};
</script>

<style scoped>
button {
  background-color: red;
}
</style>