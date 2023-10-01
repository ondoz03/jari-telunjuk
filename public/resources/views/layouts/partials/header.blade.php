<header class="Header fixed border-b-gray-50 bg-white shadow-sm inset-0 z-50 flex h-14 w-full border-b transition-all duration-300 ease-out xl:h-20">
    <div class="container mx-auto flex max-w-screen-xl items-center justify-between px-4 xl:px-12">
      <nav class="flex items-center gap-8">
        <a class="text-xl" href="/">
          jari<span class="font-bold">telunjuk--</span>
        </a>

        <div class="relative hidden w-72 xl:block">
            <form action="{{route('search-result')}}" method="get">
                @csrf
                <input name="search" class="w-full rounded-full border border-stone-300 px-6 py-2 text-sm text-[#2e2e2e] outline-none ring-2 ring-transparent placeholder:text-stone-500 focus:border-stone-300 focus:ring-[#DEDEDE]/25" type="text" placeholder="Cari buku...">
                <input type="hidden" type="submit">
            </form>
        </div>
      </nav>

      <nav class="flex items-center gap-4 xl:hidden">
        <svg class="search_icon h-6 w-6 cursor-pointer" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" clip-rule="evenodd" d="M5 10C5 6.691 7.691 4 11 4C14.309 4 17 6.691 17 10C17 13.309 14.309 16 11 16C7.691 16 5 13.309 5 10ZM21.707 19.293L17.312 14.897C18.366 13.542 19 11.846 19 10C19 5.589 15.411 2 11 2C6.589 2 3 5.589 3 10C3 14.411 6.589 18 11 18C12.846 18 14.542 17.366 15.897 16.312L20.293 20.707C20.488 20.902 20.744 21 21 21C21.256 21 21.512 20.902 21.707 20.707C22.098 20.316 22.098 19.684 21.707 19.293Z" fill="#222222"></path>
        </svg>

        <svg class="bar-3_icon h-6 w-6 cursor-pointer" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <rect x="3" y="3.5" width="18" height="3" rx="1.5" fill="#222222"></rect>
          <rect x="3" y="10.5" width="18" height="3" rx="1.5" fill="#222222"></rect>
          <rect x="3" y="17.5" width="18" height="3" rx="1.5" fill="#222222"></rect>
        </svg>
      </nav>

      <nav class="hidden items-center gap-6 xl:flex">
        <div class="flex items-center gap-8">
          <a class="text-base leading-5" href="/">About</a>
          <a class="text-base leading-5" href="/blog">Blog</a>
          @if(!GeneralHelper::authCheck()) 
          <a class="text-base leading-5" href="{{route('sign-in')}}">Sign In</a>
          @endif
          <a class="text-base leading-5" href="{{route('home')}}">Home</a>
        </div>

        @if(GeneralHelper::authCheck()) 
          <button class="flex items-center gap-2">
            <img class="h-10 w-10 rounded-full border border-stone-300" src="{{GeneralHelper::userInfo()->avatar}}" alt="Author 1">

            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M5 7L10 14L15 7H5Z" fill="#2E2E2E"></path>
            </svg>
          </button>
        @else
          <a href="{{route('sign-in.sign-up')}}" class="rounded-full bg-[#128C55] px-5 py-2 font-bold leading-5 text-white hover:bg-[#128C55]/90">
            Sign Up
          </a>
        @endif
      </nav>
    </div>
  </header>
