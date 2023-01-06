@php
    $month = [
            '01' => 'January',
            '02' => 'February',
            '03' => 'March',
            '04' => 'April',
            '05' => 'May',
            '06' => 'June',
            '07' => 'July',
            '08' => 'August',
            '09' => 'September',
            '10' => 'October',
            '11' => 'November',
            '12' => 'December'
        ]
@endphp
<div class="main-events_right_top">
    <h3 class="main-cpa-subt">Calendar</h3>

    <div class="main-events_right_top_month">
        <div class="main-events_right_top_month_arrows">
            <button type="button" data-date="{{ !empty($_GET['date']) ? date('Y-m-01', strtotime($_GET['date'].'-1 month')) : date('Y-m-01', strtotime('-1 month')) }}" class="arrow--btn left dateChange">
                <img class="arrow--btn-black"
                     src="{{asset('assets/images/icons/arrow-right-black.svg')}}" alt="arrow">
                <img class="arrow--btn-blue"
                     src="{{asset('assets/images/icons/arrow-right-blue.svg')}}" alt="blue">
            </button>
            <button type="button" data-date="{{ !empty($_GET['date']) ? date('Y-m-01', strtotime($_GET['date'].'+1 month')) : date('Y-m-01', strtotime('+1 month')) }}" class="arrow--btn dateChange">
                <img class="arrow--btn-black"
                     src="{{asset('assets/images/icons/arrow-right-black.svg')}}" alt="arrow">
                <img class="arrow--btn-blue"
                     src="{{asset('assets/images/icons/arrow-right-blue.svg')}}" alt="blue">
            </button>
        </div>
        <p class="main-events_right_top_month-text">
            {{
                !empty($_GET['date'])
                ?
                "{$month[date('m', strtotime($_GET['date']))]} ". date('Y', strtotime($_GET['date']))
                :
                "{$month[date('m')]} ". date('Y')
            }}
        </p>
    </div>
</div>
<div class="calendar">
    <ul class="calendar_list">
        @foreach($calendar as $k => $i)
            @if($i === null)
                <li class="calendar_date ">{{ date('d', strtotime($k)) }}</li>
            @else
                <li class="calendar_date init">
                    <p>{{ date('d', strtotime($k)) }}</p>
                    <p>{{ mb_strimwidth($i["{$locale}name"], 0, 20).'...' }}</p>
                    <div class="popup_event-wrap">
                        <div class="popup_event">
                            <img class="popup_event-image"
                                 src="{{ asset('storage/'. $i["{$locale}image"]) }}" alt="">
                            <div class="popup_event-info">
                                <p class="popup_event-date">{{ $i["{$locale}date"] }}</p>
                                <p class="popup_event-name">{{ $i["{$locale}name"] }}</p>
                            </div>
                        </div>
                    </div>
                </li>
            @endif
        @endforeach
    </ul>
</div>
