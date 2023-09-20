<template>
    <div style="overflow: hidden;">
        <Header />
        <GlobalCompanies />
        <SimpleSolutionForComplex />
        <ServicesWeProvide />
        <WeAreGlobal :profiles="profiles" />
        <UsingTechnology :technologies="technologies" />
        <ItAugmentsHiring :augmentHiring="augmentHiring" />
        <SuccessStories :successStories="successStories" />
        <TheBestPart />
        <InspireWork :InspiringWorkmadeForOurTop="InspiringWorkmadeForOurTop" />
        <SimpleSolutionForComplex2 />
        <GlobalTalent />
        <Footer />
    </div>
</template>

<script>

import Header from './layouts/Header.vue';
import GlobalCompanies from './components/OurGolbalCompanies/index.vue';
import SimpleSolutionForComplex from './components/SimpleSolutionForcomplex/index.vue';
import ServicesWeProvide from './components/ServicesWeProvide/index.vue';
import WeAreGlobal from './components/WeAreGlobal/index.vue';
import UsingTechnology from './components/UsingtechnologiesForBetter/index.vue';
import ItAugmentsHiring from './components/ItAugmentationHiringModel/index.vue';
import SuccessStories from './components/OurSuccessStories/index.vue';
import TheBestPart from './components/TheBestPart/index.vue';
import InspireWork from './components/InspiringWorkmadeForOurTop/index.vue';
import SimpleSolutionForComplex2 from './components/SimpleComplexSolution-2/index.vue';
import GlobalTalent from './components/TalentGlobal/index.vue';
import Footer from './layouts/Footer.vue';
import axios from 'axios';

export default {

    components: {
        Header,
        GlobalCompanies,
        SimpleSolutionForComplex,
        ServicesWeProvide,
        WeAreGlobal,
        UsingTechnology,
        ItAugmentsHiring,
        SuccessStories,
        TheBestPart,
        InspireWork,
        SimpleSolutionForComplex2,
        GlobalTalent,
        Footer,

    },
    mounted() {
        this.getTechnologies()
        this.getAugmentHiring()
        this.getSuccessStories()
        this.getProfiles()
        this.getInspiringWorkmadeForOurTop()
    },
    data() {
        return {
            technologies: [],
            augmentHiring: [],
            successStories: [],
            profiles: [],
            InspiringWorkmadeForOurTop: [],
        }
    },
    methods: {
        getTechnologies() {
            axios.get('api/technologies')
                .then(response => {
                    this.technologies = response.data.data
                })
                .catch(e => {
                    this.errors.push(e)
                })
        },
        getAugmentHiring() {
            axios.get('api/augment-hiring')
                .then(response => {

                    this.augmentHiring = response.data.data
                })
                .catch(e => {
                    this.errors.push(e)
                })
        },
        getSuccessStories() {
            axios.get('api/success-stories')
                .then(response => {
                    this.successStories = response.data.data
                })
                .catch(e => {
                    this.errors.push(e)
                })
        },
        getProfiles() {
            axios.get('api/profiles')
                .then(response => {
                    this.profiles = response.data.data
                })
                .catch(e => {
                    this.errors.push(e)
                })
        },
        getInspiringWorkmadeForOurTop() {
            axios.get('api/inspire-work')
                .then(response => {
                    this.InspiringWorkmadeForOurTop = response.data.data
                    console.log(response.data.data)
                })
                .catch(e => {
                    this.errors.push(e)
                })
        },
    },

};
</script>

