@extends('Aldrumo21::layouts.site')

@section('content')
    <section class="bg-white shadow">
        <div class="container px-4 py-8 mx-auto">
            <div class="w-full mx-auto text-left md:w-11/12 xl:w-9/12">
                <h1 class="text-4xl font-bold leading-tight text-gray-900 md:text-5xl">
                    <x-Blocks::renderer key="article-title">
                        Article Title
                    </x-Blocks::renderer>
                </h1>
            </div>
        </div>
    </section>

    <section class="container px-4 pt-7 pb-5 mx-auto">
        <div class="w-full mx-auto text-left md:w-11/12 xl:w-9/12 content">
            <x-Blocks::renderer key="article-body">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam bibendum eget purus a luctus. Proin laoreet commodo est vitae euismod. Nullam dictum odio lorem, eu ultricies ipsum pellentesque ut. Integer mollis enim nisl, quis fermentum est dignissim eget. Nam tincidunt ipsum sed odio fermentum, ac condimentum mauris faucibus. Proin et diam odio. Praesent non pharetra nibh. Aliquam sagittis ligula vitae venenatis pulvinar. Sed tincidunt a enim sed ullamcorper. Praesent eget ullamcorper turpis, ut convallis nunc.
                </p>
            </x-Blocks::renderer>
        </div>
    </section>

@endsection
