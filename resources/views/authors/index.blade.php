@extends('welcome')
@section('title','Aurtours')
@section('nav_Style')

@endsection
<!-- _______ start section of nav bar____ -->

<!-- _______End section of nav bar_______ -->
@section('content')
<script src="//unpkg.com/alpinejs" defer></script>
<script src="https://cdn.jquery.com/jquery-3.6.0.min.com.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<div id="create_div" dir="rtl" class=" flex justify-center items-center peer hidden mt-12">
  <form action="{{route('authors.store')}}" enctype="multipart/form-data" method="post" class=" w-3/4 max-w-full h-[600px] overflow-y-auto px-4 ">
  @csrf 
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
      <div class="flex justify-center text-center px-3  border-b-[3px] border-shadow border-gray-300 ">
        <div class="rounded-full border border-indigo-500 bg-gray-50 p-4 mb-10 shadow-md w-60 h-60 flex justify-center items-center">
          <label for="upload" class="flex flex-col items-center gap-2 cursor-pointer">
             <svg fill="none" height="64" stroke-width="0.7" viewBox="0 0 24 24" width="64" xmlns="http://www.w3.org/2000/svg">
                <path d="M4 19V5C4 3.89543 4.89543 3 6 3H19.4C19.7314 3 20 3.26863 20 3.6V16.7143" stroke="currentColor" stroke-linecap="round" />
                <path d="M8 3V11L10.5 9.4L13 11V3" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M6 17L20 17" stroke="currentColor" stroke-linecap="round" />
                <path d="M6 21L20 21" stroke="currentColor" stroke-linecap="round" />
                <path d="M6 21C4.89543 21 4 20.1046 4 19C4 17.8954 4.89543 17 6 17" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            <span class="text-gray-600 font-medium">Upload book image</span>
          </label>
          <input id="upload" type="file" class="hidden" name="author_image"/>
        </div>
      </div>
      <div class="-mx-3 md:flex mb-6">
        <div class="md:w-full px-3">
          <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-password">
         اسم المولف 
          </label>
          <input name="author_name" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3" id="description" type="text" 
          placeholder="ادخل اسم المولف">
        </div>
      </div>
      <div class="-mx-3 md:flex mb-6">
        <div class="md:w-1/2 px-3 mb-6 md:mb-0 w-full">
          <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-first-name">
            الجنسية
          </label>
          <input name="author_nation" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" id="grid-first-name" type="text" placeholder="ادخل جنسية المولف  ">
        </div>
        <div class="md:w-1/2 px-3">
          <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-last-name">
           المهنة 
          </label>
          <input name="author_job" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey- rounded py-3 px-4" id="grid-last-name" type="text" placeholder=" ادخل  المهنة">
        </div>
      </div>
      <div class="-mx-3 md:flex mb-6">
        <div class="md:w-1/2 px-3 mb-6 md:mb-0 w-full">
          <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-first-name">
            تاريخ الميلاد 
          </label>
          <input  name="author_brith" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" id="grid-first-name" type="date" placeholder="ادخل تاريخ الميلاد">
        </div>
        <div class="md:w-1/2 px-3">
          <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-last-name">
           تاريخ الوفاة  
          </label>
          <input  name="author_didth" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey- rounded py-3 px-4" id="grid-last-name" type="date" placeholder=" ادخل تاريخ الوفاة">
        </div>
      </div>
      <div class="-mx-3 md:flex mb-6">
        <div class="md:w-full px-3">
          <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-password">
       وصف المولف
          </label>
          <input name="author_description" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3" id="description" type="text" 
          placeholder="ادخل  وصف قصير عن المولف">
        </div>
      </div>
      <button class="bg-gradient-to-r from-[#0061f0] to-[#45caff] hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">حفظ</button>
      <!-- ____________________ end do have edition -->
    </div>
  </form>
</div>
<div id="app" class="">
  
<div class=" flex flex-col flex-center   items-center justify-center">
   <div class="font-bold text-center  text-5xl px-2 py-12  mt-10 rounded-lg border-b  font-bold  ">
    <h1>المؤلفون</h1>
</div>
<form dir="rtl" action="{{route('authors.index')}}" id="form" method="get" class="flex justify-center w-full">
      @csrf
      <div class="flex sm:grad-cols-1  w-2/3 lg:grid grad-cols-1 md:grid grad-cols-1  mt-5 border-[#60efff] bg-gray-100 p-2 rounded-lg border-2  w-2/4 ">
        <div class="sm:grid grid-cols-1  w-full lg:grid grid-cols-1 md:grid grad-cols-1 ">
          <input type="text" id="search" placeholder="ابحث عن مولف باستخدام اسمه او بلده" name="search_keyword" class="sm:w-full md:w-full lg:w-full 
                   rounded-lg border-gray-300 focus:border-teal-500 focus:ring px-4 focus:ring-teal-200 flex-grow text-right border-b-none p-2 ">
        </div>
        <div class="h-50 w-full overflow-y-auto ser  sm:w-full md:w-full lg:w-full sm:grid grad-cols-1 md:grid grad-cols-1  
          rounded-lg border-gray-100    focus:ring-teal-200 flex-grow text-right border-b-none  hover:bg-gradient-to-r hover:from[#0061ff] hover:to-[#60efff] ">
        </div>
      </div>
    </form>
</div>
@if(Auth::check())
  <!-- add author bottun -->
  <div class="flex justify-center pt-4">
    <button id="create_button" class="bg-gradient-to-r from-[#60efff] to-[#0061ff] text-center text-2xl text-white shadow-1xl rounded-full justify-center hover:bg-gray-100 hover:text-black   font-bold py-2 px-4 rounded">اضف مولف</button>
  </div>
  <!--End add author bottun -->
@endif  
<div class=" container sm:grid grid-cols-1  xl:grid-cols-5 md:grid-cols-3 lg:grid-cols-4 gap-10 mx-auto py-5 px-10 border-b border-gray-300 pt-10 pb-10">
@foreach ($authors as $author) 
<div class="container sm:grid grid-rows-1  mx-auto my-20 py-auto max-w-sm rounded-b rounded-[60px]  border-2 border-gray-300 shadow-lg hover:scale-105 hover:shadow-2xl transform transition-all duration-500 mt-15">
  <div>
    <img class="sm:rounded-b rounded-[60px] w-full h-60 object-cover " src="../upload/authors/{{$author->author_img}}" alt="">
    </div>
    <div class="p-2  ">
       <a href="{{route('authors.show',$author->author_id)}}"><h1 class="text-2xl font-bold text-gray-800 text-center cursor-pointer pb-2">{{$author['author_name']}}</h1></a>
        <p class="text-lg  text-center font-bold py-2">
           {{$author->books_count}}
            <i class="fas fa-book ml-10"></i>
        </p>
    </div>
    <div></div>
    </div>
@endforeach


    
<div class="container  mx-auto my-20 max-w-sm bg-gray-100  shadow-lg hover:scale-105 hover:shadow-2xl transform transition-all duration-500 mt-15">
    <div class="flex items-center justify-between px-4">
    </div>
    <img class="sm:rounded-t rounded-full w-full" src="https://randomuser.me/api/portraits/men/3.jpg " alt="hello">
    <div class="p-6 ">
        <h1 class="text-3xl font-bold text-gray-800 text-center cursor-pointer pb-2"></h1>
        <p class="text-lg  text-center font-bold py-2">
            العدد (5)
            <i class="fas fa-book ml-10"></i>
        </p>
    </div>
    </div>
    <div class="container  mx-auto my-20 max-w-sm bg-gray-100 rounded-b  rounded-full  shadow-lg hover:scale-105 hover:shadow-2xl transform transition-all duration-500 mt-15">
    <div class="flex items-center justify-between px-4">
    </div>
    <img class="sm:rounded-b  rounded-full  w-full" src="https://randomuser.me/api/portraits/men/20.jpg " alt="hello">
    <div class="p-6 ">
        <h1 class="text-3xl font-bold text-gray-800 text-center cursor-pointer pb-2">احمد شوقي</h1>
        <p class="text-lg  text-center font-bold py-2">
            العدد (5)
            <i class="fas fa-book ml-10"></i>
        </p>
    </div>
    </div>
</div>
</div>
<script>
  let old = $('.ser').html();

  $(document).on('keyup', '#search', function() {
    var search_word = $(this).val();

    if (search_word != '') {
      $.ajax({
        url: "{{ route('authors.index') }}",
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
<!-- start script of parts -->
<script>
  $(document).ready(function() {
    $('#one_part').click(function() {
      $('#radio_div1').show("slow", function() {
        $('#radio_div2').hide("slow", function() {
          $('#more_part').prop('checked', false);
        });
      });
    });

    $('#more_part').click(function() {
      $('#radio_div2').show("slow", function() {
        $('#radio_div1').hide("slow", function() {
          $('#one_part').prop('checked', );
        });
      });
    });
  });
</script>
<!-- end script of parts -->

    @endsection