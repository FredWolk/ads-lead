@foreach ($events as $event)
    <li class="article--card">
        <a class="article--card-link" href="{{ route('event.page', $event['link']) }}"></a>
        <img loading="lazy" src="{{asset('storage/' . $event["{$locale}image"])}}" alt="banner">
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
