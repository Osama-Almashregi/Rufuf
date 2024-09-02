@extends('welcome')
@section('title', 'المؤلف')
<!-- _______ start section of nav bar____ -->
@section('navbar')
<ul class="flex space-x-6 mb-4 md:mb-0 text-white">
  <li><a href="#" class="  hover:text-white trasition duration-300">Home</a></li>
  <li><a href="#" class=" hover:text-gray-400 trasition duration-300">About</a></li>
  <li><a href="{{route('books.index')}}" class="hover:text-gray-400 trasition duration-300">Books</a></li>
  <li><a href="{{route('Categories.index')}}" class="  hover:text-gray-400 trasition duration-300">Categories</a></li>
  <li><a href="{{route('authors.index')}}" class=" active ">Aurthors</a></li>
  <li><a href="" class=" hover:text-gray-400 trasition duration-300">Create</a></li>
</ul>
@endsection
<!-- _______End section of nav bar_______ -->
@section('content')
<div class="container sm:grid mx-auto grid-cols-2 gap-10 bg-gray-100 shadow-2xl py-15 px-10 mt-40  justify-center ">
  <div class="container  mx-auto  max-w-sm px-10 my-10">
    <img class="sm:rounded-full w-full mycolor h-[300px]  p-2 shadow-2xl " src="../upload/authors/{{$author->author_img}} " alt="hello">
  </div>

  <div class="container  mx-auto    mt-10 text-center grid-cols-2 gap-10 ">
    <div class="sm:grid grid-cols-1  my-2 xl:grid-cols-5 md:grid-cols-3 lg:grid-cols-4 gap-10 mx-auto ">
      <span class="text-1xl font-bold">تاريخ الميلاد <h1 class="text-1xl font-bold">{{date("Y-m-d",strtotime($author->author_brithday))}}</h1></span>
      <span class="text-1xl font-bold">تاريخ الوفاة <h1 class="text-1xl font-bold">{{date("Y-m-d",strtotime($author->author_deathday))}}</h1></span>
      <span class="text-1xl font-bold">البلد<h1 class="text-1xl font-bold">{{$author->author_nationality}}</h1></span>



    </div>
    <h1 class="text-5xl font-bold py-5  text-red-800 border-b-4  border-red-800">{{$author->author_name}}

      <h2 class="text-2xl  py-5">
        {{$author->author_description}}
      </h2>
      <h1 class="text-2xl font-bold py-5 text-center  text-[#0061ff]  ">
        المهنة:{{$author->author_profession}}
      </h1>
  </div>

</div>

<div class=" container sm:grid grid-cols-1  gap-10 mx-auto px-10 border-b border-gray-300 pt-10  xl:grid-cols-5 md:grid-cols-3 lg:grid-cols-4">
  @foreach($books as $book)
  <div class="container mx-auto my-10 max-w-sm bg-gray-100 rounded-xl shadow-2xl  hover:scale-105 hover:shadow-2xl transform transition-all duration-500 mt-15">
    <div class="flex items-center justify-between px-4">
      <div class="flex justify-between items-center py-10 ">
        <img class="fixed w-12 h-12 rounded-full m-3 " src="../upload/authors/{{$book->authors->first()->author_img}}" alt="Alex" />
        <div dir="" class="ml-24">
          <h1 dir="rtl" class="text-xl font-bold text-gray-800 cursor-pointer">{{$book->authors->first()->author_name}}</h1>
        </div>
      </div>
    </div>
    <img class="sm:rounded-lg h-60 w-full" src="../upload/books/{{$book->photo}}" alt="{{$book->photo}}">
    <div class="text-center">
      <h1 class="text-1xl font-bold text-gray-800 cursor-pointer ">{{$book->title}}</h1>
    </div>
    <div class="container sm:grid grid-cols-1 mx-auto p-4 item-center  justify-center text-center gap-6  ">
      <a href="{{route('books.show', $book->book_id)}}" class="bg-gradient-to-r from-[#0061ff] to-[#45caff] text-gray-100 rounded-lg px-10   font-bold  py-2 text-l uppercase text-center  ">عرض </a>
    </div>
  </div>

  @endforeach
</div>
@endsection