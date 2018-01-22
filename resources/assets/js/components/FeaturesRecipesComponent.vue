<template lang="html">
  <div class="rd-parallax" data-on="false" data-md-on="true">
    <div data-speed="0.35" data-type="media" data-url="images/parallax-01.jpg" class="rd-parallax-layer" >
    </div>
    <div class="rd-parallax-layer" data-speed="0.05" data-type="html">
      <div class="shell section-70 section-md-114">
        <h2 class="text-bold view-animate fadeInUpSmall delay-04">
          {{this.FeaturesRecipes.title}}
        </h2>
        <hr class="divider bg-gray-base view-animate fadeInUpSmall delay-06">
        <div class="offset-top-35 offset-md-top-60 text-base view-animate fadeInUpSmall delay-04" v-html="this.FeaturesRecipes.description">
        </div><!-- end div.offset-top-35 fadeInUpSmall -->
        <div class="range range-xs-center offset-top-60">
          <div class="cell-sm-6 cell-md-4 cell-lg-3" v-for="recipes in this.FeaturesRecipes.recipes" :class="[recipes.divClass]">
            <article class="post-news bg-white post-news-mod-2" :class="[recipes.articleClass]">
              <a :href="recipes.linkTo">
                <img class="img-responsive" :src="recipes.image.url" width="370" height="240" :alt="recipes.image.alt">
              </a>
              <div class="post-news-body-variant-1">
                <h6>
                  <a :href="recipes.linkTo">{{ recipes.name }}</a>
                </h6>
                <a :href="recipes.linkTo" class="btn btn-primary">this.FeaturesRecipes.viewButtonTitle</a>
              </div><!-- end div.post-news-body-variant-1 -->
            </article><!-- end article.post-news -->
          </div><!-- end div.cell-sm-6 fadeInRightSm -->
        </div><!-- end div.range -->
      </div><!-- end div.shell -->
    </div><!-- end div.rd-parallax-layer -->
  </div><!-- end div.rd-parallax -->

</template>

<script>
export default {
  data() {
    return {
      FeaturesRecipes: {
        title: 'Món ăn cho hôm nay',
        description: 'Bên dưới là những món ăn nổi bật được chia sẻ bởi <br class="visible-lg-inline">thành viên của Joy Cooking cũng như từ các chuyên gia về ẩm thực.',
        recipes: [
          {
            divClass: 'view-animate fadeInRightSm delay-08',
            articleClass: '',
            name: 'Gà lăn bột',
            image: {
              url: 'images/home-02-370x240.jpg',
              alt: 'Gà lăn bột'
            },
            linkTo: 'recipies.html',
          },
          {
            divClass: ' offset-top-30 offset-sm-top-0',
            articleClass: 'view-animate fadeInRightSm delay-03',
            name: 'Bắp cải trộn',
            image: {
              url: 'images/home-03-370x240.jpg',
              alt: 'Bắp cải trộn'
            },
            linkTo: 'recipies.html'
          }
        ],
        viewButtonTitle: 'Xem công thức'
      }
    }
  }
}
</script>

<style lang="css">
</style>
