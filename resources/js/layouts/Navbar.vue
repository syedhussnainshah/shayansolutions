<template>
    <div class=" d-flex justify-content-center ">
        <div style="width: 1300px;" class="">

            <nav class="navbar navbar-expand-lg navbar-dark ms-0 ps-0">
                <div class="container-fluid d-flex justify-content-between " style="">
                    <a class="navbar-brand" href="#">
                        <img src="https://shayansolution.toptrendingsite.com/storage/images/logo.png" alt="">


                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class=" collapse navbar-collapse " style="margin-left: 156px;" id="navbarNavDropdown">
                        <ul class="navbar-nav " id="NavLi">
                            <li class="nav-item">
                                <router-link class="nav-link p-0  " to="/">Home</router-link>
                            </li>
                            <li class="nav-item">
                                <router-link class="nav-link " to="/about">About</router-link>

                            </li>
                            <li class="nav-item">
                                <a class="nav-link p-0" href="#">Contact</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link p-0" href="#">Testimonial</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link p-0" href="#">Pricing</a>
                            </li>

                            <li class="nav-item  d-flex justify-content-center align-items-center">
                                <button class="border-0">Get Started</button>
                            </li>
                        </ul>
                    </div>
                </div>

            </nav>
        </div>

    </div>
</template>
<style>
@media screen and (max-width: 1620px) {
    header {
        max-width: 1619px;
    }
}

@media screen and (min-width: 1440px) {
    header {
        min-width: 1619px;
    }
}

.NavbarContainer {
    display: flex;
    margin-left: 242px;
    justify-content: space-between;
}

header {
    min-height: 820px;
    flex-shrink: 0;
    background-image: url(./assets/images/header-background.png);
    background-size: cover;
    background-position: center;
}
</style>
