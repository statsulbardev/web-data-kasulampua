<x-guest-layout>
    @include('frontend.home-partials.hero')

    @include('frontend.home-partials.news', ['news' => $news])

    @include('frontend.home-partials.tables')

    @include('frontend.home-partials.graphics')

    @include('frontend.home-partials.publications')

    @include('frontend.home-partials.galleries')
</x-guest-layout>
