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
                            <optgroup label="No Page">
                                <option value="none">no view</option>
                            </optgroup>
                            <optgroup label="Home Page">
                            <option value="planning-a">planning a</option>
                            <option value="planning-b">planning b</option>
                            <option value="planning-c">planning c</option>
                            <option value="planning-d">planning d</option>
                            <option value="welcome-a">welcome-a</option>
                            <option value="welcome-b">welcome-b</option>
                            <option value="text">text</option>
                                <option value="latest-news-a">latest-news-a</option>
                                <option value="latest-news-b">latest-news-b</option>
                                <option value="latest-news-c">latest-news-c</option>
                                <option value="latest-news-d">latest-news-d</option>
                                <option value="latest-posts-a">latest-posts-a</option>
                                <option value="latest-posts-b">latest-posts-b</option>
                                <option value="latest-posts-c">latest-posts-c</option>
                                <option value="latest-posts-d">latest-posts-d</option>
                                <option value="latest-posts-e">latest-posts-e</option>
                                <option value="latest-posts-f">latest-posts-f</option>
                                <option value="footer-top-a">footer-top-a</option>
                                <option value="footer-top-b">footer-top-b</option>
                                <option value="footer-top-c">footer-top-c</option>
                                <option value="footer-top-d">footer-top-d</option>
                                {{--<option value="footer-bottom-a">footer-bottom-a</option>--}}
                                {{--<option value="footer-bottom-b">footer-bottom-b</option>--}}
                                <option value="copywrite">copywrite</option>
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
