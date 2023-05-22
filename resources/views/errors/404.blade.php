@extends('layouts.main')
@php($locale = \Illuminate\Support\Facades\App::getLocale() == 'en' ? '' : 'pt_');
@section('content')
    <section class="errorpage">
        <div class="container">
            <h1 class="errorpage--title">we lost <br> that page...</h1>
            <h2 class="errorpage--subtitle">Sorry, the page you are looking for doesn`t exist has been moved. Here are
                some helpful links:</h2>
            <ul class="errorpage_list">
                <li class="errorpage--item">
                    <a class="link--black-rotateble-arrows" href="{{ route('index') }}">
                        <span>home page</span>
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
                </li>
                <li class="errorpage--item">
                    <a class="link--black-rotateble-arrows" href="{{ route('index') }}">
                        <span>instagram</span>
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
                </li>
                <li class="errorpage--item">
                    <a class="link--black-rotateble-arrows" href="{{ route('index') }}">
                        <span>Articles</span>
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
                </li>
                <li class="errorpage--item">
                    <a class="link--black-rotateble-arrows" href="{{ route('index') }}">
                        <span>facebook</span>
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
                </li>
                <li class="errorpage--item">
                    <a class="link--black-rotateble-arrows" href="{{ route('index') }}">
                        <span>Forum</span>
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
                </li>
                <li class="errorpage--item">
                    <a class="link--black-rotateble-arrows" href="{{ route('index') }}">
                        <span>telegram</span>
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
                </li>
            </ul>
        </div>
    </section>
@endsection
