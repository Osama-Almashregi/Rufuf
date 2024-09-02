@extends('welcome')
@section('nav_Style')
<a href="{{route('books.index')}}" class="block py-2 pr-4 pl-3 text-2xl sm:text-2xl text-center  rounded md:bg-transparent  md:py-0  pl-6 dark:text-white bg-[#0d6efd]  " aria-activedescendant="true" aria-current="page">
                            الرئيسية
                        </a>
@endsection
@section('content')

<script src="//unpkg.com/alpinejs" defer></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<div id="create_div" dir="rtl"  class=" flex justify-center ">
  <form action="" class="w-full max-w-lg">
    <div  class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col my-2 w">
      <div class="-mx-3 md:flex mb-6">

        <div class="md:w-1/2 px-3 mb-6 md:mb-0 w-full">
          <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-first-name">
            عنوان الكتاب
          </label>
          <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" id="grid-first-name" type="text" placeholder="ادخل عنوان الكتاب ">
        </div>
        <div class="md:w-1/2 px-3">
          <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-last-name">
            العنوان الفرعي
          </label>
          <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey- rounded py-3 px-4" id="grid-last-name" type="text" placeholder=" ادخل العنوان الفرعي">
        </div>
      </div>
      <div class="-mx-3 md:flex mb-6">
        <div class="md:w-full px-3">
          <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-password">
            وصف الكتاب
          </label>
          <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3" id="description" type="text" placeholder="تصدقنى إذا قلت لك مرة أننى جلست لأكتب مقالا فأخذتنى الكتابة ولم أشعر بالوقت وهو يسرقنى ..فالحق أنى لا أكره شيئا فى الحياة مثلما أكره الكتابة. ولو تركت لنفسى ما جلست إلى مكتبى إلا لأقرأ واستمتع بما عانى غيرى لكى يسطره على الورق .. وليس هناك بالنسبة لى .">
        </div>
      </div>
      <div class="-mx-3 md:flex mb-6">

        <!-- This is an example component -->
        <div class="md:w-1/2 px-3 mb-6 md:mb-0 w-full">
          <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">القسم</label>
          <select id="countries" value="اختر" class=" w-100 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option selected>اختر القسم </option>
            
            <option value="US">العاب </option>
          </select>
        </div>
        <div class="md:w-1/2 px-3">
          <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-last-name">
            التصنيف الديوي
          </label>
          <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey- rounded py-3 px-4" id="grid-last-name" type="number" placeholder=" ادخل التصنيف الديوي">
        </div>
      </div>
      <div class="-mx-3 md:flex mb-6">

        <div class="md:w-1/2 px-3 mb-6 md:mb-0 w-full">
          <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">اسم المولف</label>
          <select id="countries" value="اختر" class=" w-100 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option selected>اختر اسم المولف </option>
            <option value="US">العاب </option>
            <option value="CA">قصص</option>
            <option value="FR">روايات</option>
            <option value="DE">شعر</option>
          </select>
        </div>
        <div class="md:w-1/2 px-3 mb-6 md:mb-0 w-full">
          <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">دار النشر</label>
          <select id="countries" value="اختر" class=" w-100 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option selected>اختر دار النشر </option>
            <option value="US">العاب </option>
            <option value="CA">قصص</option>
            <option value="FR">روايات</option>
            <option value="DE">شعر</option>
          </select>
        </div>
      </div>
      <div class="-mx-3 md:flex mb-6">

        <div class="md:w-1/2 px-3 mb-6 md:mb-0 w-full">
          <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-first-name">
            مكان النشر
          </label>
          <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" id="grid-first-name" type="text" placeholder="ادخل عنوان الكتاب ">
        </div>
        <div class="md:w-1/2 px-3 mb-6 md:mb-0 w-full">
          <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">اختر اللغة</label>
          <select id="countries" value="اختر" class=" w-100 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option selected>اختر اللغة </option>
            <option value="US">العربية </option>
            <option value="CA">English</option>
          </select>
        </div>
      </div>
      <div class="-mx-3 md:flex mb-6">
        <div class="md:w-1/2 px-3 mb-6 md:mb-0 w-full">
          <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-first-name">
            مكان الكتاب
          </label>
          <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" name="place_of_book" type="text" placeholder="مكان الكتاب داخل المكتبة">
        </div>
        <div class="md:w-1/2 px-3">
          <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-last-name">
            رقم الايداع </label>
          <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey- rounded py-3 px-4" id="grid-last-name" type="text" placeholder=" 245232/2">
        </div>
      </div>
      <div class="-mx-3 md:flex mb-6">
        <div class="md:w-full px-3">
          <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-password">
            الترقيم الدولي
          </label>
          <input class="text-center appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3" id="description" type="text" placeholder="978-977-85156-7-1">
        </div>
      </div>
      <div class="-mx-3 md:flex mb-6">
        <h1>هل الكتاب :</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-2 p-4 ">
          <label>
            <input type="radio" id="one_part" value="1" class="peer hidden" name="framework">
            <div class="hover:bg-gray-50 flex items-center justify-between px-4 py-2 border-2 rounded-lg cursor-pointer text-sm border-gray-200 group peer-checked:border-blue-500">
              <h2 class="font-medium text-gray-700">جزء واحد </h2>
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-9 h-9 text-blue-600 invisible group-[.peer:checked+&]:visible">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
            </div>
          </label>
          <label>
            <input type="radio" id="more_part" value="1" class="peer hidden" name="framework">
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
            <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" name="place_of_book" type="text" placeholder="1">
          </div>
          <div class="md:w-1/2 px-3">
            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-last-name">
              وصف الطبعة
            </label>
            <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey- rounded py-3 px-4" id="grid-last-name" type="text" placeholder="منقحة">
          </div>
        </div>
        <div class="-mx-3 md:flex mb-6">
          <div class="md:w-1/2 px-3 mb-6 md:mb-0 w-full">
            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-first-name">
              تاريخ النشر
            </label>
            <input dir="ltr" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" name="place_of_book" type="date" placeholder="------,---">
          </div>
          <div class="md:w-1/2 px-3">
            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-last-name">
              عدد الصفحات
            </label>
            <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey- rounded py-3 px-4" id="grid-last-name" type="number" placeholder="315">
          </div>
        </div>
        <div class="-mx-3 md:flex mb-6">
          <div class="md:w-1/2 px-3 mb-6 md:mb-0 w-full">
            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-first-name">
              السعر
            </label>
            <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" name="place_of_book" type="number" placeholder="$200">
          </div>
          <div class="md:w-1/2 px-3">
            <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-last-name">
              عدد النسخ</label>
            <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey- rounded py-3 px-4" id="grid-last-name" type="number" placeholder=" 1">
          </div>
        </div>
      </div>
      <div id="radio_div2" class="hidden">
        <div class=" md:w-1/2 px-3 mb-6 md:mb-0 w-full ">
          <label class=" block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-first-name">
            عدد الاجزاء
          </label>
          <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" name="place_of_book" type="number" placeholder="3">
        </div>
      </div>
      <div class="-mx-3 md:flex mb-6">
        <label>
          <input type="checkbox" id="series_radio" value="1" class="peer hidden" name="framework">
          <div class="hover:bg-gray-50 flex items-center justify-between px-1 border-2 rounded-full cursor-pointer text-sm border-gray-200 group peer-checked:border-blue-500">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-5 rounded-full text-blue-600 invisible group-[.peer:checked+&]:visible">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
          </div>
        </label>
        <h1 class="flex justify-center text-center px-3">هل الكتاب ضمن سلسلة</h1>

      </div>
      <div id="series_div"  class="-mx-3 hidden">
      <div   class="-mx-3  md:flex mb-6">
      <div class="md:w-1/2 px-3 mb-6 md:mb-0 w-full">
          <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">اختر اللغة</label>
          <select id="countries" value="اختر" class=" w-100 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option selected>اختر السلسلة </option>
            <option value="US">عالم المعرفة </option>
          </select>
        </div>
        <div class="md:w-1/2 px-3">
          <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-last-name">
            رقم الكتاب في السالسلة </label>
          <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey- rounded py-3 px-4" id="grid-last-name" type="number" placeholder=" 2">
        </div>
      </div>
      </div>
      <!-- ____________________ start do have edition -->
      <div class="-mx-3 md:flex mb-6">
        <label>
          <input type="checkbox" id="edition_radio" value="1" class="peer hidden" name="framework">
          <div class="hover:bg-gray-50 flex items-center justify-between px-1 border-2 rounded-full cursor-pointer text-sm border-gray-200 group peer-checked:border-blue-500">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-5 rounded-full text-blue-600 invisible group-[.peer:checked+&]:visible">
              <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
          </div>
        </label>
        <h1 class="flex justify-center text-center px-3">هل يوجد ملحات للكتاب</h1>
      </div>
      <div id="edition_div"  class="-mx-3 hidden">
        <div   class="-mx-3  md:flex mb-6">
        <div class="md:w-1/2 px-3">
          <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-last-name">
           اسم الملحق </label>
          <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey- rounded py-3 px-4" id="grid-last-name" type="text" placeholder=" شرح الكتاب كاملا">
        </div>
        <div class="md:w-1/2 px-3">
          <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-last-name">
            نوع الملحق</label>
          <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey- rounded py-3 px-4" id="grid-last-name" type="text" placeholder="مستند نصي">
        </div>
      </div>
      <div   class="-mx-3  md:flex mb-6 flex justify-center">
        <div class="md:w-1/2 px-3">
          <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-last-name">
           موقع الملحق </label>
          <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey- rounded py-3 px-4" id="grid-last-name" type="text" placeholder=" بجانب الكتاب">
        </div>
        
      </div>
      </div>
      <!-- ____________________ end do have edition -->
    </div>
  </form>
</div>
<!-- _______________________________________________________________________________________________________ -->

<!-- Javascript Code-->
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
 });
});


  
</script>
<!-- start script of parts -->
<script>
  $(document).ready(function() {
    $('#one_part').click(function() {
      $('#radio_div1').show("slow", function() {
        $('#radio_div2').hide("slow");
      });
    });

    $('#more_part').click(function() {
      $('#radio_div2').show("slow", function() {
        $('#radio_div1').hide("slow", function() {
          $('#one_part').prop('checked', false);
        });
      });
    });
  });
</script>
<!-- end script of parts -->

<!-- End Javascript -->
@endsection