<template lang="html">
  <section class="bg-catskill">
    <div class="shell section-70 section-md-114">
      <h2 class="text-bold view-animate fadeInUpSmall delay-04">
        {{ this.LatestPosts.title }}
      </h2>
      <hr class="divider bg-madison view-animate fadeInUpSmall delay-06">
      <div class="range offset-top-60 text-left range-xs-center">
        <div class="cell-md-4" v-for="(posts, index) in this.getPostsList">
          <div class="range">
            <!-- begin post -->
            <div class="cell-sm-6 cell-md-12 offset-md-top-30" v-for="post in posts">
              <article class="post-news post-news-mod-1 view-animate fadeInRightSm delay-1">
                <a :href="post.linkTo">
                  <img class="img-responsive img-fullwidth" :src="post.image.url" :alt="post.image.alt" width="370" height="240">
                  <div class="post-news-body">
                    <h6>
                      <a :href="post.linkTo">{{ post.title }}</a>
                    </h6>
                    <div class="offset-top-20">
                      <p>{{ post.description }}</p>
                    </div><!-- end div.offset-top-20 -->
                    <div class="post-news-meta offset-top-20">
                      <span class="icon icon-xs mdi mdi-calendar-clock text-middle text-madison">
                      </span>
                      <span class="text-middle inset-left-10 text-italic text-black">{{ post.time }}</span>
                    </div><!-- end div.post-news-meta -->
                  </div><!-- end div.post-news-body -->
                </a>
              </article><!-- end article.post-news -->
            </div>
            <!-- end post -->
          </div><!-- end div.range -->
        </div><!-- end div.cell-md-4 -->
      </div><!-- end div.range.offset-top-60 -->
      <div class="offset-top-50">
        <a :href="this.LatestPosts.viewAll.url" class="btn btn-primary">{{ this.LatestPosts.viewAll.text }}</a>
      </div>
    </div><!-- end div.shell-section-70 -->
  </section><!-- end div.bg-catskill -->
</template>

<script>
export default {
  computed: {
    getPostsList: function(postsList) {
      var result = [];
      for (var index = 0; index < this.LatestPosts.posts.length; index+=2) {
        if (index < this.LatestPosts.posts.length -1) {
          result.push([this.LatestPosts.posts[index], this.LatestPosts.posts[index + 1]]);
        } else {
          result.push([this.LatestPosts.posts[index]]);
        }
      }
      return result;
    }
  },
  data() {
    return {
      LatestPosts: {
        title: 'Bài viết mới nhất',
        viewAll: {
          text: 'Xem tất cả',
          url: 'modern-news.html'
        },
        posts: [
          {
            title: 'Bạn sẽ cần đến 10 cách chế biến hải sản này',
            description: 'Không phải ai cũng cảm thấy thoải moái khi chế biến món ăn từ hải sản. Sẽ rất nhiều lần chúng ta làm cho món hải sản thiếu đi điều gi đó.',
            time: '2 ngày trước',
            image: {
              url: 'images/blog/news-04-770x500.jpg',
              alt: 'Post Image'
            },
            linkTo: 'new-posts-page.html'
          },
          {
            title: '15 phút với món xà lách',
            description: 'Hôm nay, với 15 phút dành cho món xà lách trộn đơn giản để bổ sung thêm chất xơ cùng vitamin.',
            time: '3 ngày trước',
            image: {
              url: 'images/blog/news-05-770x500.jpg',
              alt: 'Post Image'
            },
            linkTo: 'new-posts-page.html'
          },
          {
            title: 'Bánh xăng uých cho bữa trưa',
            description: 'Bữa trưa nhanh cùng bánh mì vẫn đảm bảo năng lượng và dinh dưỡng cho ngày làm việc còn lại.',
            time: '5 ngày trước',
            image: {
              url: 'images/blog/news-08-770x500.jpg',
              alt: 'Post Image'
            },
            linkTo: 'new-posts-page.html'
          }
        ]
      }
    }
  }
}
</script>

<style lang="css">
</style>
