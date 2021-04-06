<template>
  <div id="app">
      <munro-grid></munro-grid>
  </div>
</template>
<script>
    import MunroGrid from './components/MunroGrid';
    export default {
        name: 'app',
        data() {
            return {
            }
        },
        components: {
            MunroGrid
        }
    }
</script>