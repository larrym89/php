
<template>
  <div id="app-container" class="card text-center d-flex">
    <app-header v-bind:tab="activeTab" v-on:tab-change="tabChange"></app-header>
    <app-body v-bind:tab="activeTab"></app-body>
    <!-- <app-footer class=""></app-footer> -->
  </div>
</template>

<script>

import AppBody from './components/AppBody.vue'
import AppHeader from './components/AppHeader.vue'


export default {
  name: 'App',
  components: {
    'app-header': AppHeader,
    'app-body': AppBody
  },
  data: function(){
    return {
      currentRoute: window.location.pathname,
      clickedTab: -1
    }
  },
  methods: {
    tabChange: function(tab){
      this.clickedTab = tab
    }
  },
  computed: {
    activeTab: function(){
      let tab;

      if (this.clickedTab > -1) {
        return this.clickedTab
      }

      switch (window.location.pathname) {
        case "/all-contacts":
          tab = 1
          break
        case "/add-contacts":
          tab = 2
          break
      }

      return tab;
    }
  }
}
</script>

<style>

body {
  height: 100vh;
  
}

#app-container {
  max-width: 500px;
  margin: 0 auto;
  height: 95vh;
  background: white;
  border-radius: 10px;
}

</style>
