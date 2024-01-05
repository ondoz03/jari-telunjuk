@foreach ($buku as $item)
    <figure class="group relative flex flex-row items-start gap-6 border-b border-[#DCDCDC] pb-6 last:border-b-0">
        <a href="{{ route('detail-buku', ['buku', $item->slug]) }}" class="absolute inset-0 z-10 h-full w-full object-cover"></a>

        <img class="h-auto w-20" src="{{ $item->image }}" alt="Book Photo 1">

        <div class="space-y-3">
        <h5 class="text-lg font-semibold leading-6 group-hover:underline">
            {{ $item->judul }}
        </h5>

        <div class="flex items-center gap-1.5">
            {{$item->rating}}
            <div class="review">Reviews ({{$item->count_rating}} / 5)
            </div>
        </div>

        <p class="text-base font-normal text-[#515151]">
            {{ $item->penulis }}
        </p>
        </div>
    </figure>
@endforeach
