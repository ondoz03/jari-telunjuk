<header
    class="Header fixed inset-0 z-50 flex h-14 w-full border-b border-b-gray-50 bg-white shadow-sm transition-all duration-300 ease-out xl:h-20">
    <div class="container mx-auto flex max-w-screen-xl items-center justify-between gap-3.5 px-4 xl:px-12">
        <nav class="flex items-center gap-8">
            <a class="hidden text-xl xl:block"
                href="/">
                jari<span class="font-bold">telunjuk--</span>
            </a>

            <a class="block flex-shrink-0 text-xl xl:hidden"
                href="/">
                j<span class="font-bold">t--</span>
            </a>

            <div class="relative hidden w-72 xl:block">
                <form action="{{ route('search-result') }}"
                    method="get">
                    {{-- @csrf --}}
                    <input name="search"
                        class="w-full rounded-full border border-stone-300 px-6 py-2 text-sm text-[#2e2e2e] outline-none ring-2 ring-transparent placeholder:text-stone-500 focus:border-stone-300 focus:ring-[#DEDEDE]/25"
                        type="text"
                        placeholder="Cari buku...">
                    <input type="hidden"
                        name="type"
                        value="buku">
                    <input type="hidden"
                        type="submit">
                </form>
            </div>
        </nav>

        <div class="block w-full xl:hidden">
            <form action="{{ route('search-result') }}"
                method="get">
                <input name="search"
                    class="w-full rounded-full border border-stone-300 px-4 py-1 text-sm text-[#2e2e2e] outline-none ring-2 ring-transparent placeholder:text-stone-500 focus:border-stone-300 focus:ring-[#DEDEDE]/25"
                    type="text"
                    placeholder="Cari buku...">
                <input type="hidden"
                    name="type"
                    value="buku">
                <input type="hidden"
                    type="submit">
            </form>
        </div>

        <nav class="flex flex-shrink-0 items-center gap-4 xl:hidden">
            <svg class="bar-3_icon h-6 w-6 cursor-pointer"
                viewBox="0 0 24 24"
                fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <rect x="3"
                    y="3.5"
                    width="18"
                    height="3"
                    rx="1.5"
                    fill="#222222"></rect>
                <rect x="3"
                    y="10.5"
                    width="18"
                    height="3"
                    rx="1.5"
                    fill="#222222"></rect>
                <rect x="3"
                    y="17.5"
                    width="18"
                    height="3"
                    rx="1.5"
                    fill="#222222"></rect>
            </svg>
        </nav>

      <nav id="nav-standard" class="hidden items-center gap-6 {{(!GeneralHelper::authCheck()) ? 'xl:flex' : 'xl:hidden'}}">
        <div class="flex items-center gap-8">
          <a class="text-base leading-5" href="/">About</a>
          <a class="text-base leading-5" href="/blog">Blog</a>
          <a class="text-base leading-5" href="{{route('home')}}">Home</a>
        </div>

          <button class="cursor-pointer rounded-full bg-[#128C55] px-5 py-2 font-bold leading-5 text-white hover:bg-[#128C55]/90" id="btn-modal-signup">
            Sign Up
          </button>
      </nav>

      <nav id="nav-logged-in" class="hidden items-center gap-6 {{(GeneralHelper::authCheck()) ? 'xl:flex' : 'xl:hidden'}}">
          <div class="flex items-center gap-8">
            <a class="text-base leading-5" href="/">About</a>
            <a class="text-base leading-5" href="/blog">Blog</a>
            <a class="text-base leading-5" href="{{route('home')}}">Home</a>
          </div>

          <button id="btn-profile" class="flex items-center gap-2">
            <img class="h-10 w-10 rounded-full border border-stone-300" src="{{(isset(GeneralHelper::userInfo()->avatar)) ? GeneralHelper::userInfo()->avatar : '#'}}" alt="Author 1">

            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M5 7L10 14L15 7H5Z" fill="#2E2E2E"></path>
            </svg>
          </button>
          <div id="dropdown-profile" class="h-100 absolute top-[3.8rem] z-50 mt-5 hidden w-40 divide-gray-100 bg-white p-4 shadow xl:right-16 2xl:right-44">
            <div class="flex flex-col gap-3 text-right">
              <a class="text-base leading-5" href="{{route('user.profile')}}">Profile</a>
              <!-- <a class="text-base leading-5" href="../../blog">Manage Account</a> -->
              <a class="text-base leading-5 text-red-500" href="{{route('user.logout')}}">Logout</a>
            </div>
          </div>
      </nav>
    </div>
</header>

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
                class="{{(!GeneralHelper::authCheck()) ? 'relative' : 'hidden'}} w-full rounded-full bg-[#128C55] px-5 py-2 text-center font-bold leading-5 text-white hover:bg-[#128C55]/90" id="btn-modal-signup">
                Sign Up
            </a>

            <!-- If alrady Logged in -->
            <div class="{{(GeneralHelper::authCheck()) ? 'relative' : 'hidden'}} my-0 h-px w-full bg-[#EBEBEB]">
            </div>

            <div class="{{(GeneralHelper::authCheck()) ? 'flex' : 'hidden'}} flex-col items-start gap-3">
                <figure class="h-10 w-10 rounded-full">
                    <img class="h-full w-full object-cover"
                        src="{{(isset(GeneralHelper::userInfo()->avatar)) ? GeneralHelper::userInfo()->avatar : '#'}}"
                        alt="Author 1">
                </figure>

                <a class="text-base leading-5"
                    href="{{route('user.profile')}}">Profile</a>
                <!-- <a class="text-base leading-5"
                    href="/blog">Manage Account</a> -->
                <a class="text-base leading-5 text-red-500"
                    href="{{route('user.logout')}}">Logout</a>
            </div>
        </nav>
    </div>
</header>

<script type="text/javascript">

    $('#btn-profile').click(function() {
        if($("#dropdown-profile").hasClass("block")) {
            $("#dropdown-profile").removeClass("block");
            $("#dropdown-profile").addClass("hidden");
        } else {
            $("#dropdown-profile").removeClass("hidden");
            $("#dropdown-profile").addClass("block");
        }
    });

</script>


