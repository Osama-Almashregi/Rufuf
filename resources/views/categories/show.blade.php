@extends('welcome')
@section('content')
@if ($category_books)
<div class="font-bold  shadow-lg text-center text-2xl px-10 py-12 m rounded-lg  font-bold bg-gray-50 ">
    @foreach($category_books as $book_category)
    <h1>{{$book_category->cat_name}}</h1>
    @endforeach
</div>
@endif
<div class="font-bold  shadow-lg text-center text-2xl px-10 py-12 m rounded-lg  font-bold bg-gray-50 ">
  <h1>{{$category->cat_name}}</h1>
    </div>
<div class=" container sm:grid grid-cols-1  gap-10 mx-auto px-10 border-b border-gray-300 pt-10  xl:grid-cols-5 md:grid-cols-3 lg:grid-cols-4">
     @foreach($category_books as $category_book)
    <div class="container mx-auto my-10 max-w-sm bg-gray-100 rounded-xl shadow-2xl  hover:scale-105 hover:shadow-2xl transform transition-all duration-500 mt-15">
      <div class="flex items-center justify-between px-4">
        <div class="flex justify-between items-center py-10 ">
          <img class="fixed w-12 h-12 rounded-full m-3 " src="../upload/authors/{{$category_book->authors->first()->author_img}}" alt="Alex" />
          <div  dir="" class="ml-24">
            <h1 dir="rtl" class="text-xl font-bold text-gray-800 cursor-pointer">{{$category_book->authors->first()->author_name}}</h1>
          </div>
        </div>
      </div>
      <img class="sm:rounded-lg h-60 w-full" src="../upload/books/{{$category_book->photo}}" alt="{{$category_book->photo}}">
      <div class="text-center">
        <h1 class="text-1xl font-bold text-gray-800 cursor-pointer ">{{$category_book->title}}</h1>

      </div>
      <div class="container sm:grid grid-cols-1 mx-auto p-4 item-center  justify-center text-center gap-6  ">
        <a href="{{route('books.show', $category_book->book_id)}}" class="bg-gradient-to-r from-[#0061ff] to-[#45caff] text-gray-100 rounded-lg px-10   font-bold py-2 text-l uppercase text-center  ">عرض </a>
      </div>
    </div>

    @endforeach
  </div>
@endsection