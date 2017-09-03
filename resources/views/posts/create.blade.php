@extends('layouts.app')
@section('content')
    {{--yousef--}}
    <div class="col-md-6 col-md-offset-3">
        <h1 style="padding-left: 200px">ارسال مطلب جدید</h1>
        <div class="form-group">
            <form class="form-horizontal" role="form" method="POST" action="{{ url('/posts') }}">
                {!! csrf_field() !!}
                <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">

                    <label for="title" class="col-md-8">تیتر</label>

                    <div class="col-md-10">
                        <input id="title" type="text" class="form-control" name="title" style="text-align: right"
                               value="{{ old('title') }}">

                        @if ($errors->has('title'))
                            <span class="help-block">
                                <strong>{{ $errors->first('title') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <label for="picture" class="col-md-8">عکس</label>
                <input id="picture" type="url" class="form-control" name="picture" style="text-align: left"
                       value="{{ old('picture') }}">


                <div class="form-group">
                    <label for="position" class="col-md-8">موقعیت</label>
                    <br>
                    <div class="col-md-8">
                        <select name="position" class="styled-select">
                            <optgroup label="بدون صفحه">
                                <option value="none">عدم نمایش</option>
                            </optgroup>
                        <optgroup label="صفحه اول">
                            <option value="planning-a">planning a</option>
                            <option value="planning-b">planning b</option>
                            <option value="planning-c">planning c</option>
                            <option value="planning-d">planning d</option>
                            <option value="welcome-a">welcome-a</option>
                            <option value="welcome-b">welcome-b</option>
                            <option value="text">text</option>
                            <option value="lastest-news-a">lastest-news-a</option>
                            <option value="lastest-news-b">lastest-news-b</option>
                            <option value="lastest-news-b">lastest-news-c</option>
                            <option value="lastest-news-b">lastest-news-d</option>
                        </optgroup>
                    </select>
                    </div>
                </div>


                <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                    <label for="description" class="col-md-8">متن</label>

                    <div class="col-md-10">
                        <textarea type="text" class="form-control" name="description" value="{{ old('description') }}"
                                  id="ckeditor">
                        </textarea>

                        @if ($errors->has('description'))
                            <span class="help-block">
                                <strong>{{ $errors->first('description') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>


                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4" style="text-align: center">
                        <button type="submit" class="btn btn-primary"
                                style="border-style: solid;border-width: 5px;border-radius: 10%">
                            save
                        </button>
                        <a href="/posts">
                            <button type="button" class="btn btn-primary"
                                    style="border-style: solid;border-width: 5px;border-radius: 10%;background: #a31515;border-color: red">
                                cancel
                            </button>
                        </a>
                    </div>

                </div>
            </form>
        </div>
    </div>

    <script src="/ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('ckeditor');
    </script>
@endsection
