<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ env('APP_NAME') }}</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
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
            @if ($me['bio'])
                <strong>{{ $me['bio'] }}</strong>
                @if ($me['public_repos'] || $me['location'])
                    <span> | </span>
                @endif
            @endif
            @if ($me['location'])
                <strong>{{ $me['location'] }}</strong>
            @endif
            @if ($me['public_repos'])
                @if ($me['bio'] || $me['location'])
                    <span> | </span>
                @endif
                <strong>{{ $me['public_repos'] }} repos</strong>
            @endif
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

            @if (env('LAUNCHPAD_USER'))
                <a href="https://launchpad.net/~{{ env('LAUNCHPAD_USER') }}" target="_blank">Launchpad</a>
            @endif
        </div>
    </div>
</div>
</body>
</html>
