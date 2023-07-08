<template>
  <div>
    <div class="card text-center">
      <div class="card-header">
        <ul class="nav mb-1 card-header-tabs d-flex justify-content-around">
          <li class="nav-item ">
            <button type="button" class="btn btn-primary btn-lg" id="tab-1" v-on:click="tabChange(1)">Contacts</button>
          </li>
          <li class="nav-item">
            <button type="button" class="btn btn-primary btn-lg" id="tab-2" v-on:click="tabChange(2)">Add Contacts</button>
          </li>
          
        </ul>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "AppHeader",
  props: ["tab"],
  methods: {
    tabChange: function(tabNo){
        switch(tabNo) {
            case 1:
                history.pushState("", "", "/all-contacts");
                break;
            case 2:
                history.pushState("", "", "add-contacts")
                break;
        }

        this.$emit("tab-change", tabNo)
    }
  }
};
</script>
