<template>
    <LoadingComponent :props="loading"/>
    <section v-if="products.length > 0" class="mb-7 sm:mb-12">
        <div class="container">
            <div class="flex items-center justify-between gap-4 mb-5 sm:mb-7">
                <h2 class="text-2xl sm:text-4xl font-bold capitalize">
                    {{ $t('label.flash_sale') }}
                </h2>
                <router-link v-if="products.length === 8" :to="{name: 'frontend.flashSale.products'}" class="py-2 px-4 text-sm sm:py-3 sm:px-6 rounded-3xl capitalize sm:text-base font-semibold whitespace-nowrap bg-primary-slate text-primary transition-all duration-300 hover:bg-primary hover:text-white">
                    {{ $t('label.show_more') }}
                </router-link>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 sm:gap-6">
                <ProductListComponent v-if="products.length > 0" :products="products"/>
            </div>
        </div>
    </section>


        <!-- faq section -->
        <section class="faq-section max-w-3xl mx-auto p-4 pb-6">
        <h2 class="text-2xl font-bold mb-6 text-center text-purple-900">Have questions?<br>We have answers!</h2>

        <div class="faq-item rounded-[32px] border border-[#D9DBE9] pl-4 pr-4 m-2 w-full">
            <input type="checkbox" id="faq1" class="hidden">
            <label for="faq1" class="flex justify-between items-center cursor-pointer py-4">
                <span class="font-medium text-purple-900">Does it contain added sugar?</span>
                <svg aria-hidden="true" focusable="false"
                    class="w-4 h-4 text-purple-600 transition-transform duration-200 transform rotate-0 icon icon-caret"
                    viewBox="0 0 10 6">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M9.354.646a.5.5 0 00-.708 0L5 4.293 1.354.646a.5.5 0 00-.708.708l4 4a.5.5 0 00.708 0l4-4a.5.5 0 000-.708z"
                        fill="currentColor"></path>
                </svg>
            </label>
            <div class="faq-answer hidden text-purple-700 pb-4">
                Adishtu's Strawberry Energy Bar is made with dried strawberries, cashews, almonds, peanut butter, and
                dates. It offers a perfect balance of tartness and sweetness.
            </div>
        </div>

        <div class="faq-item rounded-[32px] border border-[#D9DBE9] pl-4 pr-4 m-2 w-full">
            <input type="checkbox" id="faq2" class="hidden">
            <label for="faq2" class="flex justify-between items-center cursor-pointer py-4">
                <span class="font-medium text-purple-900">Can these bars be consumed by kids?</span>
                <svg aria-hidden="true" focusable="false"
                    class="w-4 h-4 text-purple-600 transition-transform duration-200 transform rotate-0 icon icon-caret"
                    viewBox="0 0 10 6">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M9.354.646a.5.5 0 00-.708 0L5 4.293 1.354.646a.5.5 0 00-.708.708l4 4a.5.5 0 00.708 0l4-4a.5.5 0 000-.708z"
                        fill="currentColor"></path>
                </svg>
            </label>
            <div class="faq-answer hidden text-purple-700 pb-4">
                Absolutely! Adishtu's Strawberry Energy Bar contains no added sugar, making it a suitable snack for
                kids.
            </div>
        </div>

        <!-- Add more FAQ items as needed following the same structure -->

    </section>


</template>

<script>
import ProductListComponent from "../components/ProductListComponent.vue";
import LoadingComponent from "../components/LoadingComponent.vue";

export default {
    name: "FlashSaleComponent",
    components: {
        ProductListComponent,
        LoadingComponent
    },
    data() {
        return {
            loading: {
                isActive: false,
            }
        }
    },
    computed: {
        products: function () {
            return this.$store.getters["frontendProduct/flashSaleProducts"];
        },
    },
    mounted() {
        this.loading.isActive = true;
        this.$store.dispatch("frontendProduct/flashSaleProducts", {
            paginate: 0,
            rand: 8
        }).then(res => {
            this.loading.isActive = false;
        }).catch((err) => {
            this.loading.isActive = false;
        });
    },
}
</script>
