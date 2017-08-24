<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ env('APP_NAME') }}</title>

    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .content {
            text-align: center;
            margin-bottom: 15em;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

        .avatar img {
            height: 15em;
        }

        .img-rounded {
            -webkit-border-radius: 4px;
            -moz-border-radius: 4px;
            border-radius: 4px;
        }
    </style>
</head>
<body>
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            {{ env('APP_NAME') }}
        </div>

        <div class="m-b-md avatar">
            <img class="img-rounded" src="{{ $me['avatar_url'] }}"/>
        </div>

        <div class="m-b-md">
            <strong>{{ $me['bio'] }}</strong>
            <span>|</span>
            <strong>{{ $me['location'] }}</strong>
            <span>|</span>
            <strong>{{ $me['public_repos'] }} repos</strong>
        </div>

        <div class="links">
            @if (env('GITHUB_USER'))
                <a href="https://github.com/{{ env('GITHUB_USER') }}" target="_blank">GitHub</a>
            @endif

            @if (env('PACKAGIST_USER'))
                <a href="https://packagist.org/packages/{{ env('PACKAGIST_USER') }}" target="_blank">Packagist</a>
            @endif

            @if (env('NPM_USER'))
                <a href="https://npmjs.com/~{{ env('NPM_USER') }}" target="_blank">NPM</a>
            @endif

            @if (env('RUBY_GEMS_USER'))
                <a href="https://rubygems.org/profiles/{{ env('RUBY_GEMS_USER') }}" target="_blank">RubyGems</a>
            @endif

            @if (env('KEYBASE_USER'))
                <a href="https://keybase.io/{{ env('KEYBASE_USER') }}" target="_blank">Keybase.io</a>
            @endif
        </div>
    </div>
</div>
</body>
</html>
