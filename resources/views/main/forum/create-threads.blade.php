@extends('layouts.main')

@section('style')
    <link rel="stylesheet" href="{{ asset('assets/admin/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/plugins/summernote/summernote-bs4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/css/select2.min.css') }}">
@endsection
@section('content')
    <style>
        .create__flex {
            display: flex;
            align-items: flex-start;
            gap: 15px;
        }

        .custom-select--btn span {
            font-weight: 500;
        }

        .custom-select_list-item {
            width: auto;
        }

        .select2-container--default .select2-selection--single {
            height: 38px;
        }

        .select2-container--default .select2-selection--multiple .select2-selection__choice {
            background-color: var(--blue);
            border-radius: 20px;
            padding: 0 15px;
            margin-top: 0;
            margin-left: 0;
            margin-right: 5px;
            border: none;
        }

        .select2-container--default .select2-selection--multiple .select2-selection__choice__remove {
            border-radius: 50%;
            background-color: white;
            color: black;
            border: none;
            width: 13px;
            height: 13px;
            top: 5px;
            font-size: 10px;
            padding: 0 4px;
            line-height: 2px;
            font-weight: 500;
        }

        .select2-container--default .select2-selection--multiple .select2-selection__choice__display {
            color: white;
            padding-left: 10px !important;
        }

        .select2-container--default .select2-selection--multiple {
            min-height: 54px;
            border-radius: 0;
            border-color: black;
            padding: 14px 20px;
        }

        .select2-container .select2-search--inline .select2-search__field {
            margin: 0;
            height: 21px;
        }

        .select2-container--default .select2-dropdown .select2-search__field:focus, .select2-container--default .select2-search--inline .select2-search__field:focus {
            border: none !important;
        }
    </style>
    <section class="articlespage forumpage">
        <div class="container">
            <div class="forumpage-board--main-list-wrapper">
                <div style="margin-top: 20px;" class="user-main-corpage_bot">
                    <div class="user-main-corpage_bot_left">
                        <div class="header--notif-body--item-icon-wrapper">
                            <div class="user-main-corpage_top_left-icon">
                                @empty($user->photo)
                                    <img loading="lazy" src="{{asset('assets/images/card-pict.jpg')}}" alt="user">
                                @else
                                    <img loading="lazy" src="{{asset('storage/'. $user->photo)}}" alt="user">
                                @endempty
                            </div>
                        </div>
                        <div class="user-main-corpage_top_left-name-wrapper">
                            <p class="user-main-corpage_top_left-name">{{ $user->name }}</p>
                        </div>
                    </div>
                    <form action="{{ route('store.thread') }}" method="POST" class="user-main-corpage_bot_right">
                        @csrf
                        <input type="hidden" value="{{ $link }}" name="theme">
                        <input type="hidden" id="link" name="link">
                        <div class="user-main-corpage_bot_right-pagin">
                            <div class="create__flex">
                                <div style="max-width: 300px" class="popup_main-inputs-item">
                                    <div class="custom-select_wrapper">
                                        <button style="height: 54px" type="button" class="custom-select--btn">
                                            <span style="color: black" id="slect__input">Без префикса</span>
                                            <svg width="16" height="11" viewBox="0 0 16 11" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                      d="M2.69554 0.87868L0.574219 3L7.99884 10.4246L15.4235 3L13.3021 0.878681L7.99884 5.93933L2.69554 0.87868Z"
                                                      fill="#272C31"/>
                                            </svg>
                                        </button>
                                        <div class="custom-select_list-wrapper">
                                            <ul class="custom-select_list">
                                                <li class="custom-select_list-item">
                                                    <label class="forum--tag color1 custom-select_list-item-label">
                                                        <input type="radio" data-color="color1"
                                                               class="custom-radio input-hide"
                                                               name="prefix"
                                                               value="Gambling">
                                                        <span class="custom-select_list-item-label-text">Gambling</span>
                                                    </label>
                                                </li>
                                                <li class="custom-select_list-item">
                                                    <label class="forum--tag color2 custom-select_list-item-label">
                                                        <input type="radio" data-color="color2"
                                                               class="custom-radio input-hide"
                                                               name="prefix"
                                                               value="Betting">
                                                        <span class="custom-select_list-item-label-text">Betting</span>
                                                    </label>
                                                </li>
                                                <li class="custom-select_list-item">
                                                    <label class="forum--tag color3 custom-select_list-item-label">
                                                        <input type="radio" data-color="color3"
                                                               class="custom-radio input-hide"
                                                               name="prefix"
                                                               value="Nutra">
                                                        <span class="custom-select_list-item-label-text">Nutra</span>
                                                    </label>
                                                </li>
                                                <li class="custom-select_list-item">
                                                    <label class="forum--tag color4 custom-select_list-item-label">
                                                        <input type="radio" data-color="color4"
                                                               class="custom-radio input-hide"
                                                               name="prefix"
                                                               value="Sweepstakes">
                                                        <span
                                                            class="custom-select_list-item-label-text">Sweepstakes</span>
                                                    </label>
                                                </li>
                                                <li class="custom-select_list-item">
                                                    <label class="forum--tag color5 custom-select_list-item-label">
                                                        <input type="radio" data-color="color5"
                                                               class="custom-radio input-hide"
                                                               name="prefix"
                                                               value="Ppc">
                                                        <span class="custom-select_list-item-label-text">Ppc</span>
                                                    </label>
                                                </li>
                                                <li class="custom-select_list-item">
                                                    <label class="forum--tag color6 custom-select_list-item-label">
                                                        <input type="radio" data-color="color6"
                                                               class="custom-radio input-hide"
                                                               name="prefix"
                                                               value="Whitehat">
                                                        <span class="custom-select_list-item-label-text">Whitehat</span>
                                                    </label>
                                                </li>
                                                <li class="custom-select_list-item">
                                                    <label class="forum--tag color7 custom-select_list-item-label">
                                                        <input type="radio" data-color="color7"
                                                               class="custom-radio input-hide"
                                                               name="prefix"
                                                               value="Cpi">
                                                        <span class="custom-select_list-item-label-text">Cpi</span>
                                                    </label>
                                                </li>
                                                <li class="custom-select_list-item">
                                                    <label class="forum--tag color8 custom-select_list-item-label">
                                                        <input type="radio" data-color="color8"
                                                               class="custom-radio input-hide"
                                                               name="prefix"
                                                               value="Wap-Click">
                                                        <span
                                                            class="custom-select_list-item-label-text">Wap-Click</span>
                                                    </label>
                                                </li>
                                                <li class="custom-select_list-item">
                                                    <label class="forum--tag color9 custom-select_list-item-label">
                                                        <input type="radio" data-color="color9"
                                                               class="custom-radio input-hide"
                                                               name="prefix"
                                                               value="Mobile content">
                                                        <span
                                                            class="custom-select_list-item-label-text">Mobile content</span>
                                                    </label>
                                                </li>
                                                <li class="custom-select_list-item">
                                                    <label class="forum--tag color10 custom-select_list-item-label">
                                                        <input type="radio" data-color="color10"
                                                               class="custom-radio input-hide"
                                                               name="prefix"
                                                               value="E-commerce">
                                                        <span
                                                            class="custom-select_list-item-label-text">E-commerce</span>
                                                    </label>
                                                </li>
                                                <li class="custom-select_list-item">
                                                    <label class="forum--tag color11 custom-select_list-item-label">
                                                        <input type="radio" data-color="color11"
                                                               class="custom-radio input-hide"
                                                               name="prefix"
                                                               value="Travel">
                                                        <span class="custom-select_list-item-label-text">Travel</span>
                                                    </label>
                                                </li>
                                                <li class="custom-select_list-item">
                                                    <label class="forum--tag color12 custom-select_list-item-label">
                                                        <input type="radio" data-color="color12"
                                                               class="custom-radio input-hide"
                                                               name="prefix"
                                                               value="Utilites">
                                                        <span class="custom-select_list-item-label-text">Utilites</span>
                                                    </label>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="popup_main-inputs-item">
                                    <input style="height: 54px" id="name" placeholder="Theme" required
                                           class="input-style"
                                           type="text"
                                           value="{{ old('title') }}"
                                           name="title">
                                </div>
                            </div>
                            <div class="form-group">
                                <select name="tags[]" multiple="multiple" class="form-control select1" id="select1">
                                    @if(!empty(old('tags')))
                                        @foreach(old('tags') as $i)
                                            <option value="{{ $i }}" selected>{{ $i }}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                            <textarea class="summernote" name="content" id="" cols="30"
                                      rows="10">{{ old('content') }}</textarea>
                        </div>
                        <button style="max-width: 161px; height: 40px;" class="btn--blue header_buttons-blue-btn">
                            <span>Save</span>
                            <img loading="lazy" src="{{asset('assets/images/icons/arrow-right-white.svg')}}"
                                 alt="arrow">
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script src="{{ asset('assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/admin/plugins/summernote/summernote-bs4.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/select2.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/seo-function.js') }}"></script>
    <script>
        $('input[name="prefix"]').on('input', function () {
            let value = $(this).val(),
                color = $(this).attr('data-color')
            $('#slect__input').removeClass().addClass(`forum--tag ${color}`).val(value);
            $('.custom-select--btn').removeClass('active');
            $('.custom-select_list-wrapper').hide(300)
        })
        $('#select1').select2({
            tags: true,
            placeholder: 'Facebook'
        })
        $('.summernote').summernote({
            height: 300,
            maxHeight: 500,
            toolbar: [
                ['insert', ['picture', 'link', 'table', 'hr']],
                ['fontsize', ['fontname', 'fontsize', 'fontsizeunit', 'color', 'forecolor', 'backcolor', 'bold', 'italic', 'underline', 'strikethrough', 'superscript', 'subscript', 'clear']],
                ['paragraph', ['style', 'ol', 'ul', 'paragraph', 'height']],
                ['misc', ['fullscreen', 'codeview', 'undo', 'redo', 'help']],
            ],
            fontNames: ['Arial', 'Arial Black', 'Comic Sans MS', 'Courier New', 'Helvetica', 'Impact', 'Tahoma', 'Times New Roman', 'Verdana', 'Roboto', 'Montserrat'],
            fontNamesIgnoreCheck: ['Roboto', 'Montserrat']
        });
        $('#name').on('input', function () {
            var j = createLink($(this).val());
            j = j.replace(/ /g, '-');
            j = j.replace(/,-/g, '-');
            j = j.replace(/\\/g, '-');
            j = j.replace(/\//g, '-');
            $('#link').val(j.toLowerCase());
        })
    </script>
@endsection
