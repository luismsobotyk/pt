@if ($errors->any())
    <script>
        var htmlText= "";
        @foreach ($errors->all() as $error)
            htmlText= htmlText+"<p>{{ $error }}</p>";
        @endforeach
        M.toast({html: htmlText, displayLength: '10000', classes: 'amber lighten-1'});
    </script>
@endif

@if (session('success'))
    <script>
        M.toast({html: '{{ session('success') }}', displayLength: '5000', classes: 'teal lighten-1'});
    </script>
@endif


@if (session('error'))
    <script>
        M.toast({html: '{{ session('error') }}', displayLength: '5000', classes: 'red lighten-1'});
    </script>
@endif