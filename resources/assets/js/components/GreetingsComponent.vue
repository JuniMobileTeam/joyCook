<template lang="html">
  <section class="section-70 section-md-100">
    <div class="shell">
      <div class="range text-sm-left range-sm-justify range-sm-reverse">
        <div class="cell-sm-5">
          <div class="img-wrap-2 view-animate zoomInSmall duration-06">
            <figure><img :src="this.Greetings.backgroundImage.url" width="620" height="350" :alt="this.Greetings.backgroundImage.alt" class="img-responsive reveal-inline-block"></figure>
          </div>
        </div>
        <div class="cell-sm-7 offset-top-50 offset-sm-top-0">
          <h2 class="text-bold view-animate fadeInLeftSm delay-06" v-html="this.Greetings.firstStatement"></h2>
          <hr class="divider bg-madison hr-sm-left-0 view-animate fadeInLeftSm delay-08">
          <div class="offset-top-35 offset-md-top-60 view-animate fadeInLeftSm delay-1">
            <p v-html="this.Greetings.secondStatement"></p>
          </div>
          <div class="offset-top-30 view-animate fadeInLeftSm delay-12"><a href="#" class="btn btn-icon btn-icon-right btn-madison"><span class="icon fa-arrow-right"></span><span>{{ this.Greetings.viewMoreTitle }}</span></a></div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  data() {
    return {
      Greetings: {
        backgroundImage: {
          url: 'images/home-01-620-350.jpg',
          alt: 'Greetings background'
        },
        firstStatement: 'Chào mừng bạn đến với <br class="visible-lg-inline"> Joy Cooking',
        secondStatement: 'Good Food is a unique resource, designed as a single place for new recipes lovers and food enthusiasts. It features the largest collection of professionally-tested recipes online from food experts at the magazines and cookbooks you love and trust--including Cooking Light, Southern Living, Sunset, Coastal Living, Real Simple, and more.',
        viewMoreTitle: 'Tìm hiểu thêm'
      }
    }
  }
}
</script>
