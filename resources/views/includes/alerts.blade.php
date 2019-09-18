@if ($errors->any())
    <div class="card-panel teal yellow accent-4">
        @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif

@if (session('success'))
    <div class="card-panel teal green darken-2">
        {{ session('success') }}
    </div>
@endif


@if (session('error'))
    <div class="card-panel teal deep-orange">
        {{ session('error') }}
    </div>
@endif