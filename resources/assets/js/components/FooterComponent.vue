<template lang="html">
  <footer class="page-footer bg-catskill section-60">
    <div class="shell">
      <div class="range range-xs-center range-sm-middle text-md-left">
        <div class="cell-xs-10 cell-md-6">
          <!-- Footer brand -->
          <a href="index.html" class="reveal-inline-block">
            <div class="unit unit-xs-middle unit-md unit-md-horizontal unit-spacing-xxs">
              <div class="unit-left">
                <img class="img-responsive reveal-inline-block" src="images/logo-170x172.png" alt="Footer Logo" width="70" height="70">
              </div><!-- end div.unit-left -->
              <div class="unit-body text-xl-left">
                <div>
                  <h6 class="barnd-name text-ubold">Joy Of Cook</h6>
                </div>
                <div>
                  <p class="brand-slogan text-gray text-italic font-accent">Bữa cơm hạnh phúc</p>
                </div>
              </div><!-- end div.unit-body.text-xl-left -->
            </div><!-- end div.unit.unit-spacing-xxs -->
          </a>
        </div><!-- end div.cell-xs-10 -->

        <div class="cell-xs-10 cell-md-6 text-md-right offset-top-20 offset-md-top-0">
          <p class="text-dark">
            &copy; <span id="copyright-year"></span>&nbsp;<span v-html="this.FooterData.privacyText"></span>
          </p>
        </div><!-- end div.cell-xs-10.offset-md-top-0 -->
      </div><!-- end div.range.range-xs-center -->
    </div> <!-- end div.shell -->
  </footer>
</template>

<script>
export default {
  data() {
    return {
      FooterData: {
        image: {
          url: 'images/logo-170x172.png',
          alt: 'Footer Logo'
        },
        appName: 'Joy Of Cook',
        slogan: 'Bữa cơm hạnh phúc',
        privacyText: 'All Rights Reserved Terms of Use and <a href="privacy.html" class="text-dark">Privacy Policy</a>'
      }
    }
  }
}
</script>

<style lang="css">
</style>
