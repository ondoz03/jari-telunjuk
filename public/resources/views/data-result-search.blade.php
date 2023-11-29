@foreach ($buku as $item)
<figure class="group relative flex w-full  items-start gap-3 xl:flex-nowrap xl:gap-8">
    <a class="absolute z-10 h-full w-full"
        href="{{ route('detail-buku', [$item->kategori[0]->slug, $item->slug]) }}"></a>

    {{-- <img class="aspect-video h-auto w-full rounded-md xl:h-48 xl:w-auto" src="{{$item->image}}" alt="Blog 1 Photo"> --}}
    <img class="mb-6 w-full rounded-md lazy-img"
        data-src="{{ $item->image }}"
        style="height: 251px; width:171px"
        alt="Book Photo 1">


    <div class="space-y-2 text-left">
        <h5
            class="text-base font-bold leading-5 group-hover:underline xl:text-2xl xl:leading-[28px]">
            {{ $item->judul }}
        </h5>

        <p class=" text-sm text-[#515151] xl:text-base"
            style=" overflow: hidden;
        display: -webkit-box;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 3">
            {{ $item->detail_buku->description }}
        </p>

        <p class="relative z-20 space-x-2 text-sm xl:text-base md:flex"
            style=" overflow: hidden;
        display: -webkit-box;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 1">
            <span>Category</span>
            @foreach ($item->kategori as $val)
                <a href="{{ route('buku', $val->slug) }}"
                    class="text-[#128C55] hover:underline">
                    {{ $val->name }}
                </a>
            @endforeach

        </p>

        <p class="text-sm xl:text-base"
            style=" overflow: hidden;
        display: -webkit-box;
        -webkit-box-orient: vertical;
        -webkit-line-clamp: 1">
            {{ $item->penulis }}
        </p>
        <p>
            {{ $item->detail_buku->tgl_rilis }}
        </p>
    </div>
</figure>
@endforeach
