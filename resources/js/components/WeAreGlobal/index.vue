<template>
    <section id="We-Are-Global" class="d-flex justify-content-center" style="background-color: #F5F5F5;">

        <div class="container-fluid mb-0  " style="max-width: 1447px;">
            <div class="row mb-0 p-2 d-flex justify-content-center align-items-center">

                <div class="col-lg-6 mb-0" id="NumberClients">
                    <h6 class="p-0">Lorem ipsum dolor sit ame</h6>
                    <h2 class="p-0 mb-0">We are <span style="color: #3219B3;"> Global</span></h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed donec gravida feugiat neque,
                        ipsum faucibus. Pharetra vel suspendisse mi odio a velit feugiat sapien.
                    </p>
                    <ul class="mb-0 p-0 list-unstyled d-flex">
                        <li class="mb-0 p-0">
                            <span></span>
                            <h2>140+</h2>
                            <p>Projects Completed</p>
                        </li>
                        <li class="mb-0 p-0">
                            <span></span>
                            <h2>100+</h2>
                            <p>Happy Clients</p>
                        </li>
                        <li class="mb-0 p-0">
                            <span></span>
                            <h2>100+</h2>
                            <p>Client Reviews</p>
                        </li>
                    </ul>
                    <a class=" text-white " style="background-color: var(--bg-color);"> Learn More</a>
                </div>
                <div class="col-lg-6 p-0 m-0  d-flex justify-content-center align-items-center" id="Profiles">
                    <ul class="p-0  d-flex justify-content-center align-items-center">
                        <li class="ProfileLi" v-for="(profile, index) in profiles" :key="index">
                            <img :src="profile.image" alt="">

                            <div class="card p-2 d-flex justify-content-start aling-items-start"
                                style="border-radius: 14px;margin-top: -15px;">
                                <h3 class="no-wrap  w-100">{{ profile.title }}</h3>
                                <ul class="p-0 d-flex justify-content-center">
                                    <li class="mb-0 mt-0 p-0" v-for="(tech, techIndex) in profile.language"
                                        :key="techIndex">{{ tech
                                        }}</li>
                                </ul>
                            </div>
                        </li>


                    </ul>
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>
    </section>
</template>
<script>
export default {
    props: {
        profiles: [],
    },
}
</script>
<style scoped></style>
