@extends('Aldrumo21::layouts.site')

@section('content')
    <section class="container px-4 pt-14 pb-4 mx-auto">
        <div class="w-full mx-auto text-left md:w-11/12 xl:w-9/12 md:text-center">
            <h1 class="mb-6 text-4xl font-extrabold leading-none tracking-normal text-gray-900 md:text-6xl md:tracking-tight">
                <x-Blocks::renderer key="hero-title">
                    A great new product
                </x-Blocks::renderer>
            </h1>
            <p class="px-0 mb-6 text-lg text-gray-600 md:text-xl lg:px-24">
                <x-Blocks::renderer key="hero-body">
                    Giving your business the push it needs to generate more leads.
                </x-Blocks::renderer>
            </p>
            <div class="mt-6 mb-4 space-x-0 md:space-x-2 md:mb-8">
                <a href="/docs/0.x#installation" class="inline-flex items-center justify-center w-full mb-2 sm:w-auto sm:mb-0 btn btn-primary btn-lg">
                    Get Started
                </a>
                <a href="/demo" class="inline-flex items-center justify-center w-full mb-2 sm:w-auto sm:mb-0 btn btn-white btn-lg hover:bg-gray-100">
                    Try the Demo
                </a>
            </div>
        </div>
        <div class="w-full mx-auto mt-10 text-center md:w-10/12">
            <x-Blocks::renderer key="hero-image">
                <img src="/aldrumo/aldrumo21/img/hero.png" alt="Aldrumo21 - Landing Page template" class="w-full rounded-lg" />
            </x-Blocks::renderer>
        </div>
    </section>

    <section class="bg-white shadow">
        <div class="container grid grid-cols-1 gap-20 px-4 py-14 mx-auto lg:px-16 xl:px-24 md:grid-cols-2 lg:grid-cols-3">
            <div>
                <x-fas-dollar-sign class="w-12 h-12 mb-4 text-green-600" />
                <h3 class="mb-3 text-lg font-medium leading-tight text-gray-900">
                    <x-Blocks::renderer key="feature-1-title">
                        Cheap and cost effective
                    </x-Blocks::renderer>
                </h3>
                <p class="text-base leading-relaxed text-gray-600">
                    <x-Blocks::renderer key="feature-1-body">
                        Our solution is cheap and cost effective meaning you can a great return on investment.
                    </x-Blocks::renderer>
                </p>
            </div>
            <div>
                <x-fas-cubes class="w-12 h-12 mb-4 text-green-600" />
                <h3 class="mb-3 text-lg font-medium leading-tight text-gray-900">
                    <x-Blocks::renderer key="feature-2-title">
                        Fully Featured!
                    </x-Blocks::renderer>
                </h3>
                <p class="text-base leading-relaxed text-gray-600">
                    <x-Blocks::renderer key="feature-2-body">
                        Our package comes fully featured with everything your business needs to generate more leads and convert them into sales.
                    </x-Blocks::renderer>
                </p>
            </div>
            <div>
                <x-far-life-ring class="w-12 h-12 mb-4 text-green-600" />
                <h3 class="mb-3 text-lg font-medium leading-tight text-gray-900">
                    <x-Blocks::renderer key="feature-3-title">
                        Great Support
                    </x-Blocks::renderer>
                </h3>
                <p class="text-base leading-relaxed text-gray-600">
                    <x-Blocks::renderer key="feature-3-body">
                        Having problems? We got you covered, our great support team is on hand 9-6 mon-fri to help you out.
                    </x-Blocks::renderer>
                </p>
            </div>
        </div>
    </section>

    <section class="container px-4 py-24 mx-auto">
        <div class="grid items-center grid-cols-1 mb-24 md:grid-cols-2 gap-y-10 md:gap-y-32 gap-x-10 md:gap-x-24">
            <div>
                <h2 class="mb-4 text-2xl font-extrabold tracking-tight text-center text-black md:leading-tight sm:text-left md:text-4xl">
                    <x-Blocks::renderer key="feature-1-title">
                        Clear overview for efficient tracking
                    </x-Blocks::renderer>
                </h2>
                <p class="mb-5 text-base text-center text-gray-600 sm:text-left md:text-lg">
                    <x-Blocks::renderer key="feature-1-body">
                        Handle your subscriptions and transactions efficiently with the clear overview in Dashboard. Features like the smart search option allow you to quickly find any data you’re looking for.
                    </x-Blocks::renderer>
                </p>
            </div>
            <div class="w-full h-full bg-black shadow rounded">
                <x-Blocks::renderer key="feature-1-image"></x-Blocks::renderer>
            </div>
        </div>
        <div class="grid flex-col-reverse items-center grid-cols-1 md:grid-cols-2 gap-y-10 md:gap-y-32 gap-x-10 md:gap-x-24">
            <div class="order-none md:order-2">
                <h2 class="mb-4 text-2xl font-extrabold tracking-tight text-center text-black md:leading-tight sm:text-left md:text-4xl">
                    <x-Blocks::renderer key="feature-2-title">
                        Fully featured client area
                    </x-Blocks::renderer>
                </h2>
                <p class="mb-5 text-base text-center text-gray-600 sm:text-left md:text-lg">
                    <x-Blocks::renderer key="feature-2-body">
                        Easy to use client area, allows your customers to manage their account themselves and reduce your admin overheads.
                    </x-Blocks::renderer>
                </p>
            </div>
            <div class="w-full h-full bg-black shadow rounded">
                <x-Blocks::renderer key="feature-2-image"></x-Blocks::renderer>
            </div>
        </div>
    </section>

    <section class="text-white bg-gray-900">
        <div class="container flex flex-col items-stretch justify-between px-4 py-20 mx-auto lg:flex-row sm:items-center">
            <div>
                <h2 class="mb-1 text-xl font-semibold text-left sm:text-2xl sm:text-center lg:text-left">
                    <x-Blocks::renderer key="cta-title">
                        Built for companies of all sizes
                    </x-Blocks::renderer>
                </h2>
                <p class="mb-6 text-lg font-normal text-left text-gray-200 sm:text-xl lg:mb-0 sm:text-center lg:text-left">
                    <x-Blocks::renderer key="cta-body">
                        Start your 14-day free trial or book a personal demo.
                    </x-Blocks::renderer>
                </p>
            </div>
            <div class="flex flex-col mb-2 space-x-0 space-y-2 sm:flex-row sm:space-x-2 sm:space-y-0">
                <x-Blocks::renderer key="cta-buttons">
                    <a href="#" class="w-full btn btn-light btn-lg sm:w-auto">Start free trial</a>
                    <a href="#" class="w-full btn btn-outline-light btn-lg sm:w-auto">Book a demo</a>
                </x-Blocks::renderer>
            </div>
        </div>
    </section>

@endsection
