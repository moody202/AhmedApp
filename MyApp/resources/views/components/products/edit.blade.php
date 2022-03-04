<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('edit') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="{{ route('products.index') }}"><x-button class="btn btn-primary">{{ __('products') }}</x-button></a>

                    <form  method="POST" action="{{ route('products.update', $product->id) }}" enctype="multipart/form-data">
                        @csrf
                        <!-- Name input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="name" value="{{ $product->name }}" name="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                            <label for="name">protected name</label>
                            <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                        </div>
                        <!-- Email address input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="number" value="{{ $product->price }}" name="price" type="number" placeholder="name@example.com" data-sb-validations="required,email" />
                            <label for="email">Price</label>
                        </div>
                        <!-- Phone number input-->
                        <div class="form-floating mb-3">
                            <input class="form-control" value="{{ $product->description }}" id="text" name="description" type="textarea"  data-sb-validations="required" />
                            <label for="phone">Description</label>
                        </div>
                        <!-- Message input-->
                        <div class="form-floating mb-3">
                            <textarea class="form-control"  value="{{ $product->comment }}" name="comment" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                            <label for="message">Message</label>
                        </div>
                        <x-button type="submit">Update</x-button>
                        {{-- <button class="btn btn-primary btn-xl " id="submitButton" type="submit">Send</button> --}}
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
