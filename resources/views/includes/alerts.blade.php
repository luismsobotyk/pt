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

<script>
    function toastNotification(text, href) {
        M.toast({html: "<a href='" + href + "' title='clique para visualizar' class='btn-small blue darken-4'><i class='material-icons left'>notifications</i> " + text + "</a><a onclick='javascript:M.Toast.getInstance($(this).parent()).dismiss()' href='#!' title='remover' class='btn-small blue darken-3' style='margin-left: 5px'><i class='material-icons left' style='margin-right:0'>close</i></a>", displayLength: '900000000', classes: 'transparent z-depth-0'});
    }
</script>