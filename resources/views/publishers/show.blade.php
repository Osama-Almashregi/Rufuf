@extends('welcome')
@section('content')
<div dir="rtl"class="font-bold   text-2xl px-10 py-12 m rounded-lg  font-bold bg-gray-50 ">
  <h1>{{$publisher->pub_name}}</h1>
    </div>

    <div dir="rtl" class="container mx-auto h-20 w-2/3 bg-blue-100 rounded-md my-6">
        <h1 class="text-2xl font-bold px-4 py-2  " >{{$publisher->pub_name}}</h1>
        <p>تأسست {{$publisher->pub_name}} في تأريخ({{$publisher->establishment_date}}) من قبل ({{$publisher->owner}}) وتحمل الرقم التسلسلي ({{$publisher->sequential_deposit_no}})</p>   
    </div>

    <div class=" container sm:grid grid-cols-1  gap-10 mx-auto px-10 border-b border-gray-300 pt-10  xl:grid-cols-5 md:grid-cols-3 lg:grid-cols-4">
     @foreach($books as $book)
    <div class="container mx-auto my-10 max-w-sm bg-gray-100 rounded-xl shadow-2xl  hover:scale-105 hover:shadow-2xl transform transition-all duration-500 mt-15">
      <div class="flex items-center justify-between px-4">
        <div class="flex justify-between items-center py-10 ">
          <img class="fixed w-12 h-12 rounded-full m-3 " src="../upload/authors/{{$book->authors->first()->author_img}}" alt="Alex" />
          <div  dir="" class="ml-24">
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