@extends('welcome')
@section('nav_Style')
<a href="{{route('books.index')}}" class="text-white block py-2 pr-4 pl-3 text-2xl text-2xl text sm:text-2xl text-center  rounded md:bg-transparent  md:py-0  pl-6 dark:text-white   " aria-activedescendant="true" aria-current="page">
  الرئيسية
</a>
@endsection
@section('title','books')

<!-- _______ start section of nav bar____ -->


<script src="//unpkg.com/alpinejs" defer></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!-- _______End section of nav bar_______ -->
@section('content')
<script src="//unpkg.com/alpinejs" defer></script>
<script src="https://cdn.jquery.com/jquery-3.6.0.min.com.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<div id="create_div" dir="rtl" class=" mt-40 flex justify-center items-center peer hidden ">
  <form action="{{route('books.store')}}" method="post" enctype="multipart/form-data" class="m-10 w-3/4 max-w-full h-[600px] overflow-y-auto px-4 ">
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
          <input id="upload" type="file" class="hidden" name="book_image" />
        </div>
      </div>

      <div class="-mx-3 md:flex my-6">

        <div class="md:w-1/2 px-3  md:mb-0 w-full">
          <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-first-name">
            عنوان الكتاب
          </label>
          <input name="book_title" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" id="grid-first-name" type="text" placeholder="ادخل عنوان الكتاب ">
        </div>
        <div class="md:w-1/2 px-3">
          <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-last-name">
            العنوان الفرعي
          </label>
          <input name="book_subtitle" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey- rounded py-3 px-4" id="grid-last-name" type="text" placeholder=" ادخل العنوان الفرعي">
        </div>
      </div>
      <div class="-mx-3 md:flex mb-6">
        <div class="md:w-full px-3">
          <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-password">
            وصف الكتاب
          </label>
          <input name="book_description" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3" id="description" type="text" placeholder="تصدقنى إذا قلت لك مرة أننى جلست لأكتب مقالا فأخذتنى الكتابة ولم أشعر بالوقت وهو يسرقنى ..فالحق أنى لا أكره شيئا فى الحياة مثلما أكره الكتابة. ولو تركت لنفسى ما جلست إلى مكتبى إلا لأقرأ واستمتع بما عانى غيرى لكى يسطره على الورق .. وليس هناك بالنسبة لى .">
        </div>
      </div>
      <div class="-mx-3 md:flex mb-6">

        <!-- This is an example component -->
        <div class="md:w-1/2 px-3 mb-6 md:mb-0 w-full">
          <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">القسم</label>
          <select name="book_category" id="countries" value="اختر" class=" w-100 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option selected>اختر القسم </option>
            @foreach ($book_category as $category)
            <option value="{{$category->cat_name}}">{{$category->cat_name}}
            </option>
            @endforeach

          </select>
        </div>
        <div class="md:w-1/2 px-3">
          <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-last-name">
            التصنيف الديوي
          </label>
          <input name="book_dewey" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey- rounded py-3 px-4" id="grid-last-name" type="number" placeholder=" ادخل التصنيف الديوي">
        </div>
      </div>
      <div class="-mx-3 md:flex mb-6">

        <div class="md:w-1/2 px-3 mb-6 md:mb-0 w-full">
          <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">اسم المولف</label>
          <select name="book_author" id="countries" value="اختر" class=" w-100  bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option selected>اختر اسم المولف </option>

            @foreach ($book_author as $author)
            <option value="{{$author->author_name}}" class="">{{$author->author_name}}</option>
            @endforeach
          </select>
        </div>
        <div class="md:w-1/2 px-3 mb-6 md:mb-0 w-full">
          <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">دار النشر</label>
          <select name="book_publisher" id="countries" value="اختر" class=" w-100 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option selected>اختر دار النشر </option>
            @foreach ($book_publisher as $publisher)
            <option value="{{ $publisher->pub_name }}" class="">{{$publisher->pub_name}}</option>
            @endforeach
          </select>
        </div>
      </div>
      <div class="-mx-3 md:flex mb-6">
        <div class="md:w-1/2 px-3 mb-6 md:mb-0 w-full">
          <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-first-name">
            مكان النشر
          </label>
          <input name="book_publisher_place" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" id="grid-first-name" type="text" placeholder="ادخل عنوان الكتاب ">
        </div>
        <div class="md:w-1/2 px-3 mb-6 md:mb-0 w-full">
          <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">اختر اللغة</label>
          <select name="book_language" id="countries" value="اختر" class=" w-100 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option selected>اختر اللغة </option>
            @foreach ($book_language as $language )
            <option value="{{$language->lang_name}}">{{$language->lang_name}} </option>

            @endforeach

          </select>
        </div>
      </div>
      <div class="-mx-3 md:flex mb-6">
        <div class="md:w-full px-3">
          <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-last-name">
            رقم الايداع </label>
          <input name="book_depository" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey- rounded py-3 px-4" id="grid-last-name" type="text" placeholder=" 245232/2">
        </div>
      </div>
      <div class="-mx-3 md:flex mb-6">
        <div class="md:w-full px-3">
          <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-password">
            الترقيم الدولي
          </label>
          <input name="book_isbn" class="text-center appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3" id="description" type="text" placeholder="978-977-85156-7-1">
        </div>
      </div>
      <div class="-mx-3 md:flex mb-6">
        <h1>هل الكتاب :</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-2 p-4 ">
          <label>
            <input name="book_one_part" type="radio" id="one_part" value="1" class="peer hidden">
            <div class="hover:bg-gray-50 flex items-center justify-between px-4 py-2 border-2 rounded-lg cursor-pointer text-sm border-gray-200 group peer-checked:border-blue-500">
              <h2 class="font-medium text-gray-700">جزء واحد </h2>
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-9 h-9 text-blue-600 invisible group-[.peer:checked+&]:visible">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
            </div>
          </label>
          <label>
            <input name="book_more_part" type="radio" id="more_part" value="1" class="peer hidden" name="framework">
            <div class="hover:bg-gray-50 flex items-center justify-between px-4 py-2 border-2 rounded-lg cursor-pointer text-sm border-gray-200 group peer-checked:border-blue-500">
              <h2 class="font-medium text-gray-700">اكثر من جزء</h2>
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-9 h-9 text-blue-600 invisible group-[.peer:checked+&]:visible">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
            </div>
          </label>
        </div>
      </div>
      <!-- بعد النقر يضهر هذا الجزء -->
      <div class="hidden" id="radio_div1">
        <div class="-mx-3 md:flex mb-6">
          <div class="md:w-1/2 px-3 mb-6 md:mb-0 w-full">
            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-first-name">
              رقم الطبعة
            </label>
            <input name="book_print_no" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" name="place_of_book" type="text" placeholder="1">
          </div>
          <div class="md:w-1/2 px-3">
            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-last-name">
              وصف الطبعة
            </label>
            <input name="book_print_description" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey- rounded py-3 px-4" id="grid-last-name" type="text" placeholder="منقحة">
          </div>
        </div>
        <div class="-mx-3 md:flex mb-6">
          <div class="md:w-1/2 px-3 mb-6 md:mb-0 w-full">
            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-first-name">
              تاريخ النشر
            </label>
            <input name="book_publish_date" dir="ltr" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" name="place_of_book" type="date" placeholder="------,---">
          </div>
          <div class="md:w-1/2 px-3">
            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-last-name">
              عدد الصفحات
            </label>
            <input name="book_pages_no" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey- rounded py-3 px-4" id="grid-last-name" type="number" placeholder="315">
          </div>
        </div>
        <div class="-mx-3 md:flex mb-6">
          <div class="md:w-1/2 px-3 mb-6 md:mb-0 w-full">
            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-first-name">
              السعر
            </label>
            <input name="book_price" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" name="place_of_book" type="number" placeholder="$200">
          </div>
          <div class="md:w-1/2 px-3">
            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-last-name">
              عدد النسخ</label>
            <input name="book_copies_no" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey- rounded py-3 px-4" id="grid-last-name" type="number" placeholder=" 1">
          </div>
        </div>
        <!-- <div class="-mx-3 md:flex mb-6">
        <div class="md:w-full px-3">
          <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-password">
            رفع الكتاب 
          </label>
          <input name="upload_book" class="appearance-none block w-full bg-white text-grey-darker border border-grey- rounded py-3 px-4" id="upload" type="file">
                </div>
      </div> -->
      </div>
      <div id="radio_div2" class="hidden">
        <div class="md:w-1/2 px-3 mb-6 md:mb-0 w-full">
          <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-first-name">
            عدد الاجزاء
          </label>
          <input name="book_parts_no" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" name="place_of_book" type="number" placeholder="3">
        </div>
      </div>
      <div class="-mx-3 md:flex mb-6">
        <label>
          <input name="book_series" type="checkbox" id="series_radio" value="1" class="peer hidden" name="framework">
          <div class="hover:bg-gray-50 flex items-center justify-between px-1 border-2 rounded-full cursor-pointer text-sm border-gray-200 group peer-checked:border-blue-500">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-5 rounded-full text-blue-600 invisible group-[.peer:checked+&]:visible">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
          </div>
        </label>
        <h1 class="flex justify-center text-center px-3">هل الكتاب ضمن سلسلة</h1>

      </div>
      <div id="series_div" class="-mx-3 hidden">
        <div class="-mx-3  md:flex mb-6">
          <div class="md:w-1/2 px-3 mb-6 md:mb-0 w-full">
            <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">اختر السلسلة</label>
            <select name="series" id="countries" value="اختر" class=" w-100 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
              <option selected>اختر السلسلة </option>
              @foreach ($series as $sery)

              <option value="{{$sery->series_name}}">{{$sery->series_name}}</option>
              @endforeach ()
            </select>
          </div>
          <div class="md:w-1/2 px-3">
            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-last-name">
              رقم الكتاب في السالسلة </label>
            <input name="book_no_in_series" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey- rounded py-3 px-4" id="grid-last-name" type="number" placeholder=" 2">
          </div>
        </div>
      </div>
      <!-- ____________________ start do have edition -->
      <div class="-mx-3 md:flex mb-6">
        <label>
          <input name="edition" type="checkbox" id="edition_radio" value="1" class="peer hidden" name="framework">
          <div class="hover:bg-gray-50 flex items-center justify-between px-1 border-2 rounded-full cursor-pointer text-sm border-gray-200 group peer-checked:border-blue-500">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-5 rounded-full text-blue-600 invisible group-[.peer:checked+&]:visible">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
          </div>
        </label>
        <h1 class="flex justify-center text-center px-3">هل يوجد ملحات للكتاب</h1>
      </div>
      <div id="edition_div" class="-mx-3 hidden">
        <div class="-mx-3  md:flex mb-6">
          <div class="md:w-1/2 px-3">
            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-last-name">
              اسم الملحق </label>
            <input name="edition_name" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey- rounded py-3 px-4" id="grid-last-name" type="text" placeholder=" شرح الكتاب كاملا">
          </div>
          <div class="md:w-1/2 px-3">
            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-last-name">
              نوع الملحق</label>
            <input name="edition_type" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey- rounded py-3 px-4" id="grid-last-name" type="text" placeholder="مستند نصي">
          </div>
        </div>
        <div class="-mx-3  md:flex mb-6 flex justify-center">
          <div class="md:w-1/2 px-3">
            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-last-name">
              موقع الملحق </label>
            <input name="edition_place" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey- rounded py-3 px-4" id="grid-last-name" type="text" placeholder=" بجانب الكتاب">
          </div>

        </div>
      </div>
      <button class="bg-gradient-to-r from-[#0061f0] to-[#45caff] hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">حفظ</button>

      <!-- ____________________ end do have edition -->
    </div>
  </form>
</div>
<div id="app" class="">
  <div class="hero-bg-image flex flex-col flex-center   items-center justify-center">
   <div class="font-bold text-center  text-5xl px-2 py-12  mt-10 rounded-lg border-b  font-bold  ">
    <h1>الرئيسية</h1>
</div>
    <form dir="rtl" action="{{route('books.index')}}" id="form" method="get" class="flex justify-center w-full">
      @csrf
      <div class="flex sm:grad-cols-1  w-2/3 lg:grid grad-cols-1 md:grid grad-cols-1  mt-20 border-[#60efff]  bg-gray-100 p-2 rounded-lg border-2  w-2/4 ">
        <div class="sm:grid grid-cols-1  w-full lg:grid grid-cols-1 md:grid grad-cols-1 ">
          <input type="text" id="search" placeholder="ابحث عن كتاب  باستخدام الموضوع او العنوان الفرعي" name="search_keyword" class="sm:w-full md:w-full lg:w-full 
                   rounded-lg border-gray-300 focus:border-teal-500 focus:ring px-4 focus:ring-teal-200 flex-grow text-right border-b-none p-2 ">
        </div>
        <div class="h-50 w-full overflow-y-auto ser  sm:w-full md:w-full lg:w-full sm:grid grad-cols-1 md:grid grad-cols-1  
          rounded-lg border-gray-100    focus:ring-teal-200 flex-grow text-right border-b-none  hover:bg-gradient-to-r hover:from[#0061ff] hover:to-[#60efff] ">
        </div>
      </div>
    </form>
    <!-- <form action="{{route('books.index') }}" id="form" method="get" class="w-3/4">
      @csrf
      <div class="border-2 border-yellow-100 ">
        <div class="flex items-center justify-center  bg-gray-100 p-6 rounded-lg flex items-center space-x-4 rounded-b-none  ">
          <input type="text" placeholder="ادخل كلمة البحث" id="input" name="search_word" class="p-2 rounded-lg border-gray-300 focus:border-teal-500 focus:ring focus:ring-teal-200 flex-grow text-right">
          <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">بحث</button>
        </div>
        <div class="no-file-found w-full flex flex-col items-center justify-center   pb-8 px-4 text-center bg-gray-100 dark:bg-gray-800 rounded-lg rounded-t-none ">
          @if (isset($error))
          <svg class="w-12 h-12 dark:text-gray-400 text-gray-700" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="200px" width="200px" xmlns="http://www.w3.org/2000/svg">
            <g id="File_Off">
              <g>
                <path d="M4,3.308a.5.5,0,0,0-.7.71l.76.76v14.67a2.5,2.5,0,0,0,2.5,2.5H17.44a2.476,2.476,0,0,0,2.28-1.51l.28.28c.45.45,1.16-.26.7-.71Zm14.92,16.33a1.492,1.492,0,0,1-1.48,1.31H6.56a1.5,1.5,0,0,1-1.5-1.5V5.778Z"></path>
                <path d="M13.38,3.088v2.92a2.5,2.5,0,0,0,2.5,2.5h3.07l-.01,6.7a.5.5,0,0,0,1,0V8.538a2.057,2.057,0,0,0-.75-1.47c-1.3-1.26-2.59-2.53-3.89-3.8a3.924,3.924,0,0,0-1.41-1.13,6.523,6.523,0,0,0-1.71-.06H6.81a.5.5,0,0,0,0,1Zm4.83,4.42H15.88a1.5,1.5,0,0,1-1.5-1.5V3.768Z"></path>
              </g>
            </g>
          </svg>
          <h3 class="text-xl font-medium mt-4 text-gray-700 dark:text-gray-200">File not found</h3>
          <p class="text-gray-500 dark:text-gray-400 mt-2">
            The file you are looking for could not be located.
          </p>
          @endif
        </div>
      </div>
    </form> -->
  </div>
  <!-- add book bottun -->
  @if (Auth::check())
  <div class="flex justify-center pt-4">
    <button id="create_button" class="bg-gradient-to-r from-[#60efff] to-[#0061ff] text-center text-2xl text-white shadow-1xl rounded-full justify-center hover:bg-gray-100 hover:text-black   font-bold py-2 px-4 rounded">اضف كتاب</button>
  </div>

  @endif


  <!-- _______________________________________________________________________________________________________ -->

  <!-- add book bottun -->

  <!-- Create By Joker Banny -->




  <div class=" container sm:grid grid-cols-1  gap-10 mx-auto px-10 border-b border-gray-300 pt-10  xl:grid-cols-5 md:grid-cols-3 lg:grid-cols-4">
    @if (isset($books ))
    @foreach($books as $book)
    <div class="container mx-auto my-10 max-w-sm bg-gray-100 rounded-xl shadow  hover:scale-105 hover:shadow-2xl shadow-[#505050] transform transition-all duration-500 mt-15">
      <div class="flex items-center justify-between px-4">
        <div class="flex justify-between items-center py-7">
        <img class="fixed w-12 h-12 rounded-full" 
     src="{{ $book->authors()->first()->author_img ? asset('upload/authors/' . $book->authors()->first()->author_img) : asset('logo/logo.png') }}" 
     alt="Author Image" />          <div class="ml-24">
            <h1 class="text-1xl font-bold text-gray-800 cursor-pointer">{{$book->authors()->first()->author_name}} </h1>
          </div>
        </div>
      </div>
      <div class="mx-2" > 
        <img class="sm:rounded-lg h-60 w-full" src="upload/books/{{$book->photo}}" alt="{{$book->photo}}">
      </div>
      <div class="text-center">
        <h1 class="text-1xl font-bold text-gray-800 cursor-pointer ">{{$book->title}}</h1>

      </div>
      <div class="container sm:grid grid-cols-1 mx-auto p-4 item-center  justify-center text-center gap-6  ">
        <a href="{{route('books.show', $book->book_id)}}" class="bg-gradient-to-r from-[#0061ff] to-[#45caff] text-gray-100 rounded-lg px-10   font-bold  py-2 text-lg uppercase text-center  ">عرض </a>
      </div>
    </div>

    @endforeach
    @endif
  </div>


</div>

<script>
  let old = $('.ser').html();

  $(document).on('keyup', '#search', function() {
    var search_word = $(this).val();

    if (search_word != '') {
      $.ajax({
        url: "{{ route('books.index') }}",
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

<!-- start script of search input -->
<script>
  const button = document.getElementById('button');
  const form = document.getElementById('form');
  const input = document.getElementById('input');
  const div2 = document.getElementById('modal');
  const message = 'انت لم تدخل شي بعد ';
  const message2 = 'حسناً';

  button.innerHTML = message2;

  const h2 = document.getElementById('h2');
  h2.innerHTML = message;

  form.addEventListener('submit', (event) => {
    event.preventDefault();
    if (input.value.trim() === '') {
      div2.style.display = 'block';

      button.addEventListener('click', () => {
        div2.style.display = 'none';
      });

    } else {
      form.submit();
    }
  });
</script>
<!-- end script of search input -->

<!-- add book botton -->
<!-- add book botton -->


@endsection