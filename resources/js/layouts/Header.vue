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
                        <div class="card ">
                            <form action="">
                                <h3>Let's discuss your project</h3>
                                <p>Submit request and we'll get in touch within a day</p>
                                <div class="p-0">
                                    <input type="text" class="" id="name" placeholder=" Enter your name" name="name">
                                </div>
                                <div class="">
                                    <input type="email" class="form-control" id="email" placeholder="Enter your email"
                                        name="email">
                                </div>
                                <div class="">
                                    <input type="text" class="form-control" id="number"
                                        placeholder="Enter your phone number" name="number">
                                </div>
                                <div class="">
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="6"
                                        placeholder=" Tell us more about your project, budgets and needs"></textarea>
                                </div>
                                <div class="">
                                    <button class="btn border-0  text-white" style="background-color: var(--bg-color);">Get
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
import Navbar from './Navbar.vue';
export default {
    components: {
        Navbar,
    },
};
</script>
