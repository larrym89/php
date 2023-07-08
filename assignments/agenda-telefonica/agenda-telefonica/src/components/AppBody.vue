<template>
  <div>
    <div class="card-body items-container" v-bind:style="marginLeft">
        No Items
        <all-items></all-items>
    </div>

    <div class="card-body items-container">
        No Items
        <add-contacts></add-contacts>
    </div>

    
  </div>
</template>

<script>

import AllItems from './AllItems.vue'
import AddContacts from './AddContacts.vue'

export default {
  name: "AppBody",
  components: {
    'all-items': AllItems,
    'add-contacts': AddContacts
  },
  props: ["tab"],
  computed: {
    marginLeft: function() {
        return "margin-left: " + -(this.tab - 1) * 100 + "%"
    }
  }
};
</script>
