<header id="header-phone"
    class="Header fixed inset-0 z-[60] hidden h-screen w-full bg-white">
    <div
        class="container mx-auto flex max-w-screen-xl items-center justify-between border-b border-stone-200 px-4 py-3.5">
        <a class="text-xl"
            href="/">
            jari<span class="font-bold">telunjuk--</span>
        </a>

        <svg class="close_icon h-6 w-6 cursor-pointer"
            viewBox="0 0 24 24"
            fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
                clip-rule="evenodd"
                d="M19.6649 18.0492C20.1117 18.496 20.1117 19.2183 19.6649 19.6651C19.442 19.888 19.1495 20 18.8569 20C18.5643 20 18.2718 19.888 18.0489 19.6651L12 13.6161L5.95107 19.6651C5.72822 19.888 5.43566 20 5.1431 20C4.85054 20 4.55798 19.888 4.33513 19.6651C3.88829 19.2183 3.88829 18.496 4.33513 18.0492L10.3841 12.0001L4.33513 5.95111C3.88829 5.50426 3.88829 4.78199 4.33513 4.33514C4.78197 3.88829 5.50423 3.88829 5.95107 4.33514L12 10.3842L18.0489 4.33514C18.4958 3.88829 19.218 3.88829 19.6649 4.33514C20.1117 4.78199 20.1117 5.50426 19.6649 5.95111L13.6159 12.0001L19.6649 18.0492Z"
                fill="#2E2E2E"></path>
        </svg>
    </div>

    <div class="container mx-auto flex max-w-screen-xl items-center justify-between px-4 py-3.5">
        <nav class="flex w-full flex-col items-start gap-6">
            <div class="flex flex-col items-start gap-3">
                <a class="text-base leading-5"
                    href="/">Home</a>
                <a class="text-base leading-5"
                    href="/blog">Kategori</a>
                <a class="text-base leading-5"
                    href="/">About</a>
                <a class="text-base leading-5"
                    href="/">Blog</a>
                <a href="/"
                    class="relative text-base leading-5">
                    Sign In
                </a>
            </div>


            <!-- If not Logged In -->

            <a href="/"
                class="relative w-full rounded-full bg-[#128C55] px-5 py-2 text-center font-bold leading-5 text-white hover:bg-[#128C55]/90">
                Sign Up
            </a>

            <!-- If alrady Logged in -->
            <div class="hidden my-0 h-px w-full bg-[#EBEBEB]">
            </div>

            <div class="hidden flex-col items-start gap-3">
                <figure class="h-10 w-10 rounded-full">
                    <img class="h-full w-full object-cover"
                        src="/author-1.png"
                        alt="Author 1">
                </figure>

                <a class="text-base leading-5"
                    href="/">Profile</a>
                <a class="text-base leading-5"
                    href="/blog">Manage Account</a>
                <a class="text-base leading-5 text-red-500"
                    href="/">Logout</a>
            </div>
        </nav>
    </div>
</header>
