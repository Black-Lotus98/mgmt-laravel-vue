<script setup>
import Navbar from "@/Components/common/Navbar/Navbar.vue";
import { Link } from "@inertiajs/vue3";

defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },
});


</script>


<template>

    <header class="flex flex-col p-4 bg-gradient-image-dark bg-cover bg-center bg-no-repeat relative h-screen ">
        <Navbar :canLogin="canLogin" :canRegister="canRegister" />
        <div class="flex max-md:flex-col w-full justify-between mt-50 text-white">
            <div class="flex flex-col w-full">
                <h1>Fannoun Group</h1>
            </div>
            <div class="flex flex-col w-full">
                <h1>Fannoun Group</h1>
            </div>

            <!-- <div class="w-1/2">
                <h1
                    class="relative flex items-start justify-start flex-col text-white uppercase backface-hidden mb-10 pl-10 w-fit">
                    <span
                        class="animate-moveInLeft text-white font-custom-500 text-[8em] ">FANNOUN</span>
                    <span class="heading-primary--sub">Navigating the Future</span>
                    <span class="heading-primary--sub">One Mile at a Time</span>
                </h1>

            </div> -->
            <!-- <div class="">
                    <h1
                        class="flex items-center justify-center flex-col text-white uppercase backface-hidden mb-10  w-full">
                        <span
                            class="animate-moveInLeft text-white font-custom-500 text-[10rem] tracking-[4rem]">FANNOUN</span>
                        <span class="heading-primary--sub">Navigating the Future</span>
                        <span class="heading-primary--sub">One Mile at a Time</span>
                    </h1>

                </div> -->
        </div>
        <!-- <div class="flex flex-col">
            <div class="flex justify-evenly items-start mx-40">
                <div class='flex flex-col gap-6 h-[27.2rem]'>
                    <section class="flex flex-col">
                        <h1 ref={titleRef} class="text-white font-bold text-custom-50">
                            {slides[currentSlide].title}
                        </h1>
                        <h1 ref={title2Ref} class="text-white font-bold text-custom-50 -mt-4">
                            {slides[currentSlide].title2}
                        </h1>
                    </section>
                    <section class="flex flex-col">
                        <p ref={descRef} class="text-white text-lg font-custom-600 w-1/2">
                            {slides[currentSlide].description}
                        </p>
                    </section>
                    <section>
                        <Link href="/#">
                        <Button
                            class="text-xl font-custom-600 flex items-center gap-8 border px-4 py-2 rounded-full hover:text-blue-800 hover:bg-opacity-100">
                            Discover More
                            <svg width="20" height="16" viewBox="0 0 20 16" fill="currentColor "
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M0.666992 8.0861V7.31457H18.2795C15.8929 5.12009 13.617 3.0158 11.2909 0.861413C11.452 0.681046 11.603 0.510711 11.7843 0.310303C14.4528 2.76531 17.0912 5.20025 19.79 7.68532C17.1214 10.1403 14.4831 12.5853 11.7944 15.0603C11.6332 14.89 11.4822 14.7297 11.2808 14.5192C13.5868 12.3949 15.8727 10.2806 18.2492 8.0861H0.666992Z" />
                            </svg>
                        </Button>
                        </Link>
                    </section>
                </div>

                <Image data-aos="fade-down-right" data-aos-duration="3000" src="/assets/images/airplane.png"
                    alt="Footer" width={789.41} height={138.28} class="max-lg:hidden  w-[50rem] h-[8.65rem]" />
            </div>

            <div class="flex flex-col ml-[11.25rem] max-lg:ml-[6.25rem] max-md:ml-0 pr-14">
                CONTENT
            </div>
        </div> -->

    </header>



    <header class="header">
        <div class="header__text-box">
            <h1 class="heading-primary">
                <span class="heading-primary--main">Fannoun</span>
                <span class="heading-primary--sub">Navigating the Future</span>
                <span class="heading-primary--sub">One Mile at a Time</span>
            </h1>
            <a href="#" class="btn btn--white btn--animated">Learn more</a>
        </div>
    </header>

    <main>
        <section class="section-about">
            <div class="u-center-text  u-margin-bottom-big">
                <h2 class="heading-secondary"> The company promise </h2>
            </div>

            <div class="row ">
                <div class="col-1-of-2 ">
                    <h3 class="heading-tertiary u-margin-bottom-small">
                        Trustworthy Transfers, Ensuring Safe Arrivals
                    </h3>
                    <p class="paragraph">
                        We started our business to cover a need in the market for an honest, innovative and
                        dependable
                        service provider, we have been fulfilling those needs ever since. Our reputation is
                        paramount to
                        us and we stop at nothing to prove that.
                    </p>
                    <h3 class="heading-tertiary u-margin-bottom-small">
                        Delivering Confidence, Every Mile
                    </h3>
                    <p class="paragraph">
                        At FANNOUN, our top priority is ensuring the safe and efficient transportation of fuel and
                        goods
                        for our valued clients. With a steadfast commitment to quality and an unwavering dedication
                        to
                        safety, we navigate the complexities of logistics to provide seamless connections between
                        refineries, stations, harbors, and sellers. Our experienced team, rigorous safety standards,
                        and
                        state-of-the-art fleet work together to guarantee the utmost reliability and performance,
                        empowering businesses to thrive while giving them peace of mind.
                    </p>
                    <a href="#" class="btn-text">Learn more &rarr;</a>
                </div>
                <div class="col-1-of-2">
                    <div class="composition">
                        <img src="/assets/images/CompanyImgs/Garage.png" alt="image1"
                            class="composition__photo composition__photo--p1">
                        <img src="/assets/images/CompanyImgs/Trucks.jpg" alt="image2"
                            class="composition__photo composition__photo--p2">
                        <img src="/assets/images/CompanyImgs/MainDoor.jpg" alt="image3"
                            class="composition__photo composition__photo--p3">
                    </div>
                </div>
            </div>
        </section>

        <section class="section-features">

            <div class="row">
                <div class="col-1-of-4">

                    <div class="feature-box">
                        <i class="feature-box__icon icon-basic-world"></i>
                        <h3 class="heading-tertiary u-margin-bottom-small">Heading 1</h3>
                        <p class="feature-box__text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus
                            voluptates, ducimus cumque aspernatur accusantium sed sit eius molestiae, aut architecto
                            corrupti veritatis suscipit ipsum alias.
                        </p>

                    </div>
                </div>
                <div class="col-1-of-4">

                    <div class="feature-box">
                        <i class="feature-box__icon icon-basic-accelerator"></i>
                        <h3 class="heading-tertiary u-margin-bottom-small">Heading 2</h3>
                        <p class="feature-box__text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus
                            voluptates, ducimus cumque aspernatur accusantium sed sit eius molestiae, aut architecto
                            corrupti veritatis suscipit ipsum alias.
                        </p>

                    </div>
                </div>
                <div class="col-1-of-4">

                    <div class="feature-box">
                        <i class="feature-box__icon icon-basic-map"></i>
                        <h3 class="heading-tertiary u-margin-bottom-small">Heading 3</h3>
                        <p class="feature-box__text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus
                            voluptates, ducimus cumque aspernatur accusantium sed sit eius molestiae, aut architecto
                            corrupti veritatis suscipit ipsum alias.
                        </p>

                    </div>
                </div>
                <div class="col-1-of-4">

                    <div class="feature-box">
                        <i class="feature-box__icon icon-basic-rss"></i>
                        <h3 class="heading-tertiary u-margin-bottom-small">Heading 4</h3>
                        <p class="feature-box__text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus
                            voluptates, ducimus cumque aspernatur accusantium sed sit eius molestiae, aut architecto
                            corrupti veritatis suscipit ipsum alias.
                        </p>

                    </div>
                </div>
            </div>
        </section>

        <section class="section-corporations">
            <div class="u-center-text  u-margin-bottom-big">
                <h2 class="heading-secondary"> Our corporations </h2>
            </div>

            <div class="row">
                <div class="col-1-of-3">
                    <div class="card">
                        <div class="card__side card__side--front">
                            <div class="card__picture card__picture--1">
                                &nbsp;
                            </div>
                            <h4 class="card__heading">
                                <span class="card__heading-span card__heading-span--1">
                                    RAMZ TRANSPORTING CO.
                                </span>
                            </h4>
                            <div class="card__details">
                                <ul>
                                    <li> Transporting companies</li>
                                    <li> Transporting companies</li>
                                    <li> Transporting companies</li>
                                    <li> Transporting companies</li>
                                    <li> Transporting companies</li>
                                </ul>
                            </div>
                        </div>
                        <div class="card__side card__side--back card__side--back-1">
                            <div class="card__cta">
                                <div class="card__info-box">
                                    <img class="card__logo-Box" src="/assets/images/RamzSquarLogo.jpg"
                                        alt="Company Logo" srcset="">
                                    <p class="card__price-only">&nbsp;</p>
                                    <p class="card__price-value">&nbsp;</p>
                                </div>
                                <a href="#popup" class="btn btn--white">Learn more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-1-of-3">
                    <div class="card">
                        <div class="card__side card__side--front">
                            <div class="card__picture card__picture--2">
                                &nbsp;
                            </div>
                            <h4 class="card__heading">
                                <span class="card__heading-span card__heading-span--2">
                                    FANNOUN Tires CO.
                                </span>
                            </h4>
                            <div class="card__details">
                                <ul>
                                    <li> Tires companies</li>
                                    <li> Tires companies</li>
                                    <li> Tires companies</li>
                                    <li> Tires companies</li>
                                    <li> Tires companies</li>
                                </ul>
                            </div>
                        </div>
                        <div class="card__side card__side--back card__side--back-2">
                            <div class="card__cta">
                                <img class="card__logo-Box" src="/assets/images/fannounTires.png" alt="Company Logo"
                                    srcset="">
                                <div class="card__info-box">
                                    <p class="card__price-only">&nbsp;</p>
                                    <p class="card__price-value">&nbsp;</p>
                                </div>
                                <a href="#popup" class="btn btn--white">Learn more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-1-of-3">
                    <div class="card">
                        <div class="card__side card__side--front">
                            <div class="card__picture card__picture--3">
                                &nbsp;
                            </div>
                            <h4 class="card__heading">
                                <span class="card__heading-span card__heading-span--3">
                                    &nbsp; VOLT Delivery &nbsp; Co.
                                </span>
                            </h4>
                            <div class="card__details">
                                <ul>
                                    <li>Delivery companies</li>
                                    <li>Delivery companies</li>
                                    <li>Delivery companies</li>
                                    <li>Delivery companies</li>
                                    <li>Delivery companies</li>
                                </ul>
                            </div>
                        </div>
                        <div class="card__side card__side--back card__side--back-3">
                            <div class="card__cta">
                                <div class="card__info-box">
                                    <img class="card__logo-Box" src="/assets/images/fannounTires.png" alt="Company Logo"
                                        srcset="">
                                    <p class="card__price-only">&nbsp;</p>
                                    <p class="card__price-value">&nbsp;</p>
                                </div>
                                <a href="#popup" class="btn btn--white">Learn more</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="u-center-text  u-margin-top-huge">
                <a href="#" class="btn btn--orange">View All Companies</a>
            </div>
        </section>

        <section class="section-managers">
            <div class="u-center-text  u-margin-bottom-big">
                <h2 class="heading-secondary">
                    Our Managers and founders
                </h2>
            </div>

            <div class="row">
                <div class="story">
                    <figure class="story__shape">
                        <img class="story__img" src="/assets/images/Managers/MohammadYusriFannoun.jpg" alt="founder"
                            srcset="">
                        <figcaption class="story__caption">
                            Mohammad Yousri Fannoun
                        </figcaption>
                    </figure>
                    <div class="story__text">
                        <h3 class="heading-tertiary u-margin-bottom-small"> Founder of the company</h3>
                        <p>
                            Muhammad Yousri Fannoun moved to Jordan in 1967 and followed his father's footsteps by
                            purchasing his own trucks. By 1975 he had a number of trucks with which he established a
                            private transport company named Fannoun and Taslaq co.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="story">
                    <figure class="story__shape">
                        <img class="story__img" src="/assets/images/Managers/UserAvatar.jpg" alt="founder" srcset="">
                    </figure>
                    <div class="story__text">
                        <h3 class="heading-tertiary u-margin-bottom-small"> Fannoun Tires Manager</h3>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos sed dolorum architecto
                            quisquam praesentium ea mollitia ipsa repellendus vero, facere incidunt, nihil corrupti
                            reprehenderit totam consequatur iusto, ipsam commodi placeat!

                        </p>
                    </div>
                </div>
            </div>
            <div class="row u-center-text ">
                <a href="" class="btn-text">View all managers &rarr;</a>
            </div>

        </section>
    </main>


</template>
