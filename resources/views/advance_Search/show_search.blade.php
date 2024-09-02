@extends('welcome')
@section('content')
@if (isset($books_publisher))
<div class="font-bold  shadow-lg text-center text-2xl px-10 py-12 m rounded-lg  font-bold bg-gray-50 ">
    @foreach($books_publisher as $book_publisher)
    <h1>{{$book_publisher->pub_name}}</h1>
    @endforeach
</div>
@endif
@if (isset($books_lang))
<div class="font-bold  shadow-lg text-center text-2xl px-10 py-12 m rounded-lg  font-bold bg-gray-50 ">
    @foreach($books_lang as $book_lang)
    <h1>{{$book_lang->lang_name}}</h1>
    @endforeach
</div>
@endif
@if (isset($books_authors))
<div class="font-bold  shadow-lg text-center text-2xl px-10 py-12 m rounded-lg  font-bold bg-gray-50 ">
    @foreach($books_authors as $books_author)
    <h1>{{$books_author->author_name}}</h1>
    @endforeach
</div>
@endif
@if (isset($book_categories))
<div class="font-bold  shadow-lg text-center text-2xl px-10 py-12 m rounded-lg  font-bold bg-gray-50 ">
    @foreach($book_categories as $book_category)
    <h1>{{$book_category->cat_name}}</h1>
    @endforeach
</div>
@endif
@if (isset($books))
<div class="font-bold  shadow-lg text-center text-2xl px-10 py-12 m rounded-lg  font-bold bg-gray-50 ">

    <h1>عناوين الكتب</h1>

</div>
@endif


<div class=" container sm:grid grid-cols-1  gap-10 mx-auto px-10 border-b border-gray-300 pt-10  xl:grid-cols-5 md:grid-cols-3 lg:grid-cols-4">
    @if (isset($books ))
    @foreach($books as $book)
    <div class="container mx-auto my-10 max-w-sm bg-gray-100 rounded-xl shadow  hover:scale-105 hover:shadow-2xl shadow-[#505050] transform transition-all duration-500 mt-15">
        <div class="flex items-center justify-between px-4">

            <div class="flex justify-between items-center py-7">
                <img class="fixed w-12 h-12 rounded-full"
                    src="{{ $book->authors()->first()->author_img ? asset('upload/authors/' . $book->authors()->first()->author_img) : asset('logo/logo.png') }}"
                    alt="Author Image" />
                <div class="ml-24">
                    <h1 class="text-1xl font-bold text-gray-800 cursor-pointer">{{$book->authors()->first()->author_name}} </h1>
                </div>
            </div>
        </div>
        <div class="mx-2">
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
    @if (isset($books_authors))
    @foreach($books_authors as $books_author)
    <div class="container mx-auto my-10 max-w-sm bg-gray-100 rounded-xl shadow  hover:scale-105 hover:shadow-2xl shadow-[#505050] transform transition-all duration-500 mt-15">
        <div class="flex items-center justify-between px-4">
            <div class="flex justify-between items-center py-7">
                <img class="fixed w-12 h-12 rounded-full"
                    src="{{ $books_author->author_img ? asset('upload/authors/' . $books_author->author_img) : asset('logo/logo.png') }}"
                    alt="Author Image" />
                <div class="ml-24">
                    <h1 class="text-1xl font-bold text-gray-800 cursor-pointer">{{$books_author->author_name}} </h1>
                </div>
            </div>
        </div>
        <div class="mx-2">
            <img class="sm:rounded-lg h-60 w-full" src="upload/books/{{$books_author->books()->first()->photo}}" alt="{{$books_author->books()->first()->photo}}">
        </div>
        <div class="text-center">
            <h1 class="text-1xl font-bold text-gray-800 cursor-pointer ">{{$books_author->books()->first()->title}}</h1>

        </div>
        <div class="container sm:grid grid-cols-1 mx-auto p-4 item-center  justify-center text-center gap-6  ">
            <a href="{{route('books.show', $books_author->books()->first()->book_id)}}" class="bg-gradient-to-r from-[#0061ff] to-[#45caff] text-gray-100 rounded-lg px-10   font-bold  py-2 text-lg uppercase text-center  ">عرض </a>
        </div>
    </div>

    @endforeach
    @endif

    @if (isset($books_lang))
    @foreach($books_lang as $book_lang)
    @foreach ($book_lang->books as $book)
    <div class="container mx-auto my-10 max-w-sm bg-gray-100 rounded-xl shadow  hover:scale-105 hover:shadow-2xl shadow-[#505050] transform transition-all duration-500 mt-15">
        <div class="flex items-center justify-between px-4">
            <div class="flex justify-between items-center py-7">
                <img src="{{ $book->authors()->first()->author_img ? asset('upload/authors/' . $book->authors()->first()->author_img) : asset('logo/logo.png')}}" class="fixed w-12 h-12 rounded-full"
                    alt="Author Image" />
                <div class="ml-24">
                    <h1 class="text-1xl font-bold text-gray-800 cursor-pointer">{{$book->authors()->first()->author_name}} </h1>

                </div>
            </div>
        </div>
        <div class="mx-2">
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
    @endforeach
    @endif
    @if (isset($books_publisher))
    @foreach($books_publisher as $book_publisher)
    @foreach ($book_publisher->books as $book)
    <div class="container mx-auto my-10 max-w-sm bg-gray-100 rounded-xl shadow  hover:scale-105 hover:shadow-2xl shadow-[#505050] transform transition-all duration-500 mt-15">
        <div class="flex items-center justify-between px-4">
            <div class="flex justify-between items-center py-7">
                <img src="{{ $book->authors()->first()->author_img ? asset('upload/authors/' . $book->authors()->first()->author_img) : asset('logo/logo.png')}}" class="fixed w-12 h-12 rounded-full"
                    alt="Author Image" />
                <div class="ml-24">
                    <h1 class="text-1xl font-bold text-gray-800 cursor-pointer">{{$book->authors()->first()->author_name}} </h1>

                </div>
            </div>
        </div>
        <div class="mx-2">
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
    @endforeach
    @endif
    @if (isset($book_categories))
    @foreach($book_categories as $book_category)
    @foreach ($book_category->books as $book)
    <div class="container mx-auto my-10 max-w-sm bg-gray-100 rounded-xl shadow  hover:scale-105 hover:shadow-2xl shadow-[#505050] transform transition-all duration-500 mt-15">
        <div class="flex items-center justify-between px-4">
            <div class="flex justify-between items-center py-7">
                <img src="{{ $book->authors()->first()->author_img ? asset('upload/authors/' . $book->authors()->first()->author_img) : asset('logo/logo.png')}}" class="fixed w-12 h-12 rounded-full"
                    alt="Author Image" />
                <div class="ml-24">
                    <h1 class="text-1xl font-bold text-gray-800 cursor-pointer">{{$book->authors()->first()->author_name}} </h1>

                </div>
            </div>
        </div>
        <div class="mx-2">
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
    @endforeach
    @endif
</div>

@endsection