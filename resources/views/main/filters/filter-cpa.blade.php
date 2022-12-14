
@foreach($cpa->groupBy('main_verticales')->toArray() as $k => $i)
    <div class="cpapage_info--block">
        <div class="cpapage_info-header">
            <h2 class="cpapage_info-title">{{ $k }}</h2>
            <a class="link--black-rotateble-arrows" href="{{ route('cpa.catalog', $k) }}">
                <span>See all</span>
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
            </a>
        </div>
        <ul class="cpapage_info-list">
            @foreach($i as $v)
                <li class="cpapage_info--item">
                    <div class="cpapage_info--item_main">
                        <div class="cpapage_info--item_main_top">
                            <div class="cpapage_info--item_main_top-icon">
                                <img src="{{ asset('storage/'. $v['logo']) }}" alt="logo">
                            </div>
                            <ul class="cpapage_info--item_main_top-list">
                                @if(!empty($v['verticales']))
                                    @foreach($v['verticales'] as $tag)
                                        <li class="article--card_info_tags-list-item mobhide">
                                            <a class="article--card_info_tags-list-item--link"
                                               href="{{ route('index') }}">#{{ $tag }}</a>
                                        </li>
                                    @endforeach
                                @endif
                            </ul>

                            <div class="article--card-top">
                                <svg width="12" height="15" viewBox="0 0 12 15" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M3.45249 14.5C0.584113 12.8834 -0.171071 11.3532 0.260689 9.26339C0.579434 7.72023 1.62315 6.46472 1.72322 4.92452C2.16906 5.73587 2.35536 6.32092 2.40517 7.16877C3.82318 5.43144 4.76022 3.02637 4.81571 0.5C4.81571 0.5 8.50908 2.67012 8.75143 5.9481C9.06938 5.27245 9.22944 4.19936 8.91149 3.50389C9.86532 4.1994 15.4482 10.3737 8.15528 14.5C9.52643 11.8302 8.50901 8.22787 6.12832 6.56412C6.28732 7.27951 6.00856 9.9477 4.95533 11.1201C5.24716 9.16111 4.67767 8.33276 4.67767 8.33276C4.67767 8.33276 4.4822 9.43005 3.72382 10.5385C3.03129 11.5507 2.55144 12.6251 3.45249 14.5Z"
                                        fill="white"/>
                                </svg>
                                <p>TOP</p>
                            </div>
                        </div>
                        <p class="cpapage_info--item_main-text">{{ $v["{$locale}prev_text"] }}</p>
                    </div>
                    <div class="cpapage_info--item-line"></div>
                    <div class="cpapage_info--item_buttons">
                        <a class="btn--blue header_buttons-blue-btn" href="{{ route('cpa.page', [$v['main_verticales'], $v['link']]) }}">
                            <span>Review</span>
                            <img src="{{asset('assets/images/icons/arrow-right-white.svg')}}"
                                 alt="arrow">
                        </a>
                        <a target="_blank" class="btn--grey-with-icons" href="{{ $v['url'] }}">
                            <svg width="11" height="12" viewBox="0 0 11 12" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M5.5001 0.600098C4.06793 0.600098 2.69442 1.16902 1.68172 2.18172C0.669025 3.19442 0.100098 4.56793 0.100098 6.0001C0.100098 7.43227 0.669025 8.80578 1.68172 9.81847C2.69442 10.8312 4.06793 11.4001 5.5001 11.4001C6.93227 11.4001 8.30578 10.8312 9.31847 9.81847C10.3312 8.80578 10.9001 7.43227 10.9001 6.0001C10.9001 4.56793 10.3312 3.19442 9.31847 2.18172C8.30578 1.16902 6.93227 0.600098 5.5001 0.600098V0.600098ZM0.766098 6.4081H2.2721C2.2961 6.9541 2.3723 7.4965 2.5001 8.0281H1.2041C0.962421 7.51863 0.814073 6.96994 0.766098 6.4081ZM5.9081 3.1681V1.3141C6.48631 1.53383 6.96143 1.96187 7.2401 2.5141C7.3631 2.7223 7.4717 2.9389 7.5641 3.1621L5.9081 3.1681ZM7.8401 3.9781C7.9793 4.5079 8.0621 5.0509 8.0861 5.5981H5.9081V3.9781H7.8401ZM5.0921 1.3141V3.1681H3.4361C3.52865 2.94472 3.63693 2.72817 3.7601 2.5201C4.03758 1.96561 4.51285 1.53529 5.0921 1.3141ZM5.0921 3.9781V5.5981H2.9201C2.9441 5.0509 3.0269 4.5079 3.1661 3.9781H5.0921ZM2.2721 5.5921H0.766098C0.814073 5.03025 0.962421 4.48157 1.2041 3.9721H2.5001C2.37205 4.50349 2.2957 5.04601 2.2721 5.5921ZM2.9201 6.4081H5.0921V8.0281H3.1661C3.02692 7.49834 2.94446 6.95529 2.9201 6.4081ZM5.0981 8.8081V10.6621C4.51989 10.4424 4.04477 10.0143 3.7661 9.4621C3.64293 9.25402 3.53466 9.03748 3.4421 8.8141L5.0981 8.8081ZM5.9081 10.6621V8.8381H7.5641C7.47154 9.06148 7.36327 9.27802 7.2401 9.4861C6.96143 10.0383 6.48631 10.4664 5.9081 10.6861V10.6621ZM5.9081 7.9981V6.3781H8.0801C8.05574 6.92529 7.97328 7.46834 7.8341 7.9981H5.9081ZM8.7341 6.3781H10.2401C10.1921 6.93994 10.0438 7.48863 9.8021 7.9981H8.5001C8.6261 7.4761 8.7023 6.9439 8.7281 6.4081L8.7341 6.3781ZM8.7341 5.5681C8.70662 5.03188 8.62827 4.49949 8.5001 3.9781H9.7961C10.0379 4.4881 10.1861 5.0365 10.2341 5.5981L8.7341 5.5681ZM9.3341 3.1681H8.2601C8.06577 2.62228 7.78411 2.11163 7.4261 1.6561C8.17273 1.99125 8.82127 2.51173 9.3101 3.1681H9.3341ZM3.5741 1.6561C3.21609 2.11163 2.93442 2.62228 2.7401 3.1681H1.6901C2.17893 2.51173 2.82747 1.99125 3.5741 1.6561ZM1.6841 8.8561H2.7401C2.93442 9.40192 3.21609 9.91256 3.5741 10.3681C2.8254 10.0279 2.17667 9.50107 1.6901 8.8381L1.6841 8.8561ZM7.4201 10.3681C7.77811 9.91256 8.05977 9.40192 8.2541 8.8561H9.3101C8.81828 9.50368 8.17 10.0157 7.4261 10.3441L7.4201 10.3681Z"
                                    fill="#181A1C"/>
                            </svg>
                            {{ substr(substr($v['url'], 8), 0, -1) }}
                        </a>
                    </div>
                </li>
            @endforeach
        </ul>
        <a style="max-width: 200px; width: 100%;" href="{{ route('cpa') }}"
           class="btn--grey cpapage_info--block--link">Show all</a>
    </div>
@endforeach
