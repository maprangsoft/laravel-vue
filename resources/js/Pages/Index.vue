<script setup>
import {Link} from '@inertiajs/inertia-vue3';
defineProps({
    product: Object,
});
import KinstaLayout from "../Layouts/KinstaLayout.vue";
</script>

<template>
  <KinstaLayout>
    <section>
      <h2>{{ product.name }}</h2>
      <p>{{ product.price }}</p>
      <article>
        <div>
          <!-- <img src="/images/kinsta-logo.png" alt="Article thumbnail" /> -->
        </div>

        <h3>Title for the blog</h3>
        <p>
          Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illum rem
          itaque error vel perferendis aliquam numquam dignissimos, expedita
          perspiciatis consectetur!
        </p>

        <Link href="/profile">go to profile</Link>
      </article>
    </section>
  </KinstaLayout>
 </template>