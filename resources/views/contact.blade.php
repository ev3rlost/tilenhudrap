<x-layout>

    <x-slot:title>Contact</x-slot>

    <h1 class="title">
        <span>Contact</span>
    </h1>

    <div class="container flex flex-col-reverse gap-8 md:flex-row">

        <!-- Contact form -->
        <livewire:contact />

        <!-- Contact info -->
        <div class="flex flex-col divide-y divide-neutral-700">

            <div class="paragraph pb-4">
                <div class="font-rosarivo text-lg md:text-xl text-center md:text-left">Press inquiries (interviews etc.):</div>
                <div>
                    <a
                        href="mailto:prmediapromotions1@gmail.com"
                        class="flex gap-2 items-center justify-center md:justify-start font-roboto text-neutral-500 tracking-wide hover:text-neutral-300 transition"
                    >
                        <i class="bx bx-envelope text-brand"></i>
                        press@tilenhudrap.com
                        <!-- prmediapromotions1@gmail.com -->
                    </a>
                </div>
            </div>

            <div class="paragraph py-4">
                <div class="font-rosarivo text-lg md:text-xl text-center md:text-left">Studio session inquiries / educational purposes:</div>
                <div>
                    <a
                        href="mailto:studiosession@tilenhudrap.com"
                        class="flex gap-2 items-center justify-center md:justify-start font-roboto text-neutral-500 tracking-wide hover:text-neutral-300 transition"
                    >
                        <i class="bx bx-envelope text-brand"></i>
                        studiosession@tilenhudrap.com
                    </a>
                </div>
            </div>

            <div class="paragraph py-4">
                <div class="font-rosarivo text-lg md:text-xl text-center md:text-left">Other inquiries:</div>
                <div>
                    <a
                        href="mailto:info@tilenhudrap.com"
                        class="flex gap-2 items-center justify-center md:justify-start font-roboto text-neutral-500 tracking-wide hover:text-neutral-300 transition"
                    >
                        <i class="bx bx-envelope text-brand"></i>
                        info@tilenhudrap.com
                    </a>
                </div>
            </div>

            <div class="paragraph pt-4">
                <div class="font-rosarivo text-lg md:text-xl text-center md:text-left">Website related issues:</div>
                <div>
                    <a
                        href="mailto:admin@tilenhudrap.com"
                        class="flex gap-2 items-center justify-center md:justify-start font-roboto text-neutral-500 tracking-wide hover:text-neutral-300 transition"
                    >
                        <i class="bx bx-envelope text-brand"></i>
                        admin@tilenhudrap.com
                    </a>
                </div>
            </div>

        </div>

    </div>

</x-layout>
