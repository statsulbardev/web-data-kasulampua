<x-guest-layout>
    @include('frontend.home.home-partials.hero')

    @include('frontend.news.home', ['news' => $news])

    @include('frontend.statistic.home')

    @include('frontend.home.home-partials.graphics', [
        'ipm' => $ipm,
        'kemiskinan' => $kemiskinan
    ])

    @include('frontend.publication.home', ['publications' => $publications])

    @include('frontend.infographic.home', ['infographics' => $infographics])
</x-guest-layout>
