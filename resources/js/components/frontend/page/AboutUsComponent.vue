<template>
<!-- floating assets -->
<img
  class="floating-bubble-1 absolute right-0 top-0 -z-[1]"
  src="images/floating-bubble-1.svg"
  alt=""
/>
<img
  class="floating-bubble-2 absolute left-0 top-[387px] -z-[1]"
  src="images/floating-bubble-2.svg"
  alt=""
/>
<img
  class="floating-bubble-3 absolute right-0 top-[605px] -z-[1]"
  src="images/floating-bubble-3.svg"
  alt=""
/>
<!-- ./end floating assets -->

<!-- Common hero -->
<section class="page-hero py-16">
  <div class="container">
    <div class="text-center">
      <ul
        class="breadcrumb inline-flex h-8 items-center justify-center space-x-2 rounded-3xl bg-theme-light px-4 py-2"
      >
        <li class="leading-none text-dark">
          <a class="inline-flex items-center text-primary" href="#">
            <svg
              class="mr-1.5"
              width="15"
              height="15"
              viewBox="0 0 16 16"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M13.1769 15.0588H10.3533V9.41178H5.64744V15.0588H2.82391V6.58825H1.88274V16H14.118V6.58825H13.1769V15.0588ZM6.58862 15.0588V10.353H9.41215V15.0588H6.58862ZM15.8084 6.09225L15.2512 6.85178L8.00038 1.52472L0.749559 6.8499L0.192383 6.09131L8.00038 0.357666L15.8084 6.09225Z"
                fill="black"
              />
            </svg>
            <span class="text-sm leading-none">Home</span>
          </a>
        </li>
        <li class="leading-none text-dark">
          <span class="text-sm leading-none">/ About Us</span>
        </li>
      </ul>
    </div>
    <div class="page-hero-content mx-auto max-w-[768px] text-center">
      <h1 class="mb-5 mt-8">About our company</h1>
      <p>
        Donec sollicitudin molestie malesda. Donec sollitudin molestie
        malesuada. Mauris pellentesque nec, egestas non nisi. Cras ultricies
        ligula sed magna dictum porta. Lorem
      </p>
      <div class="mt-11 justify-center sm:flex">
        <a class="btn btn-primary m-3 block sm:inline-block" href="#"
          >Download The Theme</a
        >
        <a
          class="btn btn-outline-primary m-3 block min-w-[160px] sm:inline-block"
          href="#"
          >Learn more</a
        >
      </div>
    </div>
    <div class="counter mt-16">
      <div class="row mx-0 rounded-[20px] bg-white px-10 shadow-lg lg:py-10">
        <div
          class="border-border px-10 py-10 text-center sm:col-6 lg:col-3 lg:border-r lg:py-0"
        >
          <h2>
            <span class="count">25M</span> <span class="text-[#A3A1FB]">+</span>
          </h2>
          <p>Customers</p>
        </div>
        <div
          class="border-border px-10 py-10 text-center sm:col-6 lg:col-3 lg:border-r lg:py-0"
        >
          <h2>
            <span class="count">440M</span>
            <span class="text-[#5EE2A0]">+</span>
          </h2>
          <p>Products sold</p>
        </div>
        <div
          class="border-border px-10 py-10 text-center sm:col-6 lg:col-3 lg:border-r lg:py-0"
        >
          <h2>
            <span class="count">50K</span> <span class="text-primary">+</span>
          </h2>
          <p>Online stores</p>
        </div>
        <div class="px-10 py-10 text-center sm:col-6 lg:col-3 lg:py-0">
          <h2>
            <span class="count">20K</span> <span class="text-[#FEC163]">+</span>
          </h2>
          <p>Transactions</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- end Common hero -->

<!-- Gallery -->
<section class="section">
  <div class="container">
    <div class="row justify-center text-center">
      <div class="col-8">
        <h2>We started with one single goal Empower entrepreneurs</h2>
      </div>
    </div>
    <div class="row mt-2.5">
      <div class="md:col-6">
        <div class="relative mt-8">
          <img
            class="w-full object-cover"
            width="480"
            height="328"
            src="images/about/gallery-img-1.png"
            alt=""
          />
        </div>
        <div class="relative mt-8">
          <img
            class="w-full object-cover"
            width="480"
            height="274"
            src="images/about/gallery-img-2.png"
            alt=""
          />
          <img
            class="absolute -bottom-5 -left-5 -z-[1]"
            src="images/shape-2.svg"
            alt=""
          />
        </div>
      </div>
      <div class="md:col-6">
        <div class="relative mt-8">
          <img
            class="w-full object-cover"
            width="480"
            height="540"
            src="images/about/gallery-img-3.png"
            alt=""
          />
          <img
            class="absolute -bottom-4 -right-5 -z-[1] h-16 w-16"
            src="images/shape.svg"
            alt=""
          />
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Gallery -->

</template>

<script>


import statusEnum from "../../../enums/modules/statusEnum";

export default {
    name: "AboutUsComponent",
    computed: {
        outlets: function () {
            return this.$store.getters['frontendOutlet/lists'];
        },
        setting: function () {
            return this.$store.getters['frontendSetting/lists'];
        },
    },
    mounted() {
        this.$store.dispatch('frontendOutlet/lists', {order_column: 'id', order_type : 'asc', status : statusEnum.ACTIVE }).then().catch()
    }
}
</script>
