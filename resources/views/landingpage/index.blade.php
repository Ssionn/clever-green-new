<x-app-layout>
    <div class="mt-4 sm:mt-6 md:mt-8 lg:mt-12">
        <section>
            <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16">
                <h1 class="mb-4 text-black text-4xl font-extrabold tracking-tight leading-none md:text-5xl lg:text-6xl">
                    {{ __('Transforming Waste into Global Opportunity') }}
                </h1>
                <p class="mb-8 text-gray-700 text-lg font-normal lg:text-xl sm:px-16 lg:px-48">
                    {{ __('We purchase and trade recyclable materials such as paper, wood, metal, plastic, glass, and textiles that might otherwise be discarded or burned. With our international network of over 24 locations, we optimize transportation routes to efficiently connect suppliers and buyers of these materials worldwide.') }}
                </p>
                <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0">
                    <a href="{{ route('landingpage.about') }}" class="py-3 px-5 sm:ms-4 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100">
                        Learn more
                    </a>
                </div>
            </div>
        </section>
    </div>
</x-app-layout>
