<script setup>
import { cn } from '@/libs/utils';
import { Link } from '@inertiajs/vue3';
import { ref, watch } from 'vue';
import RotatableLogo from '../RotatableLogo/RotatableLogo.vue';

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
});

const navToggle = ref(false);

const toggleNav = () => {
    navToggle.value = !navToggle.value;
};

// Watch for changes to navToggle to add or remove the `no-scroll` class
// watch(navToggle, (newValue) => {
//     if (newValue) {
//         document.body.classList.add('no-scroll');
//     } else {
//         document.body.classList.remove('no-scroll');
//     }
// });
</script>

<template>
    <nav v-if="canLogin" class="z-9999 ">
        <RotatableLogo />
        <div class="flex justify-end items-center relative object-cover h-full w-full">

            <div class="md:hidden flex items-center">
                <!-- Button to toggle the nav (visible on small screens) -->
                <v-btn @click="toggleNav" icon="$vuetify" class="flex items-center fixed inset-0 top-0 z-999999"
                    rounded="xl" variant="flat" color="#000">
                    <div class="text-white ">
                        <div class="flex flex-col justify-center transition-all duration-300 relative font-bold  w-8 h-8 gap-2 group"
                            :class="{ '-translate-y-1': navToggle }">
                            <span :class="{ 'rotate-[-135deg] translate-y-4': navToggle }"
                                class="transform transition-all duration-300 block w-full h-1 bg-white rounded-full ">
                            </span>
                            <span :class="{ 'opacity-0': navToggle }"
                                class="transform transition-all duration-300 block w-full h-1 bg-white rounded-full ">
                            </span>
                            <span :class="{ 'rotate-[135deg] -translate-y-2': navToggle }"
                                class="transform transition-all duration-300 block w-full h-1 bg-white rounded-full">
                            </span>
                        </div>
                    </div>
                </v-btn>
                <!-- Mobile Menu (toggle visibility based on navToggle) -->
                <div :class="{ 'translate-x-0': navToggle, 'translate-x-full': !navToggle }"
                    class="md:hidden fixed z-99999 top-0 right-0 w-full h-full bg-white shadow-lg flex flex-col pt-8 items-center transition-transform duration-1000 ease-in-out">
                    <Link v-if="$page.props.auth.user" :href="route('dashboard')"
                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                    Dashboard
                    </Link>
                    <template v-else>
                        <Link :href="route('login')"
                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                        Log in
                        </Link>
                        <Link v-if="canRegister" :href="route('register')"
                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                        Register
                        </Link>
                    </template>
                </div>
            </div>
        </div>

        <div class="max-md:hidden shadow-lg flex text-white gap-8 items-center absolute top-16 right-16">
            <Link v-if="$page.props.auth.user" :href="route('dashboard')">
            Dashboard
            </Link>
            <template v-else>
                <Link :href="route('login')">
                Log in
                </Link>
                <Link v-if="canRegister" :href="route('register')">
                Register
                </Link>
            </template>
        </div>
    </nav>
</template>
