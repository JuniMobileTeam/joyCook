<template lang="html">
  <section class="text-center">
    <!-- RD Parallax -->
    <div class="rd-parallax" data-on="false" data-md-on="true">
      <div class="rd-parallax-layer" data-speed="0.35" data-type="media" :data-url="this.SubIntroduction.backgroundImageUrl">
      </div><!-- first rd-parallax-layer -->
      <div class="rd-parallax-layer" data-speed="0.05" data-type="html">
        <div class="shell section-70 section-md-155 context-dark">
          <h2 class="text-bold">{{ this.SubIntroduction.title }}</h2>
          <div class="offset-top-35" v-html="this.SubIntroduction.description">
          </div><!-- end div.offset -->
          <div class="offset-top-35 offset-md-top-50">
            <a class="btn btn-primary" :href="this.SubIntroduction">{{ this.SubIntroduction.buttonTitle }}</a>
          </div><!-- end div.offset-top-35.offset-md-top-50 -->
        </div><!-- end div.shell -->
      </div><!-- end second rd-parallax-layer -->
    </div><!-- end div.rd-parallax -->
  </section>

</template>

<script>
export default {
  data() {
    return {
      SubIntroduction: {
        backgroundImageUrl: 'images/parallax-02.jpg',
        title: 'Theo dõi, Học và Nấu',
        description: 'Từ mong muốn, chúng tôi muốn mang đến bạn những công thức nấu ăn phù hợp nhất từ những món súp truyền thống, món  <br class="visible-lg-inline"> gà nướng thơm nồng đến những chiếc bánh và mòn kem tráng miệng.',
        linkTo: 'recipes.html',
        buttonTitle: 'Bắt đầu'
      }
    }
  }
}
</script>

<style lang="css">
</style>
