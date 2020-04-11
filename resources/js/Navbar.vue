<template>
  <div>
    <ul
      class="list-unstyled components mb-5"
      v-for="(item, index) in menuList"
      :key="index"
    >
      {{ item.name }}
      <router-link
        v-for="(subMenu, index) in item.submenu"
        :key="index"
        :to="{name:subMenu.route}"
        tag="li"
      > » {{subMenu.name}}</router-link>

    </ul>
  </div>

</template>

<script>
import navbaritem from './navbaritem'
export default {
  data () {
    return {
      menulist: navbaritem
    }
  },
  computed: {
    menuList: function () {
      return navbaritem
    }
  },
  methods: {
    gotoRoute (routename) {
      this.$router.push({ name: routename })
    }
  },


}
</script>

<style>
</style>
