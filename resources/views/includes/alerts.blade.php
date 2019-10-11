@if ($errors->any())
    <script>
        {{--var htmlText= "";
        @foreach ($errors->all() as $error)
            htmlText= htmlText+"<li>{{ $error }}</li>";
        @endforeach
        M.toast({html: htmlText, displayLength: '10000', classes: 'amber lighten-1'});--}}
        @foreach ($errors->all() as $error)
            M.toast({html: '{{ $error }}' , displayLength: '15000', classes: 'amber lighten-1'});
        @endforeach
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