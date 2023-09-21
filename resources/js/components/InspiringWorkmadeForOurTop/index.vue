<template>
    <section id="InspiringWorkmadeForOurTop-Tiers" class="d-flex justify-content-center">
        <div class="container-fluid p-4  mb-0  " style="max-width: 1356px;">
            <div class="row p-0 mb-0  w-100 d-flex justify-content-center align-items-center">
                <div class="col-md-6  " id="InspiringSectionHeaderContent">
                    <h2 id="Inspiring-Work-Title">Inspiring work made for our top-tiers</h2>
                    <p>
                        Collaborate over projects with your team and clients with your team and clients optimised
                        for
                        mobile and tablet don't let slow
                    </p>
                </div>
                <div class="col-md-6 d-flex justify-content-end align-items-center ">

                    <a href="" style="text-decoration: none;margin-top: 49px;">See More <i
                            class="fa-solid fa-chevron-right"></i></a>
                </div>
            </div>

            <div class="row  gx-0 p-0 mb-0 d-flex justify-content-center " style="margin-top: 49px;">
                <div class="col-md-12  position-relative d-flex justify-content-center">
                    <button class="custom-prev-inspire" id="customer-prev" @click="prevSlideInspire">
                        <i class="fa-solid fa-chevron-left text-white"></i>
                    </button>
                    <button class="custom-next-inspire" id="customer-next" @click="nextSlideInspire">
                        <i class="fa-solid fa-chevron-right text-white"></i>
                    </button>
                    <div class="swiper-container-inspire" style="overflow-x: hidden;">

                        <div class="swiper-wrapper">
                            <div v-for="(story, index) in InspiringWorkmadeForOurTop" :key="index" class="swiper-slide">
                                <div class="card" style="min-width: 312px;
min-height: 318px;margin-right: 37px;">
                                    <div class="card-header p-0 d-flex justify-content-center aling-items-center  "
                                        style="overflow: hidden;">

                                        <img :src="story.image" class="w-100 h-100" alt="">
                                    </div>
                                    <div class="card-body">
                                        <ul class="d-flex p-0 m-0 list-unstyled w-100">
                                            <li class="p-1 d-flex justify-content-center align-items-center">
                                                <img :src="story.publisher_image" alt=""
                                                    style="width: 40px;height: 40px;border-radius: 50%;">
                                            </li>
                                            <li class="d-flex  justify-content-center flex-column aling-items-center">
                                                <h5 class="m-0"
                                                    style="font-size: 1rem;font-weight: 600;color: #0B092D;letter-spacing: 0.5px;">
                                                    {{ story.title }}</h5>
                                                <p class="p-0 m-0"
                                                    style="font-size: 0.8rem;font-weight: 400;color: #0B092D;letter-spacing: 0.5px;">
                                                    {{ story.publisher_name }}</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                            </div>


                        </div>
                    </div>

                    <!-- v-for="(inspire, index) in InspiringWorkmadeForOurTop" :key="index" -->
                    <!-- <div class="owl-carousel-inspire owl-carousel owl-theme">
                        <div class="item">

                            <div class="card h-100">
                                <div class="card-header d-flex justify-content-center align-items-center h-100">
                                    <img src="http://127.0.0.1:8000/storage//images/inspiring-work-made-for-our-top-tiers/1.png"
                                        class="h-100 w-auto" alt="">
                                </div>
                                <div class="card-body bg-white inspiring-card-body"
                                    style="background-color: #fff;border: 1px solid rgba(0,0,0,.125);">
                                    <ul class="d-flex p-0 m-0 list-unstyled w-100">
                                        <li class="">
                                            <img src="http://127.0.0.1:8000/storage//images/inspiring-work-made-for-our-top-tiers/logo-1.png"
                                                alt="">
                                        </li>
                                        <li>
                                            <h5>4insite Web App</h5>
                                            <p>by Shadi Saifan</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="item" style="height: 190px;">
                            <div class="card h-100">
                                <div class="card-header d-flex justify-content-center align-items-center h-100">
                                    <img src="http://127.0.0.1:8000/storage/images/inspiring-work-made-for-our-top-tiers/2.png"
                                        class="h-100 w-auto" alt="">
                                </div>
                                <div class="card-body bg-white inspiring-card-body"
                                    style="background-color: #fff;border: 1px solid rgba(0,0,0,.125);">
                                    <ul class="d-flex p-0 m-0 list-unstyled w-100">
                                        <li class="">
                                            <img src="http://127.0.0.1:8000/storage//images/inspiring-work-made-for-our-top-tiers/logo-2.png"
                                                alt="">
                                        </li>
                                        <li>
                                            <h5>4insite Web App</h5>
                                            <p>by Shadi Saifan</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="item" style="height: 190px;">
                            <div class="card h-100">
                                <div class="card-header d-flex justify-content-center align-items-center h-100">
                                    <img src="http://127.0.0.1:8000/storage/images/inspiring-work-made-for-our-top-tiers/2.png"
                                        class="h-100 w-auto" alt="">
                                </div>
                                <div class="card-body bg-white inspiring-card-body"
                                    style="background-color: #fff;border: 1px solid rgba(0,0,0,.125);">
                                    <ul class="d-flex p-0 m-0 list-unstyled w-100">
                                        <li class="">
                                            <img src="http://127.0.0.1:8000/storage//images/inspiring-work-made-for-our-top-tiers/logo-2.png"
                                                alt="">
                                        </li>
                                        <li>
                                            <h5>4insite Web App</h5>
                                            <p>by Shadi Saifan</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="item" style="height: 190px;">
                            <div class="card h-100">
                                <div class="card-header d-flex justify-content-center align-items-center h-100">
                                    <img src="http://127.0.0.1:8000/storage//images/inspiring-work-made-for-our-top-tiers/4.png"
                                        class="h-100 w-auto" alt="">
                                </div>
                                <div class="card-body bg-white inspiring-card-body"
                                    style="background-color: #fff;border: 1px solid rgba(0,0,0,.125);">
                                    <ul class="d-flex p-0 m-0 list-unstyled w-100">
                                        <li class="">
                                            <img src="http://127.0.0.1:8000/storage//images/inspiring-work-made-for-our-top-tiers/logo-4.png"
                                                alt="">
                                        </li>
                                        <li>
                                            <h5>4insite Web App</h5>
                                            <p>by Shadi Saifan</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </section>
</template>
<script scoped>
import Swiper from 'swiper';
import 'swiper/swiper-bundle.css';


export default {
    props: {
        InspiringWorkmadeForOurTop: [],
    },
    data() {
        return {
            swiper: null, // Store the Swiper instance
        };
    },
    mounted() {
        // Initialize Swiper
        this.swiper = new Swiper('.swiper-container-inspire', {
            slidesPerView: 2,
            breakpoints: {
                100: {
                    slidesPerView: 1,
                    spaceBetween: 20,
                },
                600: {
                    slidesPerView: 2,
                    spaceBetween: 40,
                },
                998: {
                    slidesPerView: 3,
                    spaceBetween: 40,
                },
                1024: {
                    slidesPerView: 4,
                    spaceBetween: 50,
                },
            },
        });
    },
    methods: {
        nextSlideInspire() {
            if (this.swiper) {
                this.swiper.slideNext();
            }
        },
        prevSlideInspire() {
            if (this.swiper) {
                this.swiper.slidePrev();
            }
        },

    },
};
</script>
