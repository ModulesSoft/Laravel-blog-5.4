@extends('layouts.app')
@section('content')
    {{--yousef--}}
    <div class="col-md-6 col-md-offset-3">
        <h1 style="padding-left: 200px">ویرایش مطلب </h1>
        <div class="form-group">
            <form class="form-horizontal" role="form" method="POST" action="{!! route('posts.update',$post->id); !!}">
                {!! csrf_field() !!}
                <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">

                    <label for="title" class="col-md-8">تیتر</label>

                    <div class="col-md-10">
                        <input id="title" type="text" class="form-control" name="title" style="text-align: right"
                               value="{!! $post->title; !!}">

                        @if ($errors->has('title'))
                            <span class="help-block">
                                <strong>{{ $errors->first('title') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <label for="picture" class="col-md-8">عکس</label>
                <input id="picture" type="url" class="form-control" name="picture" style="text-align: left"
                       value="{!! $post->picture; !!}">
                @if ($errors->has('picture'))
                    <span class="help-block">
                                <strong>{{ $errors->first('picture') }}</strong>
                            </span>
                @endif

                <div class="form-group">
                    <label for="position" class="col-md-8">موقعیت</label>
                    <br>
                    <div class="col-md-8">
                        <select name="position" class="styled-select"">
                        <optgroup label="No Page">
                            <option value="none">no view</option>
                        </optgroup>
                        <optgroup label="Home Page">
                            <option value="planning-a" <?php if ($post->position == "planning-a") echo 'selected="selected"'?> >
                                planning a
                            </option>
                            <option value="planning-b" <?php if ($post->position == "planning-b") echo 'selected="selected"'?>>
                                planning b
                            </option>
                            <option value="planning-c" <?php if ($post->position == "planning-c") echo 'selected="selected"'?>>
                                planning c
                            </option>
                            <option value="planning-d" <?php if ($post->position == "planning-d") echo 'selected="selected"'?>>
                                planning d
                            </option>
                            <option value="welcome-a" <?php if ($post->position == "welcome-a") echo 'selected="selected"'?>>
                                welcome-a
                            </option>
                            <option value="welcome-b" <?php if ($post->position == "welcome-b") echo 'selected="selected"'?>>
                                welcome-b
                            </option>
                            <option value="text" <?php if ($post->position == "text") echo 'selected="selected"'?>>
                                text
                            </option>
                            <option value="latest-news-a" <?php if ($post->position == "latest-news-a") echo 'selected="selected"'?>>
                                latest-news-a
                            </option>
                            <option value="latest-news-b" <?php if ($post->position == "latest-news-b") echo 'selected="selected"'?>>
                                latest-news-b
                            </option>
                            <option value="latest-news-c" <?php if ($post->position == "latest-news-c") echo 'selected="selected"'?>>
                                latest-news-c
                            </option>
                            <option value="latest-news-d" <?php if ($post->position == "latest-news-d") echo 'selected="selected"'?>>
                                latest-news-d
                            </option>
                            <option value="latest-posts-a" <?php if ($post->position == "latest-posts-a") echo 'selected="selected"'?>>
                                latest-posts-a
                            </option>
                            <option value="latest-posts-b" <?php if ($post->position == "latest-posts-b") echo 'selected="selected"'?>>
                                latest-posts-b
                            </option>
                            <option value="latest-posts-c" <?php if ($post->position == "latest-posts-c") echo 'selected="selected"'?>>
                                latest-posts-c
                            </option>
                            <option value="latest-posts-d" <?php if ($post->position == "latest-posts-d") echo 'selected="selected"'?>>
                                latest-posts-d
                            </option>
                            <option value="latest-posts-e" <?php if ($post->position == "latest-posts-e") echo 'selected="selected"'?>>
                                latest-posts-e
                            </option>
                            <option value="latest-posts-f" <?php if ($post->position == "latest-posts-f") echo 'selected="selected"'?>>
                                latest-posts-f
                            </option>
                            <option value="footer-top-a" <?php if ($post->position == "footer-top-a") echo 'selected="selected"'?>>
                                footer-top-a
                            </option>
                            <option value="footer-top-b" <?php if ($post->position == "footer-top-b") echo 'selected="selected"'?>>
                                footer-top-b
                            </option>
                            <option value="footer-top-c" <?php if ($post->position == "footer-top-c") echo 'selected="selected"'?>>
                                footer-top-c
                            </option>
                            <option value="footer-top-d" <?php if ($post->position == "footer-top-d") echo 'selected="selected"'?>>
                                footer-top-d
                            </option>
                            {{--<option value="footer-bottom-a">footer-bottom-a</option>--}}
                            {{--<option value="footer-bottom-b">footer-bottom-b</option>--}}
                            <option value="copywrite" <?php if ($post->position == "copywrite") echo 'selected="selected"'?>>
                                copywrite
                            </option>
                        </optgroup>
                        </select>
                    </div>
                </div>
                @if ($errors->has('position'))
                    <span class="help-block">
                                <strong>{{ $errors->first('position') }}</strong>
                            </span>
                @endif

                <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                    <label for="description" class="col-md-8">متن</label>

                    <div class="col-md-10">
                        <textarea type="text" class="form-control" name="description" id="ckeditor">
                            {!! $post->description; !!}
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
                        {{ method_field('PUT') }}
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
        </div>
    </div>

    <script src="/ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('ckeditor');
    </script>
@endsection
