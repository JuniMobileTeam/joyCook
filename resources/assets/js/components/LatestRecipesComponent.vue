<template lang="html">
  <section>
    <div class="shell-wide section-70 section-md-114">
      <h2 class="text-bold view-animate fadeInUpSmall delay-04">
        {{ this.LatestRecipes.title }}
      </h2><!-- end h2.text-bold.view-animate -->
      <hr class="divider bg-madison view-animate fadeInUpSmall delay-06">
      <div class="range offset-top-60 range-xs-center">
        <!-- start recipe loop -->
        <div class="cell-sm-6 cell-md-5 cell-xl-3" v-for="recipe in this.LatestRecipes.recipes">
          <article class="post-event view-animate fadeInRightSm delay-08">
            <div class="post-event-img-overlay">
              <img class="img-responsive" :src="recipe.image.url" :alt="recipe.image.alt" width="420" height="420">
              <div class="post-event-overlay context-dark">
                <a class="btn btn-primary" :href="LatestRecipes.apply.url">{{ LatestRecipes.apply.text }}</a>
                <div class="offset-top-20">
                  <a class="btn btn-default" :href="LatestRecipes.findOutMore.url">{{ LatestRecipes.findOutMore.text }}</a>
                </div><!-- end div.offset-top-20 -->
              </div><!-- end div.post-event-overlay.context-dark -->
            </div><!-- end div.post-event-img-overlay -->
            <div class="unit unit-lg unit-lg-horizontal">
              <div class="unit-left">
                <div class="post-event-meta text-center">
                  <div class="h3 text-bold reveal-inline-block reveal-lg-block">
                    {{ recipe.date.day }}
                  </div><!-- end div.h3 -->
                  <p class="reveal-inline-block reveal-lg-block">
                    {{ recipe.date.month }}
                  </p><!-- end p.reveal-inline-block -->
                  <span class="text-bold reveal-inine-block reveal-lg-block inset-left-10 inset-lg-left-0">
                    {{ recipe.date.time }}
                  </span><!-- end span.text-bold.reveal-inline-block -->
                </div><!-- end div.post-event-meta -->
              </div><!-- end div.unit-left -->
              <div class="unit-body">
                <div class="post-event-body text-lg-left">
                  <h6>
                    <a :href="recipe.linkTo">{{ recipe.name }}</a>
                  </h6>
                  <ul class="list-inline list-inline-xs">
                    <li>
                      <a :href="recipe.poster.profileUrl">
                        <span class="icon icon-xxs mdi mdi-account-outline text-middle">
                        </span><!-- member icon -->
                        <span class="inset-left-10 text-dark text-middle">
                          {{ recipe.poster.name }}
                        </span><!-- member username -->
                      </a>
                    </li>
                  </ul><!-- end ul.list-inline.list-inline-xs -->
                </div><!-- end div.post-event-body -->
              </div><!-- end unit-body -->
            </div><!-- end div.unit -->
          </article><!-- end article.post-event -->
        </div><!-- end div.cell-sm-6.cell-md-5 -->
        <!-- end recipes loop -->
      </div><!-- end div.range.offset-top-60 -->

      <!-- view all recipes -->
      <div class="offset-top-50 offset-lg-top-56">
        <a class="btn btn-icon btn-icon-right btn-madison" :href="this.LatestRecipes.viewAll.url">
          <span class="icon fa-arrow-right"></span>
          <span>{{ this.LatestRecipes.viewAll.text }}</span>
        </a>
      </div><!-- end div.offset-top-50 -->
    </div><!-- end div.shell-wide -->
  </section>

</template>

<script>
export default {
  data() {
    return {
      LatestRecipes: {
        title: 'Các công thức mới được cập nhật',
        recipes: [
          {
            name: 'Sườn nướng tiêu xanh',
            linkTo: 'recipe-single.html',
            image: {
              url: 'images/blog/events-05-420x420.jpg',
              alt: 'Sườn nướng tiêu xanh'
            },
            poster: {
              name: 'Quốc Thái',
              profileUrl: 'team-member-profile.html'
            },
            date: {
              day: '31',
              month: 'Tháng 9',
              time: '5:00 chiều'
            }
          },
          {
            name: 'Xà lách, cà chua trộn cùng phô mai',
            linkTo: 'recipe-single.html',
            image: {
              url: 'images/blog/events-06-420x420.jpg',
              alt: 'Xà lách trộn'
            },
            poster: {
              name: 'Bích Hà',
              profileUrl: 'team-member-profile.html'
            },
            date: {
              day: '5',
              month: 'Tháng 7',
              time: '9:00 chiều'
            }
          }
        ],
        apply: {
          text: 'Tham gia',
          url: 'apply.html'
        },
        findOutMore: {
          text: 'Tìm hiểu thêm',
          url: 'recipe-single.html'
        },
        viewAll: {
          text: 'Xem tất cả công thức mới nhất',
          url: 'recipes.html'
        }
      }
    }
  }
}
</script>

<style lang="css">
</style>
