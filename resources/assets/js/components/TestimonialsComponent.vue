<template lang="html">
  <section class="context-dark position-relative">
    <!-- RD Parallax -->
    <div class="rd-parallax" data-on="false" data-md-on="true">
      <div class="rd-parallax-layer" data-speed="0.2" data-type="media" :data-url="this.Testimonials.backgroundImageUrl">
      </div><!-- end first div.rd-parallax-layer -->
      <div class="rd-parallax-layer" data-speed="0.05" data-type="html">
          <div>
            <div class="owl-carousel owl-carousel-default veil-xl-owl-dots veil-owl-nav reveal xl-owl-nav" data-items="1" data-nav="true" data-dots="true" data-loop="true" data-nav-class='["owl-prev fa-angle-left", "owl-next fa-angle-right"]'>
              <!-- first carousel item div -->
                <div v-for="quote in this.Testimonials.quotes">
                  <div class="shell section-70 section-xl-100 section-xl-bottom-114">
                    <div class="range range-xs-center range-xs-middle">
                      <div class="cell-sm-3 text-center cell-sm-push-2">
                        <div class="img-rect-sm">
                          <div>
                            <img class="img-responsive reveal-inline-block" :src="quote.quoter.avatar.url" :alt="quote.quoter.avatar.alt" width="230" height="230">
                          </div>
                        </div><!-- end div.img-rect-sm -->
                      </div><!-- end div.cell-sm-3.text-center -->
                      <div class="cell-sm-8 cell-lg-9 cell-sm-push-1">
                        <div class="quote-classic-boxed text-left">
                          <div class="quote-body">
                            <q>
                              {{ quote.text }}
                            </q>
                            <div class="offset-top-30 text-right">
                              <cite class="font-accent">
                                {{ quote.quoter.name }}
                              </cite>
                              <div class="offset-top-5">
                                <p class="text-dark text-italic">
                                  {{ quote.quoter.address }}
                                </p>
                              </div>
                            </div><!-- end div.offset-top-30 -->
                          </div><!-- end div.quote-body -->
                        </div><!-- end div.quote-classic-boxed -->
                      </div><!-- end div.cell-sm-8.cell-lg-9 -->
                    </div><!-- end div.range.range-xs-center -->
                  </div><!-- end div.shell.section-70 -->
                </div>
              <!-- end first carousel item div -->
            </div><!-- end div.owl-carousel.veil-xl-owl-dots -->
          </div><!-- end content outest div -->
      </div><!-- end second div.rd-parallax-layer -->
    </div><!-- end div.rd-parallax -->
  </section>

</template>

<script>
export default {
  data() {
    return {
      Testimonials: {
        backgroundImageUrl: 'images/parallax-03.jpg',
        quotes: [
          {
            quoter: {
              name: 'Bích Hằng',
              avatar: {
                url: 'images/users/user-debra-banks-230x230.jpg',
                alt: 'User avarta'
              },
              address: 'Nội trợ, Cẩm Mỹ, Đồng Nai',
            },
            text: 'Mình đã nấu theo hơn 10 công thức từ Joy Cooking, những món ăn mình làm đều rất ngon. Món gần đây nhất mình thử là Gà xào ớt, thêm một mòn ăn ngon mình tạo ra. Mình muốn dành lời cảm ơn đến những công thức được đăng tải trên trang Web, với những hướng dẫn cụ thể và dể làm theo, Joy Cooking là một người bạn hỗ trợ nấu ăn tuyệt vời!'
          },
          {
            quoter: {
              name: 'Cường Linh',
              avatar: {
                url: 'images/users/user-steven-alvarez-230x230.jpg',
                alt: 'User avarta'
              },
              address: 'Tài xế, Tân Bình, TP HCM',
            },
            text: 'Tôi đã làm theo món Gà Thổ Nhĩ Kỳ tối qua và đã làm nó rất ngon. Bên cạnh đó, tôi đã khám phá ra nhiều công thức để tạo nên món ăn ngón trên Joy Cooking. Cám ơn rất nhiều!'
          }
        ]
      }
    }
  }
}
</script>

<style lang="css">
</style>
