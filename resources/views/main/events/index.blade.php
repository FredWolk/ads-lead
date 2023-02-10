@extends('layouts.main')
@if(!empty($seo))
    @section('seo')
        <title>{{ $seo["{$locale}title"] }}</title>
        <meta name="description" content="{{ $seo["{$locale}description"] }}">
        <meta name="keywords" content="{{ $seo["{$locale}keywords"] }}"/>
        <meta property="og:title" content="{{ $seo["{$locale}og_title"] }}"/>
        <meta property="og:description" content="{{ $seo["{$locale}og_description"] }}"/>
        <meta property="og:url" content="{{ url()->current() }}"/>
    @endsection
@endif
@section('content')
    <section class="breadcrambs top">
        <div class="container">
            <ul class="breadcrambs_list">
                <li class="breadcrambs_list-item">
                    <a href="{{ route('index') }}">Homepage</a>
                </li>
                <li class="breadcrambs_list-item">
                    {{ !empty($seo) ? $seo["{$locale}h1"] : 'Events' }}
                </li>
            </ul>
        </div>
    </section>

    <section class="cpapage eventspage">
        <div class="container">
            <section class="cpapage_main">
                <div class="cpapage_main-to-hide" style="margin-block: 25px">
                    @empty($seo)
                        <h1 class="title">Events</h1>
                    @else
                        <h1 class="title">{{ $seo["{$locale}h1"] }}</h1>
                        <p class="articlespage-text">{{ $seo["{$locale}after_h1_text"] }}</p>
                    @endempty
                </div>
                <div class="cpapage_info-wrapper">
                    <div class="cpapage_info--block">
                        <ul class="cpapage_info-list events">
                            @foreach ($events as $event)
                                <li class="article--card">
                                    <a class="article--card-link" href="{{ route('event.page', $event['link']) }}"></a>
                                    <img src="{{asset('storage/' . $event["{$locale}image"])}}" alt="banner">
                                    <div class="article--card_info">
                                        <div class="eventcard-item">
                                            <p class="main-events__article--card_info_top-text">
                                                <svg width="9" height="13" viewBox="0 0 9 13" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M4.5 6.1875C4.0856 6.1875 3.68817 6.02288 3.39515 5.72985C3.10212 5.43683 2.9375 5.0394 2.9375 4.625C2.9375 4.2106 3.10212 3.81317 3.39515 3.52015C3.68817 3.22712 4.0856 3.0625 4.5 3.0625C4.9144 3.0625 5.31183 3.22712 5.60485 3.52015C5.89788 3.81317 6.0625 4.2106 6.0625 4.625C6.0625 4.83019 6.02208 5.03337 5.94356 5.22294C5.86504 5.41251 5.74995 5.58476 5.60485 5.72985C5.45976 5.87495 5.28751 5.99004 5.09794 6.06856C4.90837 6.14708 4.70519 6.1875 4.5 6.1875ZM4.5 0.25C3.33968 0.25 2.22688 0.710936 1.40641 1.53141C0.585936 2.35188 0.125 3.46468 0.125 4.625C0.125 7.90625 4.5 12.75 4.5 12.75C4.5 12.75 8.875 7.90625 8.875 4.625C8.875 3.46468 8.41406 2.35188 7.59359 1.53141C6.77312 0.710936 5.66032 0.25 4.5 0.25Z"
                                                        fill="#272C31"/>
                                                </svg>
                                                {{ $event["{$locale}location"] }}
                                            </p>
                                            <div class="main-events__article--card_info_top-date">
                                                <span>{{ $event["{$locale}date"] }}</span>
                                            </div>
                                        </div>
                                        <h2 class="article--card_info-title">{{ $event["{$locale}name"] }}</h2>
                                        <p class="eventcard-item-organizer">organizer
                                            <span>{{ $event['organizer'] }}</span></p>
                                    </div>
                                </li>
                            @endforeach
                            <div class="pagination">
                                {{ $events->links() }}
                            </div>
                        </ul>
                    </div>

                </div>
                @if(!empty($seo))
                    <aside class="articles_seo-text">
                        <h3 class="articles_seo-text--title">seo text</h3>
                        <p class="articles_seo-text--text">{!! $seo["{$locale}seo_text"] !!}</p>
                        <button type="button" class="link--black-rotateble-arrows readmore--btn">
                            <span>read more</span>
                            <div class="link--black-rotateble-arrows-group">
                                @for ($a=0; $a<3; $a++)
                                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M8.37879 4.5H3.00011V1.5H13.5001V12H10.5001V6.62132L4.06077 13.0607L1.93945 10.9393L8.37879 4.5Z"
                                              fill="#272C31"/>
                                    </svg>
                                @endfor
                            </div>
                        </button>
                    </aside>
                @endif
            </section>

            <aside class="filter-aside">
                <form id="filterForm" action="/" method="GET">
                    @csrf
                    <ul class="filter-aside_list">
                        <li class="filter-aside_list-item">
                            <button type="button" class="filter-aside--btn">
                                <p class="filter-aside--btn-text">Time period</p>
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M12.9971 3.09753H11.0031V11.003H3.09761V12.997H11.0031V20.9025H12.9971V12.997H20.9026V11.003H12.9971V3.09753Z"
                                        fill="#181A1C"/>
                                </svg>
                            </button>
                            <div class="filter-aside_list-item_wrapper">

                                <div class="main-events_right_top_month_arrows">
                                    <button type="button" id="yearDown" class="arrow--btn left">
                                        <img class="arrow--btn-black"
                                             src="{{asset('assets/images/icons/arrow-right-black.svg')}}"
                                             alt="arrow">
                                        <img class="arrow--btn-blue"
                                             src="{{asset('assets/images/icons/arrow-right-blue.svg')}}" alt="blue">
                                    </button>
                                    <input type="hidden" id="inpYear" name="year" value="{{ date('Y') }}">
                                    <p id="years" class="events-filter-aside-time">{{ date('Y') }}</p>
                                    <button type="button" id="yearUp" class="arrow--btn">
                                        <img class="arrow--btn-black"
                                             src="{{asset('assets/images/icons/arrow-right-black.svg')}}"
                                             alt="arrow">
                                        <img class="arrow--btn-blue"
                                             src="{{asset('assets/images/icons/arrow-right-blue.svg')}}" alt="blue">
                                    </button>
                                </div>
                                <div class="events-filter-aside-month-checkbox-wrapper">
                                    <div class="custom-checkbox-month-labels">
                                        <label class="custom-checkbox-month-label">
                                            <input class="input-hide" type="radio" name="month" value="01">
                                            <div class="custom-checkbox-month-label-wrap">
                                                <span class="custom-checkbox-month-label-text">January</span>
                                            </div>
                                        </label>
                                        <label class="custom-checkbox-month-label">
                                            <input class="input-hide" type="radio" name="month" value="02">
                                            <div class="custom-checkbox-month-label-wrap">
                                                <span class="custom-checkbox-month-label-text">February</span>
                                            </div>
                                        </label>
                                        <label class="custom-checkbox-month-label">
                                            <input class="input-hide" type="radio" name="month" value="03">
                                            <div class="custom-checkbox-month-label-wrap">
                                                <span class="custom-checkbox-month-label-text">March</span>
                                            </div>
                                        </label>
                                        <label class="custom-checkbox-month-label">
                                            <input class="input-hide" type="radio" name="month" value="04">
                                            <div class="custom-checkbox-month-label-wrap">
                                                <span class="custom-checkbox-month-label-text">April</span>
                                            </div>
                                        </label>
                                        <label class="custom-checkbox-month-label">
                                            <input class="input-hide" type="radio" name="month" value="05">
                                            <div class="custom-checkbox-month-label-wrap">
                                                <span class="custom-checkbox-month-label-text">May</span>
                                            </div>
                                        </label>
                                        <label class="custom-checkbox-month-label">
                                            <input class="input-hide" type="radio" name="month" value="06">
                                            <div class="custom-checkbox-month-label-wrap">
                                                <span class="custom-checkbox-month-label-text">June</span>
                                            </div>
                                        </label>
                                        <label class="custom-checkbox-month-label">
                                            <input class="input-hide" type="radio" name="month" value="07">
                                            <div class="custom-checkbox-month-label-wrap">
                                                <span class="custom-checkbox-month-label-text">July</span>
                                            </div>
                                        </label>
                                        <label class="custom-checkbox-month-label">
                                            <input class="input-hide" type="radio" name="month" value="08">
                                            <div class="custom-checkbox-month-label-wrap">
                                                <span class="custom-checkbox-month-label-text">August</span>
                                            </div>
                                        </label>
                                        <label class="custom-checkbox-month-label">
                                            <input class="input-hide" type="radio" name="month"
                                                   value="09">
                                            <div class="custom-checkbox-month-label-wrap">
                                                <span class="custom-checkbox-month-label-text">September</span>
                                            </div>
                                        </label>
                                        <label class="custom-checkbox-month-label">
                                            <input class="input-hide" type="radio" name="month" value="10">
                                            <div class="custom-checkbox-month-label-wrap">
                                                <span class="custom-checkbox-month-label-text">October</span>
                                            </div>
                                        </label>
                                        <label class="custom-checkbox-month-label">
                                            <input class="input-hide" type="radio" name="month" value="11">
                                            <div class="custom-checkbox-month-label-wrap">
                                                <span class="custom-checkbox-month-label-text">November</span>
                                            </div>
                                        </label>
                                        <label class="custom-checkbox-month-label">
                                            <input class="input-hide" type="radio" name="month" value="12">
                                            <div class="custom-checkbox-month-label-wrap">
                                                <span class="custom-checkbox-month-label-text">December</span>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </form>
                @if(!empty($banner))
                    <aside class="filter-aside">
                        <div class="filter-aside-banner sticky">
                            <a target="_blank" href="{{ $banner->link }}">
                                @if($banner->type == 'image')
                                    <img src="{{asset('storage/'. $banner->file)}}" alt="bunner">
                                @else
                                    <video src="{{ asset('storage/'. $banner->file) }}" autoplay loop muted></video>
                                @endif
                            </a>
                        </div>
                    </aside>
                @endif
            </aside>

            <div class="cpapage_main-to-show">
                <h1 class="title">CPA-networks</h1>
                <p class="articlespage-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo
                    ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes,
                    nascetur ridiculus mus. Donec quam felis, ultricies nec, pellen.</p>
            </div>
        </div>
    </section>

    <section class="breadcrambs bot">
        <div class="container">
            <ul class="breadcrambs_list">
                <li class="breadcrambs_list-item">
                    <a href="{{ route('index') }}">Homepage</a>
                </li>
                <li class="breadcrambs_list-item">
                    {{ !empty($seo) ? $seo["{$locale}h1"] : 'Events' }}
                </li>
            </ul>
        </div>
    </section>
@endsection

@section('scripts')
    <script>
        const year = $('#years');
        $('#yearUp').on('click', function () {
            let y = year.text();
            y++
            year.text(y)
            $('#inpYear').val(y)
        })
        $('#yearDown').on('click', function () {
            let y = year.text();
            y--
            year.text(y)
            $('#inpYear').val(y)
        })

        $('input[name="month"]').on('change', function () {
            $('#filterForm').submit();
        })

        $('#filterForm').on('submit', function (e) {
            e.preventDefault()
            $.ajax({
                url: '{{ route('event.filter') }}',
                data: $(this).serialize(),
                type: 'GET'
            }).done(function (r) {
                if (r !== '') {
                    $('.cpapage_info-list').html(r);
                } else {
                    $('.cpapage_info-list').html(`
                        <div class="cpapage_info-header">
                            <h2 class="cpapage_info-title">Увы, мы ничего не нашли...</h2>
                        </div>
                        `)
                }
            })
        })
    </script>
@endsection
