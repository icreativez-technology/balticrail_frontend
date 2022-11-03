<template>
  <main-header/>
  <sidebar/>
  <div class="app-content content dashboard">
  <div class="content-wrapper content-wrapper-2">
    <div class="content-body">
      <!-- Basic form layout section start -->
      <section id="configuration">
        <div class="row">
          <div class="col-12">
            <h1 class="ml-1 main-heading">Dashboard</h1>
            <div class="white-div border-20 px-lg-5 px-2">
              <h2 class="sub-heading mt-2 ml-1">Quick Stats</h2>
              <div class="row align-items-center">
                <div class="col-xl-6  w-100 mt-2">
                  <div class="sm-card d-flex justify-content-between align-items-center px-4 py-3 px-md-1 px-xl-2">
                    <div>
                      <h6 class="p-lg bold">Total Bookings</h6>
                      <h5 class="nunito bold mt-3">100</h5>
                    </div>
                    <div class="c100 p70 big jellybean"> <span>100.0%</span>
                      <div class="slice">
                        <div class="bar blue-bar"></div>
                        <div class="fill blue-bar"></div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-xl-6 w-100 mt-2">
                  <div class="sm-card d-flex justify-content-between align-items-center px-4 py-3 px-md-1 px-xl-2">
                    <div>
                      <h6 class="p-lg bold">Revenue This Week</h6>
                      <h5 class="nunito bold mt-3">100</h5>
                    </div>
                    <div class="c100 p70 big jellybean"> <span>100.0%</span>
                      <div class="slice">
                        <div class="bar blue-bar"></div>
                        <div class="fill blue-bar"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
</div>
</template>
<script>
import MainHeader from "../../core/header/index.vue";
import Sidebar from "../../core/sidebar/index.vue";
export default {
  components:{
    MainHeader,
    Sidebar
  },
    setup() {
        
    },
}
</script>