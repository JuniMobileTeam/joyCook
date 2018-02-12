<template>
  <!-- RD Navbar Transparent -->
  <div class="rd-navbar-wrap">
    <nav class="rd-navbar" :class="[NabarConfig.skin]" v-bind="NavbarConfig.attributes"
              data-md-device-layout="rd-navbar-static"
              data-lg-device-layout="rd-navbar-static"
              data-stick-up-offset="210"
              data-xl-stick-up-offset="85">
      <div class="rd-navbar-inner">
        <div class="rd-navbar-panel">
          <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar, .rd-navbar-nav-wrap">
            <span></span>
          </button>
          <h4 class="panel-title veil-md" v-if="NavbarConfig.activeMenuItem">
            NavbarConfig.activeMenuItem.title
          </h4>
          <!-- RD Navbar Right Side Toggle -->
          <button class="rd-navbar-top-panel-toggle veil-md" data-rd-navbar-toggle=".rd-navbar-top-panel">
            <span></span>
          </button>
          <div class="rd-navbar-top-panel">
            <div class="rd-navbar-top-panel-left-part">
              <ul class="list-unstyled">
                <li>
                  <div class="unit unit-horizontal unit-middle unit-spacing-xs">
                    <div class="unit-left">
                      <span class="icon mdi mdi-phone text-middle"></span>
                    </div> <!-- div.unit-left -->
                    <div class="unit-body">
                      <a href="callto:#">| +84 909 865 842</a>
                      <a class="reveal-block reveal-md-inline-block" href="callto:#">| +84 909 765 697</a>
                    </div>
                  </div> <!-- div.unit-spacing-xs -->
                </li>
                <li>
                  <div class="unit unit-horizontal unit-middle unit-spacing-xs">
                    <div class="unit-left">
                      <span class="icon mdi mdi-map-marker text-middle"></span>
                    </div>
                    <div class="unit-body">
                      <a href="#">Chung cư Melody, Tân Phú, TPHCM</a>
                    </div>
                  </div>
                </li>
              </ul><!-- ul.list-unstyled -->
            </div><!-- div.rd-navbar-top-panel-left-part -->
          </div><!-- div.rd-navbar-top-panel -->
        </div> <!-- div.rd-navbar-panel -->
      </div> <!-- div.rd-navbar-inner -->
    </nav>
  </div>
</template>

<script>
  export default {
    data() {
      return {
        NavbarConfig: {
          skin: '',
          attributes: '',
          logo: '',
          activeMenuItem: {
            title: '',
            link: ''
          },
          links: []
        }
      }
    }
  }
</script>

<style media="screen">

</style>
