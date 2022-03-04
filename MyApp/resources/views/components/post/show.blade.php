<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('POSTS') }} <x-nav-link href="{{ route('posts.index')}}"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-90deg-left" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1.146 4.854a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 4H12.5A2.5 2.5 0 0 1 15 6.5v8a.5.5 0 0 1-1 0v-8A1.5 1.5 0 0 0 12.5 5H2.707l3.147 3.146a.5.5 0 1 1-.708.708l-4-4z"/>
              </svg></x-nav-link>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">


                    <h2>{{__( $post->title) }}</h2>
                    <img style="width:100%" src="/cover_images/{{$post->cover_image}}">
                    <br><br>
                    <p>{{ __($post->body) }}</p>
                    <hr>
                    <small>{{ __('Written in') }} {{  $post->created_at  }} </small>
                    <hr>
                    {{-- @if(!Auth::guest()) --}}
                    {{-- @if(Auth::user()->id == $post->user_id) --}}
                    <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                        <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary">Show Post</a>
                    <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-default">Edit</a>
                    <form action="{{ route('posts.destroy', $post->id) }}" method="POST" >
                        @csrf
                        @method('DELETE')
                        <x-button  class="btn btn-danger">Delete</x-button>
                    </form>
                    </div>
                    {{-- @endif --}}
                {{-- @endif --}}

                </div>
            </div>
        </div>
    </div>
</x-app-layout>