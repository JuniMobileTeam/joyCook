<template lang="html">
  <section class="section-image-aside section-image-aside-left text-sm-left">
    <div class="shell">
      <div class="range range-xs-center range-lg-right offset-top-0">
        <div class="cell-xs-12 cell-lg-4">
          <div class="section-image-aside-body section-70 section-md-114 section-md-bottom-100">
            <div class="range">
              <div class="cell-sm-6 cell-lg-12">
                <h6 class="text-bold">{{this.ContactInfo.contactUs.title}}</h6>
                <div class="text-subline">
                </div><!-- end div.text-subline -->
                <div class="offset-top-30">
                  <ul class="list-unstyled contact-info list">
                    <li><!-- first item -->
                      <div class="unit unit-horizontal unit-middle unit-spacing-xs">
                        <div class="unit-left">
                          <span class="icon mdi mdi-phone text-middle icon-xs text-madison">
                          </span><!-- end span.text-madison -->
                        </div><!-- end div.unit-left -->
                        <div class="unit-body">
                          <a href="callto:#" class="text-dark reveal-block reveal-md-inline-block" v-for="phone in this.ContactInfo.contactUs.phones" >{{phone}}</a>
                        </div><!-- end div.unit-body -->
                      </div><!-- end div.unit.unit-horizontal -->
                    </li><!-- end first item -->
                    <li class="offset-top-15"><!-- second item -->
                      <div class="unit unit-horizontal unit-middle unit-spacing-xs">
                        <div class="unit-left">
                          <span class="icon mdi mdi-map-marker text-middle icon-xs text-madison"></span>
                        </div><!-- end div.unit-left -->
                        <div class="unit-body text-left">
                          <a href="#" class="text-dark">{{this.ContactInfo.contactUs.address}}</a>
                        </div><!-- end div.unit-body -->
                      </div><!-- end div.unit.unit-horizontal -->
                    </li><!-- end second item -->
                    <li class="offset-top-15">
                      <div class="unit unit-horizontal unit-middle unit-spacing-xs">
                        <div class="unit-left">
                          <span class="icon mdi mdi-email-open text-middle icon-xs text-madison"></span>
                        </div>
                        <div class="unit-body">
                          <a href="mailto:#">{{this.ContactInfo.contactUs.email}}</a>
                        </div>
                      </div><!-- end div.unit-horizontal -->
                    </li>
                  </ul><!-- end ul.list-unstyled.contact-info.ist -->
                  <ul class="list-inline list-inline-sm list-inline-madison offset-top-30">
                    <li v-for="social in this.ContactInfo.contactUs.socials">
                      <a :href="social.linkTo" class="icon icon-xxs icon-rect icon-gray-light-filled" :class="[social.iconClass]"></a>
                    </li>
                  </ul><!-- end second UL -->
                </div><!-- end div.offset-top-30 -->
              </div><!-- end div.cell-sm-6.cell-lg-12 -->

              <div class="cell-sm-6 cell-lg-12">
                <h6 class="text-bold offset-top-30 offset-sm-top-0 offset-lg-top-50">
                  {{ this.ContactInfo.newsletter.title }}
                </h6>
                <div class="text-subline"></div>
                <div class="offset-top-30 text-left">
                  <p>{{ this.ContactInfo.newsletter.description }}</p>
                </div>
                <div class="offset-top-10">
                  <!-- consider to make subcribe form into a component -->
                  <form class="rd-mailform form-subscribe" data-form-output='form-subscribe-footer' data-form-type="subscribe" method="post" action="php/rd-mailform.php">
                    <div class="form-group">
                      <div class="input-group input-group-sm">
                        <input class="form-control" :placeholder="this.ContactInfo.newsletter.emailPlaceholder" type="email" name="email" data-constraints="@Required @Email">
                        <span class="input-group-btn">
                          <button type="submit" class="btn btn-sm btn-primary">{{ this.ContactInfo.newsletter.submitText }}</button>
                        </span>
                      </div>
                    </div><!-- end div.form-group -->
                  </form>
                </div>
              </div><!-- end div.cell-sm-6.cell-lg-12 -->
            </div><!-- end div.range -->
          </div><!-- end div.section-image-aside-body.section-70 -->
        </div><!-- end div.cell-xs-12.cell-lg-4 -->
      </div><!-- end div.range.range-xs-center -->
    </div><!-- end div.shell -->
  </section>
</template>

<script>
export default {
  data() {
    return {
      ContactInfo: {
        contactUs: {
          title: 'Liên hệ',
          phones: ['+84 909865842', ' +84 909765695'],
          address: 'The Medoly Residences, đường Âu Cơ, quận Tân Phú, TP Hồ Chí Minh',
          email: 'info@joycooking.vn',
          socials: [
            {
              iconClass: 'fa-facebook',
              linkTo: 'facebook'
            },
            {
              iconClass: 'fa-twitter',
              linkTo: 'twitter'
            },
            {
              iconClass: 'fa-google',
              linkTo: 'google'
            },
            {
              iconClass: 'fa-instagram',
              linkTo: 'instagram'
            }
          ]
        },
        newsletter: {
          title: 'Bản tin',
          description: 'Nhập email để nhận cập nhật về tin tức, sự kiện và công thức mới nhất.',
          emailPlaceholder: 'Địa chỉ email',
          submitText: 'Đăng kí'
        }
      }
    }
  }
}
</script>

<style lang="css">
</style>
