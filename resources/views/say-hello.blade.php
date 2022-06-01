<h1>Hello, {{ $name }}!</h1>
<p>{{ config('laravelpackagetest.description') }}</p>
<button class="btn btn-primary" id="say-hello">Say Hello</button>
<h5>{{ config('laravelpackagetest.version') }}</h5>

<script>
    const givenName = '{{ $name }}';
</script>

<link rel="stylesheet" href="{{ mix('css/app.css', config('laravelpackagetest.mix.manifest.directory')) }}">
<script src="{{ mix('js/app.js', config('laravelpackagetest.mix.manifest.directory')) }}"></script>
