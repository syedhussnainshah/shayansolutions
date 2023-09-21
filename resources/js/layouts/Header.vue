<template>
    <div class="header ">

        <Navbar />

        <section id="Hero-Section">
            <div class="container-fluid  d-flex justify-content-center">
                <div class="row" id="ForMediaQuery-HeroSection">
                    <div class="text-white col-lg-7    Hero-Section-Content ForMediaQuery-Hero-Section-Content"
                        style="max-width: 686px;">
                        <h5 class="inovation_driven mb-0  p-0">INNOVATION DRIVEN AGENCY</h5>

                        <h1 class=" p-0 mb-0">Hire Top 3% Remote</h1>
                        <h2 class="p-0 mb-0">Developers within <span>24 hours</span></h2>
                        <p>
                            We offer you meticulously vetted software engineers, who rank <br> among the top 3%, to
                            accelerate your bussiness growth
                        </p>
                        <ul>
                            <li><i class="fa-solid fa-check" style="color: #58C1F7;"></i> Effortless recruitment
                            </li>
                            <li><i class="fa-solid fa-check" style="color: #58C1F7;"></i> Engineers in the top 3% after
                                thorough vetting</li>
                            <li><i class="fa-solid fa-check" style="color: #58C1F7;"></i> Dedicated Squads</li>
                        </ul>
                        <a class="btn HireEngBtn" style="background-color: var(--bg-color);margin-top: 32px;"> Hire
                            Engineers</a>
                    </div>
                    <div class="col-lg-5 mt-5 Hero-Section-Form d-flex justify-content-center">
                        <div class="card h-100">
                            <form action="" @submit.prevent="submitForm">
                                <h3>Let's discuss your project</h3>
                                <p>Submit request and we'll get in touch within a day</p>
                                <div class="p-0">
                                    <input type="text" class="" id="name" placeholder=" Enter your name" maxlength="50"
                                        name="name" v-model="formData.name" @focus="clearNameError">
                                    <span style="margin-left: 29px;" v-if="formDataErorrs.phone" class="text-danger">
                                        {{ formDataErorrs.name }}
                                    </span>
                                </div>
                                <div class="">
                                    <input type="email" class="form-control" id="email" placeholder="Enter your email"
                                        name="email" v-model="formData.email" @focus="clearEmailError">
                                    <span style="margin-left: 29px;" v-if="formDataErorrs.phone" class="text-danger">
                                        {{ formDataErorrs.email }}
                                    </span>
                                </div>
                                <div class="">
                                    <input type="text" class="form-control" id="number"
                                        placeholder="Enter your phone number" name="phone" @focus="clearPhoneError"
                                        v-model="formData.phone" maxlength="14">

                                    <span style="margin-left: 29px;" v-if="formDataErorrs.phone" class="text-danger">
                                        {{ formDataErorrs.phone }}
                                    </span>
                                </div>
                                <div class="">
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="6"
                                        placeholder=" Tell us more about your project, budgets and needs"
                                        v-model="formData.projectDetails" @focus="clearProjectDetailsError"></textarea>
                                    <span style="margin-left: 29px;" v-if="formDataErorrs.phone" class="text-danger">
                                        {{ formDataErorrs.projectDetails }}
                                    </span>
                                </div>
                                <div class="">
                                    <button class="btn border-0  text-white" style="background-color: var(--bg-color);"
                                        :disabled="isFormIncomplete">Get
                                        Quote</button>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </div>
</template>
<script>
import Swal from 'sweetalert2';
import axios from 'axios';
import Navbar from './Navbar.vue';
export default {
    data() {
        return {
            formData: {
                name: "",
                email: "",
                phone: "",
                projectDetails: "",
            },
            formDataErorrs: {
                phone: '',
                name: '',
                email: '',
                projectDetails: '',
            },
        };
    },
    components: {
        Navbar,

    },
    computed: {
        isFormIncomplete() {
            return (
                this.formData.name === "" ||
                this.formData.email === "" ||
                this.formData.phone === "" ||
                this.formData.projectDetails === ""
            );
        },
    },
    methods: {
        clearPhoneError() {
            this.formDataErorrs.phone = '';
        },
        clearEmailError() {
            this.formDataErorrs.email = '';
        },
        clearNameError() {
            this.formDataErorrs.name = '';
        },
        clearProjectDetailsError() {
            this.formDataErorrs.projectDetails = '';
        },

        submitForm() {
            this.formDataErorrs = {
                phone: '',
                name: '',
                email: '',
                projectDetails: '',
            };
            console.log(this.formData);
            axios.post('/api/lets-discuss-your-project', this.formData)
                .then((response) => {
                    console.log(response);
                    this.formData = {
                        name: "",
                        email: "",
                        phone: "",
                        projectDetails: "",
                    };
                    Swal.fire({
                        // title: 'Hello!',
                        text: response.data.message,
                        icon: 'success',
                    });
                })
                .catch((error) => {
                    // Swal.fire({
                    //     icon: 'error',
                    //     title: 'Oops...',
                    //     text: error.response.data.message,
                    // })
                    if (error.response.data.errors.name) {
                        this.formDataErorrs.name = error.response.data.errors.name[0];
                    }
                    if (error.response.data.errors.email) {
                        this.formDataErorrs.email = error.response.data.errors.email[0];
                    }
                    if (error.response.data.errors.phone) {
                        this.formDataErorrs.phone = error.response.data.errors.phone[0];
                    }
                    if (error.response.data.errors.projectDetails) {
                        this.formDataErorrs.projectDetails = error.response.data.errors.projectDetails[0];
                    }



                    // error.response.data.errors.phone ? this.error.phone = error.response.data.errors.phone[0] : this.error.phone = '';
                });
        },
    },
};
</script>
