@extends('welcome')
@section('title','publishers')
@section('nav_Style')
<a href="{{route('publishers.index')}}" class="block py-2 pr-4 text-2xl sm:text-2xl text-center  rounded md:bg-transparent  md:py-0  dark:text-white hover:text-black duration-300">
                            دور النشر
                        </a>
@endsection
@section('content')
<script src="//unpkg.com/alpinejs" defer></script>
<script src="https://cdn.jquery.com/jquery-3.6.0.min.com.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<div id="create_div" dir="rtl" class=" flex justify-center items-center peer hidden mt-12">
  <form action="{{route('publishers.store')}}" enctype="multipart/form-data" method="post" class=" w-3/4 max-w-full h-[600px] overflow-y-auto px-4 ">
  @csrf
    <div class=" px-4 bg-gray-100  shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col my-2 w">
      <div id="close" title="close">
        <svg width="64px" height="64px" viewBox="-8.4 -8.4 40.80 40.80" fill="none" xmlns="http://www.w3.org/2000/svg">
          <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
          <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
          <g id="SVGRepo_iconCarrier">
            <path d="M2 12C2 7.28595 2 4.92893 3.46447 3.46447C4.92893 2 7.28595 2 12 2C16.714 2 19.0711 2 20.5355 3.46447C22 4.92893 22 7.28595 22 12C22 16.714 22 19.0711 20.5355 20.5355C19.0711 22 16.714 22 12 22C7.28595 22 4.92893 22 3.46447 20.5355C2 19.0711 2 16.714 2 12Z" stroke="#1C274C" stroke-width="2.4"></path>
            <path d="M14.5 9.50002L9.5 14.5M9.49998 9.5L14.5 14.5" stroke="#1C274C" stroke-width="2.4" stroke-linecap="round"></path>
          </g>
        </svg>
      </div>
      <div class="-mx-3 md:flex mb-6">
        <div class="md:w-full px-3">
          <label class="text-2xl block uppercase tracking-wide text-grey-darker font-bold mb-2" for="grid-password">
          اسم دار النشر 
        </label>
          <input name="pub_name" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3" id="description" type="text" 
          placeholder="ادخل اسم دار النشر">
        </div>
      </div>
      <div class="-mx-3 md:flex mb-6">
        <div class="md:w-1/2 px-3 mb-6 md:mb-0 w-full">
          <label class="block uppercase tracking-wide text-grey-darker text-2xl mb-2" for="grid-first-name">
            رقم الاجازة المتسلسل
          </label>
          <input name="sequential_deposit_no" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" id="grid-first-name" type="text" placeholder="82839221">
        </div>
        <div class="md:w-1/2 px-3">
          <label class="block uppercase tracking-wide text-grey-darker  text-2xl  mb-2" for="grid-last-name">
          تأريخ التاسيس 
          </label>
          <input name="establishment_date" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey- rounded py-3 px-4" id="grid-last-name" type="date" placeholder=" ادخل تأريخ التاسيس">
        </div>
      </div>
      <div class="-mx-3 md:flex mb-6">
        <div class="md:w-full px-3 mb-6 md:mb-0 w-full">
          <label class="block uppercase tracking-wide text-grey-darker  text-2xl  mb-2" for="grid-first-name">
           مؤسس دار النشر
          </label>
          <input name="owner" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" id="grid-first-name" type="text" placeholder="ادخل مؤسس دار النشر">
        </div>
      </div>
      <div class="hidden md:w-1/2 px-3 mb-6 md:mb-0 w-full">
        <label for="countries" class="block mb-2 text-2xl font-medium text-gray-900 dark:text-gray-400">اختر اللغة</label>
        <select id="countries" value="اختر" class=" w-100 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
          <option selected>اختر اللغة </option>
          <option value="US">kpsk </option>
          <option value="CA">kpsk </option>
          <option value="FR">kpsk </option>
          <option value="DE">kpsk </option>
        </select>
      </div>
   
      <button class="bg-gradient-to-r from-[#0061f0] to-[#45caff] hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">حفظ</button>
      <!-- ____________________ end do have edition -->
    </div>
  </form>
</div>

<div id="app" class="">
  <div class="font-bold text-center   text-5xl px-2 py-12 m-10 rounded-lg  font-bold  ">
  <h1>دور النشر</h1>
</div>
<form dir="rtl" action="{{route('publishers.index')}}" id="form" method="get" class="flex justify-center w-full">
      @csrf
      <div class="flex sm:grad-cols-1  w-2/3 lg:grid grad-cols-1 md:grid grad-cols-1  mt-5 border-[#60efff]  bg-gray-100 p-2 rounded-lg border-2 w-2/4 ">
        <div class="sm:grid grid-cols-1  w-full lg:grid grid-cols-1 md:grid grad-cols-1 ">
          <input type="text" id="search" placeholder="ابحث عن  دار النشر او  بأسم  مالكها ..........." name="search_keyword" class="sm:w-full md:w-full lg:w-full 
                   rounded-lg border-gray-300 focus:border-teal-500 focus:ring px-4 focus:ring-teal-200 flex-grow text-right border-b-none p-2 ">
        </div>
        <div class="h-50 w-full overflow-y-auto ser  sm:w-full md:w-full lg:w-full sm:grid grad-cols-1 md:grid grad-cols-1  
          rounded-lg border-gray-100    focus:ring-teal-200 flex-grow text-right border-b-none  hover:bg-gradient-to-r hover:from[#0061ff] hover:to-[#60efff] ">
        </div>
      </div>
    </form>
</div>
@if (Auth::check())
<!-- add publisher bottun -->
<div class="flex justify-center pt-4">
  <button id="create_button" class="bg-gradient-to-r from-[#60efff] to-[#0061ff] text-center text-2xl text-white shadow-1xl rounded-full justify-center hover:bg-gray-100 hover:text-black   font-bold py-2 px-4 rounded">اضف دار نشر </button>
</div>
<!--End add publisher bottun -->
@endif
<div class="container sm:grid grid-cols-2  xl:grid-cols-5 mx-auto p-10 item-center md:grid-cols-3 justify-center text-center gap-6 lg:grid-cols-4">
@foreach ($publishers as $publisher)
<a href="{{route('publishers.show',$publisher->pub_id)}}">
 <div class="bg-gray-100 font-bold  text-gray-700 px-2 py-12 h-40 rounded-lg  font-bold uppercase border border-gray-400 shadow-lg hover:scale-105 hover:shadow-2xl hover:border-blue-700 transform transition-all duration-500 mt-15">
    <h2 class="text-xl font-bold ">{{$publisher->pub_name}}</h2>
    <span class="mt-2" >عدد الكتب({{$publisher->books_count}})</span>
  </div>
 </a>
@endforeach 
</div>
</div>
<script>
  let old = $('.ser').html();

  $(document).on('keyup', '#search', function() {
    var search_word = $(this).val();

    if (search_word != '') {
      $.ajax({
        url: "{{ route('publishers.index') }}",
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
<script>
  $(document).ready(function() {
    $('#series_radio').click(function() {
      $('#series_div').toggle('slow');
    });
    $('#edition_radio').click(function() {
      $('#edition_div').toggle('slow');
    });
    $('#create_button').click(function() {
      $('#create_div').css('display', 'flex');
      $('#app').css('display', 'none');
    });
    $('#close').click(function() {
      $('#create_div').css('display', 'none');
      $('#app').css('display', 'block');
    });
  });
</script>
@endsection