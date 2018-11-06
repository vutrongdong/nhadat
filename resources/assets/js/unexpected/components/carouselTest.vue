<!-- <template>
    <div>
        <vue-flux
        :options="fluxOptions"
        :images="fluxImages"
        Functionality
        :transitions="fluxTransitions">
        <flux-pagination slot="pagination"></flux-pagination>
    </vue-flux>

</div>
</template>
<script>
    import { VueFlux, FluxPagination, Transitions } from 'vue-flux';
    export default {
       components: {
          VueFlux,
          FluxPagination
      },

      data: () => ({
          fluxOptions: {
             autoplay: true
         },
         fluxImages: [
         'images/slide1.jpg',
         'images/slide2.jpg',
         'images/slide3.jpg', 
         'images/slide1.jpg',
         'images/slide2.jpg',
         'images/slide3.jpg'
         ],
         fluxTransitions: {
             transitionZip: Transitions.transitionZip,
             transitionWave: Transitions.transitionWave,
             transitionCube: Transitions.transitionCube,
             transitionWarp: Transitions.transitionWarp,
             transitionExplode: Transitions.transitionExplode
         }
     })
  }
</script>
<style>
.mask{
    width: 100% !important;
    height: 500px !important;
}
</style>
-->
<template>