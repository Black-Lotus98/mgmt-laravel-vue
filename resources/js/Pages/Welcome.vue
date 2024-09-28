<script setup>
import RotatableLogo from "@/Components/common/RotatableLogo/RotatableLogo.vue";
import { Head, Link } from "@inertiajs/vue3";

defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },
});




function handleImageError() {
    document.getElementById("screenshot-container")?.classList.add("!hidden");
    document.getElementById("docs-card")?.classList.add("!row-span-1");
    document.getElementById("docs-card-content")?.classList.add("!flex-row");
    document.getElementById("background")?.classList.add("!hidden");
}
</script>


<template>

    <header class="header">

        <RotatableLogo />
        <v-btn v-cli icon="$vuetify" class="flex items-center" rounded="xl" position="absolute right-16 top-16" variant="text"
            color="white">
            <div class="text-white ">
                <div
                    class="flex flex-col justify-center transition-all duration-300 relative font-bold  w-8 h-8 gap-2 group active:-translate-y-1">
                    <span
                        class="transform transition-all duration-300 block w-full h-1 bg-white rounded-full group-active:rotate-[-135deg]  group-active:translate-y-4 ">
                    </span>
                    <span
                        class="transform transition-all duration-300 block w-full h-1 bg-white rounded-full group-active:opacity-0">
                    </span>
                    <span
                        class="transform transition-all duration-300 block w-full h-1 bg-white rounded-full group-active:rotate-[135deg] group-active:-translate-y-2">
                    </span>
                </div>
            </div>
        </v-btn>

        <div class="absolute text-white flex top-16 right-16 gap-4 mb-4 text-center">
            <template v-if="$page.props.auth.user">
                <Link :href="route('dashboard')">
                Dashboard
                </Link>
            </template>
            <template v-else>
                <Link :href="route('login')">
                Login
                </Link>
                <Link :href="route('register')">
                Register Request
                </Link>
            </template>
        </div>

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
