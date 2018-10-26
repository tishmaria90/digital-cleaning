@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Пользовательские настройки</div>

                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                @if (session('warning'))
                    <div class="alert alert-warning" role="alert">
                        {{ session('warning') }}
                    </div>
                @endif

                <div class="card-body">
                    <form method="POST" action="{{ url('settings') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="company_name" class="col-md-4 col-form-label text-md-right">Название компании</label>
                            <div class="col-md-6">
                                <input
                                    id="company_name"
                                    type="text"
                                    class="form-control{{ $errors->has('company_name') ? ' is-invalid' : '' }}"
                                    name="company_name"
                                    required
                                    value="{{ old('company_name', \Auth::user()->company_name) }}">

                                @if ($errors->has('company_name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('company_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="coast_one_day" class="col-md-4 col-form-label text-md-right">Средняя стоимость 1го раб дня сотрудника</label>
                            <div class="col-md-6">
                                <input
                                    id="coast_one_day"
                                    type="text"
                                    class="form-control{{ $errors->has('coast_one_day') ? ' is-invalid' : '' }}"
                                    name="coast_one_day"
                                    required
                                    value="{{ old('coast_one_day', \Auth::user()->coast_one_day) }}">

                                @if ($errors->has('coast_one_day'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('coast_one_day') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="rm" class="col-md-4 col-form-label text-md-right">Расходные материалы</label>
                            <div class="col-md-6">
                                <input
                                    id="rm"
                                    type="text"
                                    class="form-control{{ $errors->has('rm') ? ' is-invalid' : '' }}"
                                    name="rm"
                                    required
                                    value="{{ old('rm', \Auth::user()->rm) }}">

                                @if ($errors->has('rm'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('rm') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nr" class="col-md-4 col-form-label text-md-right">Накладные расходы</label>
                            <div class="col-md-6">
                                <input
                                    id="nr"
                                    type="text"
                                    class="form-control{{ $errors->has('nr') ? ' is-invalid' : '' }}"
                                    name="nr"
                                    required
                                    value="{{ old('nr', \Auth::user()->nr) }}">

                                @if ($errors->has('rm'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('rm') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="min_proc" class="col-md-4 col-form-label text-md-right">Минимальный процент наценки</label>
                            <div class="col-md-6">
                                <input
                                    id="min_proc"
                                    type="text"
                                    class="form-control{{ $errors->has('min_proc') ? ' is-invalid' : '' }}"
                                    name="min_proc"
                                    required
                                    value="{{ old('min_proc', \Auth::user()->min_proc) }}">

                                @if ($errors->has('min_proc'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('min_proc') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="recom_proc" class="col-md-4 col-form-label text-md-right">Рекомендованый процент наценки</label>
                            <div class="col-md-6">
                                <input
                                    id="recom_proc"
                                    type="text"
                                    class="form-control{{ $errors->has('recom_proc') ? ' is-invalid' : '' }}"
                                    name="recom_proc"
                                    required
                                    value="{{ old('recom_proc', \Auth::user()->recom_proc) }}">

                                @if ($errors->has('recom_proc'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('recom_proc') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nalog" class="col-md-4 col-form-label text-md-right">Налог</label>
                            <div class="col-md-6">
                                <input
                                    id="nalog"
                                    type="text"
                                    class="form-control{{ $errors->has('nalog') ? ' is-invalid' : '' }}"
                                    name="nalog"
                                    required
                                    value="{{ old('nalog', \Auth::user()->nalog) }}">

                                @if ($errors->has('nalog'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('nalog') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Сохранить
                                </button>
                            </div>
                        </div>
                    </form>

                    {{--<ul class="breadcrumb">--}}
                        {{--<li><a href="#">Главная</a> <span class="divider">/</span></li>--}}
                        {{--<li><a href="#">Библиотека</a> <span class="divider">/</span></li>--}}
                        {{--<li class="active">Данные</li>--}}
                    {{--</ul>--}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
