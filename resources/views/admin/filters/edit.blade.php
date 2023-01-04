@php
    use App\Models\Seo;
@endphp

@extends('admin.layouts.admin')

@section('style')
    <link rel="stylesheet" href="{{ asset('assets/admin/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/css/select2.min.css') }}">
@endsection
<style>
    .select2-container--default .select2-selection--multiple .select2-selection__choice__display{
        color: black;
        padding-left: 10px !important;
    }
    .select2-container--default .select2-dropdown .select2-search__field:focus, .select2-container--default .select2-search--inline .select2-search__field:focus{
        border: none !important;
    }
</style>
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Добавить SEO к странице</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin') }}">Главная</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('seo.index') }}">SEO</a></li>
                            <li class="breadcrumb-item active">Добавить SEO</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Заполните все поля формы</h3>
                    </div>
                    <form method="post" action="{{ route('filters.update', $filters->id) }}">
                        @csrf
                        @method('patch')
                        <div class="card-body">

                            <div class="form-group">
                                <label for="select1">Vertical</label>
                                <select name="vertical[]" multiple="multiple" class="form-control select1" id="select1">
                                    @if(!empty($filters->vertical))
                                    @foreach(json_decode($filters->vertical, 1) as $i)
                                    <option value="{{ $i }}" selected>{{ $i }}</option>
                                    @endforeach
                                    @endif
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="select2">Countries</label>
                                <select name="countries[]" multiple="multiple" class="form-control select2" id="select2">
                                    @if(!empty($filters->countries))
                                    @foreach(json_decode($filters->countries, 1) as $i)
                                        <option value="{{ $i }}" selected>{{ $i }}</option>
                                    @endforeach
                                    @endif
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="select3">Payment models</label>
                                <select name="payment_models[]" multiple="multiple" class="form-control select3" id="select3">
                                    @if(!empty($filters->payment_models))
                                    @foreach(json_decode($filters->payment_models, 1) as $i)
                                        <option value="{{ $i }}" selected>{{ $i }}</option>
                                    @endforeach
                                    @endif
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="select4">Payment schedule</label>
                                <select name="payment_schedule[]" multiple="multiple" class="form-control select4" id="select4">
                                    @if(!empty($filters->payment_schedule))
                                    @foreach(json_decode($filters->payment_schedule, 1) as $i)
                                        <option value="{{ $i }}" selected>{{ $i }}</option>
                                    @endforeach
                                    @endif
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="select5">Payment systems</label>
                                <select name="payment_systems[]" multiple="multiple" class="form-control select5" id="select5">
                                    @if(!empty($filters->payment_systems))
                                    @foreach(json_decode($filters->payment_systems, 1) as $i)
                                    <option value="{{ $i }}" selected>{{ $i }}</option>
                                    @endforeach
                                    @endif
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="select6">Advertising formats</label>
                                <select name="advertising_formats[]" multiple="multiple" class="form-control select6" id="select6">
                                    @if(!empty($filters->advertising_formats))
                                    @foreach(json_decode($filters->advertising_formats, 1) as $i)
                                    <option value="{{ $i }}" selected>{{ $i }}</option>
                                    @endforeach
                                    @endif
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="select7">Minimum top-up amount</label>
                                <select name="minimum_top_up_amount[]" multiple="multiple" class="form-control select7" id="select7">
                                    @if(!empty($filters->minimum_top_up_amount))
                                    @foreach(json_decode($filters->minimum_top_up_amount, 1) as $i)
                                    <option value="{{ $i }}" selected>{{ $i }}</option>
                                    @endforeach
                                    @endif
                                </select>
                            </div>

                            <div class="card-footer">
                                <button class="btn btn-primary">Сохранить</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('assets/admin/js/select2.min.js') }}"></script>
    <script>
        $('#select1').select2({
            tags: true,
        })
        $('#select2').select2({
            tags: true,
        })
        $('#select3').select2({
            tags: true,
        })
        $('#select4').select2({
            tags: true,
        })
        $('#select5').select2({
            tags: true,
        })
        $('#select6').select2({
            tags: true,
        })
        $('#select7').select2({
            tags: true,
        })
    </script>
@endsection
