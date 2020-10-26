@extends('blog::layouts.master')

@section('content')
    <div class="flex items-center justify-between bg-gray-100 px-4 sm:px-6 mb-4 sm:mb-8">
        <div class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                 viewBox="0 0 24 24" fill="none" stroke="currentColor"
                 stroke-width="1" stroke-linecap="round" stroke-linejoin="round"
                 class="text-4xl sm:text-5xl text-indigo-300">
                <path
                    d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                <polyline points="14 2 14 8 20 8"></polyline>
                <line x1="16" y1="13" x2="8" y2="13"></line>
                <line x1="16" y1="17" x2="8" y2="17"></line>
                <polyline points="10 9 9 9 8 9"></polyline>
            </svg>
            <div class="my-2 sm:my-4 ml-2 sm:ml-4">
                <h1 class="text-lg sm:text-2xl text-gray-700">{{ __('Edit Post') }}</h1>
                <p class="text-xs sm:text-sm text-gray-500">{{ __('Edit an existing blog post.') }}</p>
            </div>
        </div>
        <a href="{{ route('admin.posts.create') }}"
           class="ml-2 btn flex items-center  px-3 sm:px-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                 viewBox="0 0 24 24" fill="none" stroke="currentColor"
                 stroke-width="2" stroke-linecap="round"
                 stroke-linejoin="round" class="sm:mr-2">
                <path
                    d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                <path
                    d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
            </svg>
            <span class="sr-only sm:not-sr-only">New Post</span>
        </a>
    </div>

    @include("blog::layouts.partials.flash")

    {{-- posts --}}
    <form action="{{ route('admin.posts.update', $post) }}" method="post"
          class="flex flex-wrap mb-4">
        @csrf
        @method('PATCH')
        @include('blog::posts.partials.form', ['submitText' => 'Update'])
    </form>
@endsection
