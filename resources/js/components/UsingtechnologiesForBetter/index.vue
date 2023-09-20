<template>
    <section id="Using-Technology-for-Better-Software-Solutions">
        <center>
            <h2 id="Using-Technologies-Title" class="mb-3"> Using Technology for Better <span> Software Solutions </span>
            </h2>
        </center>
        <div class="container mb-0 p-0">
            <div class="row mb-0 p-0 d-flex justify-content-center align-items-center">
                <div class="col-md-8 p-0 mb-0 text-center">
                    <p class="mb-0" style="margin-top: 18px;">Experienced software agency skilled in diverse technologies,
                        creating <br>
                        user-friendly solutions.</p>
                </div>
            </div>
        </div>
        <div class="container mb-0 p-0" id="using-technology-card">
            <div v-if="technologies && technologies.length > 0">
                <div class="row d-flex justify-content-center">
                    <div v-for="(technology, index) in technologies" :key="index" class="col-lg-2 p-0 mb-0"
                        style="height: 76px;margin-top: 43px;">
                        <div class="card  flex-row d-flex justify-content-center align-items-center">
                            <div class="card-header">
                                <img :src="technology.image" alt="" />
                            </div>
                            <div class="card-body p-0" style="margin-left: 4px;">
                                {{ technology.name }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div v-else>
                <p>No technologies available.</p>
            </div>
        </div>

    </section>
</template>
<script>
export default {
    props: {
        technologies: Array,
    },
    // ... your other component code ...
};
</script>







