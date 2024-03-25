
@extends('layouts.layouts')
@section('title')
    <title>Reading Tracker Jari Telunjuk</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/datepicker.min.js"></script>

    <style>
        .checked {
            color: orange;
        }

    </style>
@endsection

@section('content')

<main class="relative">
    {{-- header title --}}
    <div class="container relative mx-auto grid h-full max-w-screen-xl grid-cols-1 px-4 lg:grid-cols-12 lg:gap-10 xl:px-12">
        <section class="col-span-1 mt-5 lg:col-span-9 lg:mt-28">
            <h1 class="mb-6 font-arvo text-[34px] leading-none"></h1>
            <article class="mb-6">
                <h3 class="font-arvo mb-3 text-2xl xl:text-[42px] font-bold leading-8">Jari Telunjuk Reading Tracker - Challenge</h3>
                <p>
                    Membantu tracking buku bacaan favorimu, mengelola buku, dan membangun kebiasaan membaca dengan Tracking & Challenge dari Jari Telunjuk.
                </p>
            </article>
        </section>
    </div>

    {{-- main body --}}
    <div class="container relative mx-auto grid h-full max-w-screen-xl grid-cols-1 px-4 lg:grid-cols-12 lg:gap-10 xl:px-12">
        @include('challenge.dashboard')
        @include('challenge.note')
    </div>

    @include('challenge.book');

</main>
@endsection

@section('js')
<script>

        function openEditModal(ids, status,start_date, end_date, jumlah_halaman_start, jumlah_halaman_end, title, rating, review) {

            @if(count(auth()->user()->user_want_read->where('status', '2')) < 5)
                var checkStatusCount = true
            @else
                var checkStatusCount = false
            @endif


            if(status !== 'to_read' || checkStatusCount === true){
                var optionsHTML = "<option selected>Choose a Status</option>" +
                            "<option value='to_read'>To Read</option>" +
                            "<option value='reading'>Reading</option>" +
                            "<option value='reviewing'>Review</option>" +
                            "<option value='read'>Read</option>";
            }else{
                var optionsHTML = "<option selected>Choose a Status</option>" +
                            "<option value='to_read'>To Read</option>";
            }

            $('.destroyModalBuku').attr('data-id', ids);

            document.getElementById("status").innerHTML = optionsHTML;

            document.getElementById('title-modal').innerHTML = title;
            document.getElementById('id_want_read').value = ids;
            document.getElementById('status').value = status;
            document.getElementById('date_started').value = changeDateFormat(start_date);
            document.getElementById('date_ended').value = changeDateFormat(end_date);
            document.getElementById('page_started').value = jumlah_halaman_start;
            document.getElementById('page_ended').value = jumlah_halaman_end;
            document.getElementById('rating').value = rating;
            document.getElementById('review').value = review;

            updateFieldsBasedOnStatus();


        }

        function changeDateFormat(inputDate) {
            const parts = inputDate.split('-');
            const formattedDate = `${parts[2]}/${parts[1]}/${parts[0]}`;
            return formattedDate;
        }

        function submit_ajax(){
            // Get form data
            var formData = $('#formChanges').serialize();
            $.ajax({
                type: 'POST',
                url: $('#formChanges').attr('action'),
                data: formData,
                dataType: 'html',
                success: function (data) {
                    window.location.reload();
                },
                error: function (error) {
                    console.error('Error submitting form:', error);
                }
            });
        }

        function updateFieldsBasedOnStatus() {
            var status = document.getElementById('status').value;
            var page = document.getElementById('page');
            var reviews_rating =  $('.reviewsRatings');

            if (status === 'to_read') {
                page.style.display = 'none';
                reviews_rating.hide();
            } else {
                if(status === 'read' || status === 'reviewed' || status === 'reviewing'){
                    reviews_rating.show();
                }else{
                    reviews_rating.hide();
                }
                page.style.display = 'contents';
            }
        }


        function submit_ajax_dashboard(){
            // Get form data
            var formData = $('#formChangesDashboard').serialize();
            $.ajax({
                type: 'POST',
                url: $('#formChangesDashboard').attr('action'),
                data: formData,
                dataType: 'html',
                success: function (data) {
                    window.location.reload();
                },
                error: function (error) {
                    console.error('Error submitting form:', error);
                }
            });
        }



        function openEditModalDashboard(book, page) {
            // console.log(status)
            document.getElementById('target_book').value = book;
            document.getElementById('target_page').value = page;
        }


        function joinLeaderBoard(){
            $.ajax({
                url: "{{ route('leaderboard.join') }}",
                type: "GET",
                data: {
                },
                success: function(e) {
                    if(e == 'join'){
                        $('.leave-leaderboard').show();
                        $('.join-leaderboard').hide();
                    }else{
                        $('.leave-leaderboard').hide();
                        $('.join-leaderboard').show();
                    }

                },
            });
        }

        function removeListBuku()
        {
            var confirmation = window.confirm("Hapus buku dari daftar raeading tracker, progress bacaanmu juga akan ikut terhapus");
            var ids =$('.destroyModalBuku').attr('data-id');
            if (confirmation) {
                $.ajax({
                    url: "/reading-tracker/" + ids,
                    type: "GET",
                    success: function(e) {
                        window.location.reload()
                    },
                });
            } else {

            }
        }


</script>

@endsection
