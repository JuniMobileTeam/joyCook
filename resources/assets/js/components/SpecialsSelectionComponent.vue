<template lang="html">
  <section class="section-70 section-md-114">
    <div class="shell">
      <h2>{{ this.SpecialsSelection.title }}</h2><!-- end h2.textbold.view-animate -->
      <hr class="divider bg-madsion view-animate fadeInRightSm delay-06"><!-- end hr divider -->
      <div class="offset-top-35 offset-md-top-60 view-animate fadeInRightSm delay-08" v-html="this.SpecialsSelection.description">
      </div><!-- end div.offset-top-35 -->
      <div class="range range-xs-center range-md-left offset-top-65 counters">
        <div class="cell-sm-6 cell-md-3 meal-item-container" v-for="meal in this.SpecialsSelection.meals" :class="[meal.divClass]">
          <div class="unit unit-vertical unit-spacing-xs view-animate zoomInSmall bottom-align-text" :class="[meal.deplayClass]">
            <div class="unit-left">
              <img :src="meal.icon.url" :alt="meal.icon.alt"  />
              <!-- icon svg -->
            </div><!-- end div.unit-left -->
            <div class="unit-body">
              <h6>
                <div class="text-bold">
                  {{ meal.text }}
                </div>
              </h6>
            </div><!-- end div.unit-body -->
          </div><!-- end div.unit -->
        </div><!-- end first div.cell-sm-6 -->
        <!-- end icon svg -->
      </div><!-- end div.range.counters -->
    </div><!-- end div.shell -->
  </section><!-- end section.section-70 -->

</template>

<script>
export default {
  data() {
    return {
      SpecialsSelection: {
        title: 'Món ăn tuyển chọn',
        description: 'Cùng với JoyCooking các bạn có thể tìm thấy công thức nấu ăn được xếp nhóm theo <br class="visible-lg-inline"> bữa ăn và nguyên liệu.',
        meals: [
          {
            icon: {
              url: 'images/breakfast_icon.png',
              alt: 'Breakfast Icon'
            },
            text: 'Bữa sáng',
            divClass: '',
            delayClass: 'delay-04'
          },
          {
            icon: {
              url: 'images/lunch_icon.png',
              alt: 'Lunch Icon'
            },
            text: 'Bữa trưa',
            divClass: 'offset-top-65 offset-sm-top-0',
            delayClass: 'delay-06'
          },
          {
            icon: {
              url: 'images/dinner_icon.png',
              alt: 'Dinner Icon'
            },
            text: 'Bữa tối',
            divClass: 'offset-top-65 offset-md-top-0',
            delayClass: 'delay-1'
          },
          {
            icon: {
              url: 'images/custom_meal_icon.png',
              alt: 'Meal Icon'
            },
            text: 'Món ăn tùy thích',
            divClass: 'offset-top-65 offset-md-top-0',
            delayClass: 'delay-1'
          }
        ]
      }
    }
  }
}
</script>

<style lang="css">
  .meal-item-container {
    position: relative;
    min-height: 140px;
    text-align: center;
  }

  .bottom-align-text {
    position: absolute;
    bottom: 0;
    right: 25%;
  }
</style>
