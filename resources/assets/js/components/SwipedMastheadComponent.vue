<template lang="html">
  <div data-height="100vh" data-loop="false" data-dragable="false" data-min-height="480px" data-slide-effect="true" class="swiper-container swiper-slider">
    <div class="swiper-wrapper">
      <div :data-slide-bg="this.Masthead.backgroundImageUrl" style="background-position: 80% center" class="swiper-slide">
        <div class="swiper-slide-caption">
          <div class="container">
            <div class="range range-xs-center range-lg-left">
              <div class="cell-md-9 text-md-left cell-xs-10">
                <div class="jumbotron-custom bg-white-transparent">
                  <div style="z-index:900;" class="top-banner">
                    <h4 class="text-white">{{ this.Masthead.subTitle }}</h4>
                  </div><!-- end div.top-banner -->
                  <div>
                    <h1 class="text-bold">
                      <a href="#">{{ this.Masthead.title }}</a>
                    </h1>
                  </div>
                  <div class="offset-top-20 offset-xs-top-40 offset-xl-top-60">
                    <h5 class="text-regular font-default">{{ this.Masthead.description }}</h5>
                  </div><!-- end div.offset-xl-top-60 -->
                  <div class="offset-top-20 offset-xl-top-40">
                    <a href="#" class="btn btn-primary">{{ this.Masthead.viewRecipesTitle }}</a>
                  </div><!-- end div.offset-xl-top-40 -->
                </div><!-- end div.bg-white-transparent -->
              </div><!-- end div.cell-xs-10 -->
            </div><!-- end div.range-xs-cneter -->
          </div><!-- end div.container -->
        </div><!-- end div.swiper-slide-caption -->
      </div><!-- end div.swiper-slide -->
    </div><!-- end div.swiper-wrapper -->
  </div><!-- end div.swiper-container.swiper-slider -->
</template>

<script>
export default {
  data() {
    return {
      Masthead: {
        backgroundImageUrl: 'images/slide-01-1920x810.jpg',
        subTitle: 'Món ăn cho hôm nay',
        title: 'Xà lách trộn cà rốt cùng phô-mát',
        description: 'Lúc nào món rau sà lách vẫn có hương vị cũ? Chắc hẳn bạn sẽ hứng thú với công thức đơn giản với sự kết hợp của các nguyên liệu có thể bạn đã có sẵn trong bếp của mình theo một cách thú vị hơn.',
        viewRecipesTitle: 'Xem công thức'
      }
    }
  }
}
</script>

<style lang="css">
</style>
