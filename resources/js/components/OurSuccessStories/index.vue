<template>
    <section id="Our-Success-Stories" style="background-color: #0B092D;">
        <div class="container p-0">
            <div class="d-flex justify-content-between">
                <h2 id="Our-Success-Stories-Title" class="mb-0 text-white">Our Success Stories</h2>
                <div class="btn-group slider-btn" style="margin-top: 119px;">
                    <button class="custom-prev-success" @click="nextSlide"><i class="fa-solid fa-chevron-left"></i></button>
                    <button class="custom-next-success" @click="prevSlide"><i
                            class="fa-solid fa-chevron-right"></i></button>
                </div>
            </div>
            <div class="row p-0 mb-0" style="margin-top: 45px;">
                <div class="col-md-12 p-0 mb-0">

                    <div class="swiper-container" style="overflow-x: hidden;">

                        <div class="swiper-wrapper">
                            <div v-for="(story, index) in successStories" :key="index" class="swiper-slide">
                                <div class="row">
                                    <div class="col-md-12  d-flex "
                                        style="height: 472px;background-color: #FFF;">
                                        <div class="Card-Content">
                                            <p>
                                                {{ limitedDescription(story.description) }}
                                            </p>
                                            <h4>{{ story.name }}</h4>
                                            <p class="no-wrap" style="margin-top: 4px;">{{ limitofname(story.designation) }}
                                            </p>
                                        </div>
                                        <div class="Card-Img  d-flex justify-content-center align-items-center"
                                            style="max-width: 250px;">
                                            <img :src="story.image" class="w-100" alt="">
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="row bg-white m-1 p-0" style="min-height: 80vh;">
                                    <div class="col-md-5  offset-1">
                                        <div class="row">
                                            <div class="col-md-12 p-4 pb-0 Success-Content-Card offset-1"
                                                style="border-right: 1px solid #D9D9D9;">
                                                <p>{{ limitedDescription(story.description) }}</p>
                                                <h4>{{ story.name }}</h4>
                                                <p class="no-wrap">{{ limitofname(story.designation) }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6  d-flex justify-content-center align-items-center">
                                        <img :src="story.image" alt="">
                                    </div>

                                </div> -->

                            </div>


                        </div>
                    </div>

                    <!-- <div class="item m-4">
                        <div class="row bg-white">
                            <div class="col-md-6 p-4 Success-Content-Card offset-1"
                                style="border-right: 1px solid #D9D9D9;">
                                <p>I would like to take this opportunity to share my sincere appreciation and admiration
                                    for the outstanding work done by Shayan Solutions. From the very beginning, they
                                    impressed me with their expertise in mobile app technologies.</p>
                                <h4>Trevor Stewart</h4>
                                <p>CEO, Dealer Inside</p>
                            </div>
                            <div class="col-md-5 d-flex justify-content-center align-items-center">
                                <img src="http://127.0.0.1:8000/storage/images/our-success-stories/1.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="item m-4">
                        <div class="row bg-white">
                            <div class="col-md-6 p-4 Success-Content-Card offset-1"
                                style="border-right: 1px solid #D9D9D9;">
                                <p>I would like to take this opportunity to share my sincere appreciation and admiration
                                    for the outstanding work done by Shayan Solutions. From the very beginning, they
                                    impressed me with their expertise in mobile app technologies.</p>
                                <h4>Shadi Saifan</h4>
                                <p>VP of Engineering, SwordSW</p>
                            </div>
                            <div class="col-md-5 d-flex justify-content-center align-items-center">
                                <img src="http://127.0.0.1:8000/storage/images/our-success-stories/1.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="item m-4">
                        <div class="row bg-white">
                            <div class="col-md-6 p-4 Success-Content-Card offset-1"
                                style="border-right: 1px solid #D9D9D9;">
                                <p>I would like to take this opportunity to share my sincere appreciation and admiration
                                    for the outstanding work done by Shayan Solutions. From the very beginning, they
                                    impressed me with their expertise in mobile app technologies.</p>
                                <h4>Jay Yap</h4>
                                <p>CEO, newroom Puchong Jaya, Malaysia</p>
                            </div>
                            <div class="col-md-5 d-flex justify-content-center align-items-center">
                                <img src="http://127.0.0.1:8000/storage/images/our-success-stories/1.png" alt="">
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
        successStories: [],
    },

    mounted() {
        // Initialize Swiper
        this.swiper = new Swiper('.swiper-container', {
            slidesPerView: 2,
            breakpoints: {
                100: {
                    slidesPerView: 1,
                    spaceBetween: 20,
                },
                998: {
                    slidesPerView: 2,
                    spaceBetween: 40,
                },
                1024: {
                    slidesPerView: 2,
                    spaceBetween: 50,
                },
            },
        });
    },
    methods: {
        nextSlide() {
            if (this.swiper) {
                this.swiper.slideNext();
            }
        },
        prevSlide() {
            if (this.swiper) {
                this.swiper.slidePrev();
            }
        },
        limitofname(name) {
            // Limit the name to a certain number of characters (e.g., 100)
            const maxLength = 30;
            if (name.length <= maxLength) {
                return name;
            } else {
                return name.slice(0, maxLength) + '...';
            }
        },
        limitedDescription(description) {
            // Limit the description to a certain number of characters (e.g., 100)
            const maxLength = 250;
            if (description.length <= maxLength) {
                return description;
            } else {
                return description.slice(0, maxLength) + '...';
            }
        },
    },
};
</script>

<style scoped>
.dual-slider {
    width: 100%;
}
</style>
