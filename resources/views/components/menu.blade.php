<nav x-data="{ open: false }">

    <button @click="open = ! open" class="absolute top-8 right-8 visible md:hidden">
        <i class="bx bx-menu text-4xl"></i>
    </button>

    <!-- Desktop -->
    <ul class="hidden md:flex">
        <li><a href="{{ route('home') }}" class="{{ (request()->routeIs('home')) ? 'active' : '' }}">Home</a></li>
        <li><a href="{{ route('biography') }}" class="{{ (request()->routeIs('biography')) ? 'active' : '' }}">Biography</a></li>
        <li><a href="{{ route('contact') }}" class="{{ (request()->routeIs('contact')) ? 'active' : '' }}">Contact</a></li>
    </ul>

    <!-- Mobile -->
    <div x-show="open" class="mobile" style="display: none;">
        <button @click="open = ! open" class="absolute top-8 right-8 visible md:hidden">
            <i class="bx bx-x text-4xl"></i>
        </button>
        <ul>
            <li><a href="{{ route('home') }}" class="{{ (request()->routeIs('home')) ? 'active' : '' }}">Home</a></li>
            <li><a href="{{ route('biography') }}" class="{{ (request()->routeIs('biography')) ? 'active' : '' }}">Biography</a></li>
            <li><a href="{{ route('contact') }}" class="{{ (request()->routeIs('contact')) ? 'active' : '' }}">Contact</a></li>
        </ul>
        <div class="absolute bottom-0 w-full h-24 flex justify-evenly items-center gap-4 [&>a]:text-4xl [&>a]:text-brand">
            <a href="https://www.facebook.com/teelen.hudyrap" target="_blank"><i class="bx bxl-facebook"></i></a>
            <a href="https://www.instagram.com/tilen_hudrap_bass/" target="_blank"><i class="bx bxl-instagram"></i></a>
            <a href="#"><i class="bx bxl-twitter"></i></a>
            <a href="#"><i class="bx bxl-youtube"></i></a>
        </div>
    </div>

</nav>