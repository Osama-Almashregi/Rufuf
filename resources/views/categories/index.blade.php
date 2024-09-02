@extends('welcome')

<!-- _______ start section of title____ -->
@section('title','Categories')
<!-- _______End section of title_______ -->

<!-- _______End section of nav bar_______ -->
@section('content')
<script src="//unpkg.com/alpinejs" defer></script>
<script src="https://cdn.jquery.com/jquery-3.6.0.min.com.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!--  Hero -->
<div id="create_div" dir="rtl" class=" flex justify-center items-center peer hidden mt-12">
  <form action="" class=" w-3/4 max-w-full h-[600px] overflow-y-auto px-4 ">
    <div class="  px-4 bg-gray-100  shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col my-2 w">
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
          <label class="block uppercase tracking-wide text-grey-darker text-2xl font-bold my-10" for="grid-password">
         اسم القسم
          </label>
          <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3" id="description" type="text" 
          placeholder="ادخل اسم القسم"/>
        </div>
      </div>
      <button class="bg-gradient-to-r from-[#0061f0] to-[#45caff] hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">حفظ</button>
      <!-- ____________________ end do have edition -->
    </div>
  </form>
</div>

<div id="app" class="">
<div class="flex flex-col flex-center   items-center justify-center">
  <div class="font-bold text-center   text-5xl px-2 py-12 m-10 rounded-lg  font-bold  ">
    <h1>الاقسام</h1>
  </div>
</div>
<form dir="rtl" action="{{route('Categories.index')}}" id="form" method="get" class="flex justify-center w-full">
      @csrf
      <div class="flex sm:grad-cols-1  w-2/3 lg:grid grad-cols-1 md:grid grad-cols-1  mt-5 border-[#60efff] bg-gray-100 p-2 rounded-lg border-2 w-2/4 ">
        <div class="sm:grid grid-cols-1  w-full lg:grid grid-cols-1 md:grid grad-cols-1 ">
          <input type="text" id="search" placeholder="ابحث عن قسم" name="search_keyword" class="sm:w-full md:w-full lg:w-full 
                   rounded-lg border-gray-300 focus:border-teal-500 focus:ring px-4 focus:ring-teal-200 flex-grow text-right border-b-none p-2 ">
        </div>
        <div class="h-50 w-full overflow-y-auto ser  sm:w-full md:w-full lg:w-full sm:grid grad-cols-1 md:grid grad-cols-1  
          rounded-lg border-gray-100    focus:ring-teal-200 flex-grow text-right border-b-none  hover:bg-gradient-to-r hover:from[#0061ff] hover:to-[#60efff] ">
        </div>
      </div>
    </form>
<
@if (Auth::check())
<!-- add Category bottun -->
<div class="flex justify-center pt-4 ">
  <button id="create_button" class=" bg-gradient-to-r from-[#60efff] to-[#0061ff] text-2xl text-white font-bold shadow-2xl  rounded-full justify-center hover:  hover:text-black  hover:font-bold py-2 px-4 rounded"><span>اضف قسم</span> </button>
</div>
<!--End add Category bottun -->
@endif
<div class="container sm:grid grid-cols-2  xl:grid-cols-5 mx-auto p-10 item-center md:grid-cols-3 justify-center text-center gap-6 lg:grid-cols-4">
@foreach ($categories as $category)
<a href="{{route('Categories.show',$category->cat_id)}}">
 <div class="bg-gray-100 font-bold  text-gray-700 px-2 py-12 h-40 rounded-lg  font-bold uppercase border border-gray-400 shadow-lg hover:scale-105 hover:shadow-2xl hover:border-blue-700 transform transition-all duration-500 mt-15">
    <h2 class="text-xl font-bold ">{{$category->cat_name}}</h2>
    <span class="mt-2" >عدد الكتب({{$category->books_count}})</span>
  </div>
 </a>
@endforeach 
</div>
</div>
</div>
<script>
  let old = $('.ser').html();

  $(document).on('keyup', '#search', function() {
    var search_word = $(this).val();

    if (search_word != '') {
      $.ajax({
        url: "{{ route('Categories.index') }}",
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