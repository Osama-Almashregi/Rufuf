@extends('welcome')
@section('content')
<script src="//unpkg.com/alpinejs" defer></script>
<script src="https://cdn.jquery.com/jquery-3.6.0.min.com.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<div dir="rtl" class="searchForm t-3 mt-5 w-full">
    <div class="container mx-auto w-full mb-20 p-4">
        <div class="text-center text-5xl font-bold text-blue-600 pt-4 pb-4" id="advance_title">
            <h1>بحث متقدم</h1>
        </div>

        <form name="advance_search" action="{{url('advance_Search')}}" method="GET">
            @csrf
            <div class="flex justify-center mt-5 mb-2">
                <div class="w-3/4">
                    <div class="relative">
                        <i class="fa-duotone fa-magnifying-glass absolute left-3 top-3" style="--fa-animation-duration: 1s;"></i>
                        <input required type="text" name="search_input" id="search_txt" autocomplete="off" class="  w-full p-5 border-2 border-[#60efff]  rounded-2xl focus:outline-none focus:border-[#0061ff]" placeholder="بحث عن">
                        <input type="submit" id="search_btn" value="البحث" class="bg-gradient-to-r from-[#0061ff] to-[#45caff] mt-2 w-full font-bold text-2xl text-white p-2 rounded-2xl hover:bg-blue-700">
                    </div>
                </div>
            </div>
            @if (session()->has('error'))
            <div class="w-full flex justify-center items-center bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                <strong class="font-bold">Error!</strong>
                <span class="block sm:inline"> {{ session()->get('error') }}</span>
            </div>
            @endif
            <div class="flex flex-col w-full items-center pb-5 p-6">
                <div class="mb-2">
                    <label for="search_use" class="form-label text-3xl font-bold">كلمة البحث</label>
                </div>
                <div class="w-3/4 grid grid-cols-2 justify-center">
                    <div class="flex justify-center sm:grid sm:grid-cols-2 gap-4 p-4">
                        <div class="rounded-[10px] border-2 border-gray-900 text-[#] option flex grid grid-rows-2 justify-center items-center p-4  rounded cursor-pointer" onclick="selectOption(this)">
                            <label class="flex justify-center items-center" for="book_title">
                                <i class="fas fa-book text-5xl" width="20px"></i>
                            </label>
                            <span class="font-bold text-2xl pt-4  text-center">عنوان الكتاب</span>
                            <input type="radio" id="book_title" name="book_title" value="book_title" checked class="hidden" onchange="changeBackground(this)">
                        </div>

                        <div class="rounded-[10px] border-2 border-gray-900 text-[#] option flex grid grid-rows-2 justify-center items-center p-4  rounded cursor-pointer" onclick="selectOption(this)">
                            <label class="flex justify-center items-center" for="search_option2">
                                <i class="fas fa-user text-5xl"></i>
                            </label>
                            <span class="font-bold text-2xl pt-4  text-center">المولفون</span>
                            <input type="radio" id="search_option2" name="authors" value="author_name" class="hidden" onchange="changeBackground(this)">
                        </div>
                    </div>
                    <div class="flex justify-center sm:grid sm:grid-cols-2 gap-4 p-4">
                        <div class="rounded-[10px] border-2 border-gray-900 text-[#] option flex grid grid-rows-2 justify-center items-center p-4  rounded cursor-pointer" onclick="selectOption(this)">
                            <label class="flex justify-center items-center" for="search_option3">
                                <i class="fas fa-barcode text-5xl"></i>
                            </label>
                            <span class="font-bold text-2xl pt-4  text-center">الترقيم العالمي</span>
                            <input type="radio" id="search_option3" name="isbn" value="isbn" class="hidden" onchange="changeBackground(this)">
                        </div>
                        <div class="rounded-[10px] border-2 border-gray-900 text-[#] option flex grid grid-rows-2 justify-center items-center p-4  rounded cursor-pointer" onclick="selectOption(this)">
                            <label class="flex justify-center items-center" for="search_option4">
                                <i class="fas fa-bookmark text-5xl" width="20px"></i>
                            </label>
                            <span class="font-bold text-2xl pt-4  text-center">التصنيف الديوي</span>
                            <input type="radio" id="search_option4" name="dewey_no" value="dewey_no" class="hidden" onchange="changeBackground(this)">
                        </div>
                    </div>
                    <div class="flex justify-center sm:grid sm:grid-cols-2 gap-4 p-4">
                        <div class="rounded-[10px] border-2 border-gray-900 text-[#] option flex grid grid-rows-2 justify-center items-center p-t  rounded cursor-pointer" onclick="selectOption(this)">
                            <label class="radio-tile flex justify-center items-center" for="search_option5">
                                <i class="far fa-calendar-alt text-5xl"></i>
                            </label>
                            <span class="font-bold text-2xl pt-4  text-center">تاريخ دار النشر</span>
                            <input type="radio" id="search_option5" name="search_option" value="publication_date" class="hidden" onchange="changeBackground(this)">
                        </div>

                        <div class="rounded-[10px] border-2 border-gray-900 text-[#] option flex grid grid-rows-2 justify-center items-center p-4  rounded cursor-pointer" onclick="selectOption(this)">
                            <label class="flex justify-center items-center" for="search_option6">
                                <i class="fas fa-list text-5xl"></i>
                            </label>
                            <span class="font-bold text-2xl pt-4  text-center">القسم</span>
                            <input type="radio" id="search_option6" name="category" value="category" class="hidden" onchange="changeBackground(this)">
                        </div>
                    </div>
                    <div class="flex justify-center sm:grid sm:grid-cols-2 gap-4 p-4">
                        <div class="rounded-[10px] border-2 border-gray-900 text-[#] option flex grid grid-rows-2 justify-center items-center py-4  rounded cursor-pointer" onclick="selectOption(this)">
                            <label class="flex justify-center items-center" for="search_option7">
                                <i class="fas fa-building text-5xl"></i>
                            </label>
                            <span class="font-bold text-2xl pt-4  text-center">دار النشر</span>
                            <input type="radio" id="search_option7" name="publisher" value="publisher" class="hidden" onchange="changeBackground(this)">
                        </div>
                        <div class="rounded-[10px] border-2 border-gray-900 text-[#] option flex grid grid-rows-2 justify-center items-center p-4  rounded cursor-pointer" onclick="selectOption(this)">
                            <label class="flex justify-center items-center" for="">
                                <i class="fas fa-language text-5xl "></i>
                            </label>
                            <span class="font-bold text-2xl pt-4  text-center">اللغة</span>
                            <input type="radio" id="" name="lang_name" value="lang_name" class="hidden" onchange="changeBackground(this)">
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
    function changeBackground(radio) {
        // Remove background from all options
        const options = document.querySelectorAll('.option');
        options.forEach(option => {
            option.classList.remove('bg-[#00a8ff]', 'text-white');
        });

        // Add background to the selected option
        const parentDiv = radio.closest('.option');
        parentDiv.classList.add('bg-[#00a8ff]', 'text-white');
    }

    function selectOption(div) {
        // Trigger the radio button click
        const radio = div.querySelector('input[type="radio"]');
        if (radio) {
            radio.checked = true;
            changeBackground(radio); // Call to change background
        }
    }

    // Add an event listener to the radio buttons
    document.querySelectorAll('input[type="radio"]').forEach(function(radio) {
        radio.addEventListener('change', function() {
            if (this.value === 'publication_date') {
                document.getElementById('search_txt').type = 'month';
            } else {
                document.getElementById('search_txt').type = 'text';
            }
        });
    });
</script>
<script>
    let old = $('.ser').html();

    $(document).on('keyup', '#search', function() {
        var search_word = $(this).val();

        if (search_word != '') {
            $.ajax({
                url: "{{ url('/advance_Search') }}",
                method: "GET",
                data: {
                    search_word
                },
                dataType: "",
                success: function(data) {
                    $('.ser').html(data.row_result);
                }
            })
        } else {
            $('.ser').html(old);
        }
    });
</script>
@endsection