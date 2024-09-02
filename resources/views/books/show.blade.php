@extends('welcome')
@section('title','books')


@section('content')

<div class=" bg-gray-100 h-40 mx-auto mb-10">
</div>

<div dir="rtl" class="container mx-auto grid grid-cols-3 gap-10 py-15 px-auto mt-10  border-b border-gray-300  justify-center ">

    <div class="container  border-2 border-[#0d6efd] rounded-lg p-1 w-max mx-auto mb-10">
        <img class="sm:rounded-lg h-max     w-max" src="../upload/books/{{$book->photo}}" alt="{{$book->photo}}">

    </div>
    <div class=" container">
        <h1 class="text-1xl font-bold  py-3">{{$book->title}}</h1>
        <h1 class="  py-3">{{$book->authors[0]->author_name}}</h1>
        <h1 class="  py-3">القسم</h1>
    </div>
    <div class="container text-center">
        <table class="w-full mt-40">
            <thead class="  text-blue-700  text-2xl pb-5  ">
                <tr class="border-b-4 border-blue-300 mb-20 py-10">
                    <th class="text-center p-2">عدد الصفحات</th>
                    <th>اللغة</th>
                    <th>الحجم</th>
                    <th>دار النشر</th>
                    <th>عدد النسخ</th>
                </tr>
            </thead>
            <tbody class="text-center font-bold ">
                <tr>
                    <td class="p-2">{{$book_part->parts[0]->pages_no}}</td>
                    <td>عربي</td>
                    <td>{{$book_part->parts[0]->size}}</td>
                    <td>{{$book_publisher->publishers[0]->pub_name}}</td>
                    <td>{{$book_part->parts[0]->num_of_copies}}</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@if (session()->has('error'))
<div class="w-full flex justify-center items-center bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
    <strong class="font-bold">Error!</strong>
    <span class="block sm:inline"> {{ session()->get('error') }}</span>
</div>
@endif
@if (Auth::check())
<div class="flex justify-center items-center mt-10 grid grid-cols-2 gap-10 p-10">
    <a href="{{url('/books/pdf', $book->book_id)}}" class="bg-green-700 text-gray-100 rounded-lg px-10   font-bold  py-2 text-l uppercase text-center ">
        قراءة
    </a>
    <a href="{{route('books.destroy',$book->book_id)}}" class="bg-red-700 text-gray-100 rounded-lg px-10   font-bold  py-2 text-l uppercase text-center ">
        حذف
    </a>
</div>
@endif
<div class=" bg-gray-100 h-20 mx-auto my-10">
    <div class="text-right p-10 text-3xl font-bold py-5">
        :وصف اكتاب
    </div>
</div>
<div class="text-right p-10 text-2xl  py-5 mx-10  py-5 mb-40">
    <p>
        {{$book->description}}
    </p>
</div>

<div class=" bg-gray-100 h-20 mx-auto my-10">
</div>
@endsection