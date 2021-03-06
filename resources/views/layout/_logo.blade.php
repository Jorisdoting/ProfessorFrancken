<div
    class="skew-md--top-right header__logo d-flex flex-md-column justify-content-end justify-content-md-end"
>
    <a class="header__title-link justify-content-end align-items-center d-inline-flex" href="/">
        <img
            alt="Logo of T.F.V. 'Professor Francken'"
            src="/images/LOGO_KAAL.png"
            class="img-fluid scaleUp--hover"
        />
        <span class="header__title text-left">
            T.F.V.<br class="d-none d-md-inline"/>
            'Professor<br class="d-none d-md-inline"/>
            Francken'
        </span>
    </a>

    @include('layout.navigation._hamburger')

    {{--

        This section contains all of the menu items
        We're using partial views so we can focus on
        the structure on the menu

    --}}
    <ul class="navigation-list clearfix" id="main-menu">
        @foreach ($items as $item)
            @include('layout.navigation._mobile-navigation-item', [
                'url' => $item['url'],
                'title' => $item['title'],
                'icon' => $item['icon'],
                'subItems' => $item['subItems'],
            ])
        @endforeach
    </ul>
</div>
