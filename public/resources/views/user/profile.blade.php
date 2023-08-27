{{$user->name}} <br>
{{$user->email}}
 <br>
  <br>
   <br>
   Book Recommnedation
    <br>
@foreach ($user->user_recommendation as $item)
{{$item->buku->judul}}
    <br>
@endforeach
    
