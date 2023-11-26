<!-- Mobile Header & Nav -->
<header
x-data="{ isOpen: false }"
class="w-full bg-sidebar py-5 px-6 sm:hidden">
    <div class="flex items-center justify-between">
    <a
        href="index.html"
        class="text-white text-3xl font-semibold uppercase hover:text-gray-300"
        >Admin</a
    >
    <button
        @click="isOpen = !isOpen"
        class="text-white text-3xl focus:outline-none"
    >
        <i x-show="!isOpen" class="fas fa-bars"></i>
        <i x-show="isOpen" class="fas fa-times"></i>
    </button>
    </div>

<!-- Dropdown Nav -->
    <nav :class="isOpen ? 'flex': 'hidden'" class="flex flex-col pt-4">
    <a
        href="/"
        class="flex items-center active-nav-link text-white py-2 pl-4 nav-item"
    >
        <i class="fas fa-tachometer-alt mr-3"></i>
        Dashboard
    </a>
    <a
        href="/home/category"
        class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item"
    >
        <i class="fas fa-sticky-note mr-3"></i>
        Category
    </a>
    <a
        href="/home/news"
        class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item"
    >
        <i class="fas fa-table mr-3"></i>
        News
    </a>
    <a
        href="#"
        class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item"
    >
        <i class="fas fa-user mr-3"></i>
        My Account
    </a>
    <a
        href="#"
        class="flex items-center text-white opacity-75 hover:opacity-100 py-2 pl-4 nav-item"
    >
        <i class="fas fa-sign-out-alt mr-3"></i>
        Sign Out
    </a>
    </nav>
<!-- <button class="w-full bg-white cta-btn font-semibold py-2 mt-5 rounded-br-lg rounded-bl-lg rounded-tr-lg shadow-lg hover:shadow-xl hover:bg-gray-300 flex items-center justify-center">
<i class="fas fa-plus mr-3"></i> New Report
</button> -->
</header>