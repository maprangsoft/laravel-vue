<script setup>
import KinstaLayout from "../Layouts/KinstaLayout.vue";
  defineProps({
    items: Object,
});
</script>

<template>

  <KinstaLayout>

<pre>{{ items }}</pre>

  <header>
    <h1>Welcome to Kinsta Blog</h1>
  </header>

  <main>
    <article>
      <h1>Title for the blog</h1>

      <p>Article content goes here</p>
    </article>
  </main>

  <footer>
    <h2>Join our Newsletter</h2>


  </footer>

</KinstaLayout>

</template>