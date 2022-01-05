<template>
    <v-app>
        <v-rating
        v-model="rating"
        background-color="purple lighten-3"
        color="purple"
        large
        ></v-rating>
    </v-app>
</template>
<script>
  export default {
    data: () => ({
      rating: 4,
    }),
  }
</script>