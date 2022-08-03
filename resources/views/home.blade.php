<x-layout>

    <x-slot:title>Homepage</x-slot>

    <div class="container">

        <!-- Wellcome card -->
        <div class="w-full h-fit my-8 md:my-0 md:h-[580px] flex flex-col md:flex-row md:space-between">

            <div class="relative w-full md:w-1/2 h-full flex items-center">

                <svg class="z-0 absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2 text-neutral-500 opacity-25" fill="currentColor" id="logo" data-name="logo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 600 600">
                    <path d="M1199.88,402H1080v94h-49V352h240V232.59C1201.36,254.15,1092.87,268,971,268s-230.36-13.85-300-35.41V352H911V496H862V402H742.12c14,24.79,22.88,60.64,22.88,100.5s-8.85,75.77-22.93,100.57L862,723V616h49V772l60,60,60-60V616h49V723l119.93-119.93C1185.85,578.27,1177,542.4,1177,502.5S1185.83,426.79,1199.88,402Z" transform="translate(-671 -232.59)"/>
                </svg>

                <div class="z-10 w-full h-full flex flex-col gap-8 justify-center items-center">
                    <h1 class="text-4xl md:text-6xl text-brand tracking-widest font-rosarivo">
                        Welcome!
                    </h1>
                    <div class="paragraph text-center">
                        Welcome to the online realm of Tilen Hudrap, visitors from all dimensions! Here you'll find some basic info about Tilen's music path, the bands he performed with during the last 20+ years and more! Many sections will be added in the near future (past, present and future tour dates, multimedia, discography, press, gear talk, shop, testimonials, Hudy's Heavy Metal Academy and many, many more!)! Share the website with all interested parties and watch this space for future updates!
                    </div>
                    <div class="flex gap-8 mt-2">
                        <a href="{{ route('biography') }}" class="text-left md:text-center text-xs md:text-base shadow-md bg-none border-2 border-neutral-500 text-white font-semibold uppercase tracking-widest p-2 md:p-4 rounded hover:bg-brand/20 hover:ring-2 hover:ring-brand hover:border-transparent transition">learn more ...</a>
                        <a href="{{ route('contact') }}" class="text-left md:text-center text-xs md:text-base shadow-md bg-none border-2 border-neutral-500 text-white font-semibold uppercase tracking-widest p-2 md:p-4 rounded hover:bg-brand/20 hover:ring-2 hover:ring-brand hover:border-transparent transition">Get in touch!</a>
                    </div>
                </div>

            </div>

            <div class="md:w-1/2 bg-tilen bg-no-repeat bg-top"></div>

        </div>

        <!-- Wacken Open Air 2022 -->
        <div class="mb-8">
            <div class="bg-black/40 p-4 md:p-8 rounded-xl flex flex-col md:flex-row gap-8">
                <div class="w-full md:w-1/3 space-y-8">
                    <img src="{{ asset('/images/woa22.jpg') }}" alt="Wacken Open Air 2022">
                </div>
                <div class="w-full md:w-2/3 text-neutral-400 text-sm md:text-base">
                    <div class="text-brand mb-8">03/08/2022</div>
                    Metalheads, tune in tomorrow, 4th of August 2022, between 18:30 and 20:00 PM Central European Time and watch the <a href="https://live.wacken.com" class="font-semibold text-white">LIVE STREAM</a> of the sold out Wacken Open Air where Dirkschneider will perform infront of 80 000 fans from fifty plus countries!<br>
                    You can watch the livestream <a href="https://live.wacken.com" class="font-semibold text-white">HERE</a>!
                </div>
            </div>
        </div>

        <!-- Videos -->
        <div class="flex flex-col gap-8">
            <!-- U.D.O -->
            <iframe src="https://www.youtube.com/embed/sv29zn_gXY8" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="w-full aspect-video bg-black/40 p-4 md:p-8 rounded-xl"></iframe>
            <!-- Dirkschneider -->
            <iframe src="https://www.youtube.com/embed/sWfSQDElZDg" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="w-full aspect-video bg-black/40 p-4 md:p-8 rounded-xl"></iframe>
            <!-- Thraw -->
            <iframe src="https://www.youtube.com/embed/e6ZsVzpnn-g" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="w-full aspect-video bg-black/40 p-4 md:p-8 rounded-xl"></iframe>
            <!-- Pestilence -->
            <iframe src="https://www.youtube.com/embed/brrr5WT8vSA" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="w-full aspect-video bg-black/40 p-4 md:p-8 rounded-xl"></iframe>
            <!-- Vicious Rumors -->
            <iframe src="https://www.youtube.com/embed/F5updnhm9a4" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="w-full aspect-video bg-black/40 p-4 md:p-8 rounded-xl"></iframe>
        </div>

    </div>

</x-layout>
