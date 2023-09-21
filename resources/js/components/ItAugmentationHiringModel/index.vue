<template>
    <section id="It-Augmntation-Hiring-Model">
        <center>
            <h2 id="It-Augmntation-Hiring-Model-Title"> IT Augmentation <span> Hiring Model </span></h2>
        </center>
        <div class="container-fluid mb-0 w-100 " style="display: flex;justify-content: center;margin-top: 30px;">
            <div class="row   mb-0 d-flex justify-content-center  AumentationCard">
                <div class="col-lg-4 mt-2 p-0 mb-0 " v-for="(item, index) in augmentHiring" :key="index">
                    <div class="card ">
                        <h2 class="no-wrap d-flex">{{ item.name }}</h2>
                        <ul>
                            <li class="text-sm-wrap" v-for="(point, pointIndex) in item.augmentations_points"
                                :key="pointIndex">
                                <i class="fa-solid fa-check" style="color: #58C1F7;"></i>
                                <p>{{ point }}</p>
                            </li>
                        </ul>
                        <button class=" GetStartedBtn" style="border: 1px solid #D9D9D9"> Get Started</button>
                        <!-- <a href="" class="getStartedBtn btn text-center">Get Started</a> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>
<script>
export default {
    props: ['augmentHiring'],
};
</script>
<style></style>
