@foreach ($buku as $item)
    <figure class="group relative item-buku'">
        <a href="{{ route('detail-buku', [$kategori->slug, $item->slug]) }}"
            class="absolute z-10 h-full w-full object-cover"></a>

        <img class="mb-6 w-full"
            src="{{ $item->image }}"
            style="height: 251px;"
            alt="Book Photo 1">

        <figcaption class="mb-1.5 text-md font-semibold leading-[22px] group-hover:underline"
            style="
    letter-spacing: normal;
    color: #151515;
    overflow: hidden;
    text-overflow: ellipsis;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    width: 100%;
    text-align: left;
    margin-bottom: 5px;"
            alt="testing">
            {{ Str::title(Str::lower($item->judul)) }}
        </figcaption>

        <p class="text-[#515151]">By {{ $item->penulis }}</p>
    </figure>
@endforeach
