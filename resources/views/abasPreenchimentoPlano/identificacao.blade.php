@extends('layouts.preenchimentoPlano')

@section('abaPreenchimento')

    <div class="row" style="margin-top: 7%;">
        <form class="col s12" id="formIdentificacao" method="post">

            @csrf
            <input type="hidden" name="id" value="{{ $periodo->id }}">

            <div class="row">

                <div class="input-field col xl6 l6 m6 s12">
                    <input type="text" id="knowledge_area" class="autocomplete" value="@if(isset($data)) {{ $data->knowledge_area }} @endif" name="knowledge_area">
                    <label for="knowledge_area">Área de Conhecimento</label>
                </div>

                <div class="col xl2 l2 m2 s6" style="margin-top: 1rem;">
                    <p class="grey-text">Magistério:</p>
                </div>
                <div class="input-field col xl2 l2 m2 s4">
                    <label>
                        <input class="with-gap" name="teaching" type="radio" value=""/>
                        <span>EBTT</span>
                    </label>
                </div>
                <div class="input-field col xl2 l2 m2 s4">
                    <label>
                        <input class="with-gap" name="teaching" type="radio"  value="ES"/>
                        <span>ES</span>
                    </label>
                </div>
            </div>

            <div class="row">
                <div class="col xl2 l2 m2 s6" style="margin-top: 1rem;">
                    <p class="grey-text">Regime:</p>
                </div>
                <div class="input-field col xl2 l2 m2 s6">
                    <label>
                        <input class="with-gap" name="regime" type="radio"   value="20"/>
                        <span>20h</span>
                    </label>
                </div>
                <div class="input-field col xl2 l2 m2 s6">
                    <label>
                        <input class="with-gap" name="regime" type="radio" value="40"/>
                        <span>40h</span>
                    </label>
                </div>
                <div class="input-field col xl2 l2 m2 s6">
                    <label>
                        <input class="with-gap" name="regime" type="radio"  value="DE"/>
                        <span>DE</span>
                    </label>
                </div>
                <div class="input-field col xl2 l2 m2 s6 offset-s6">
                    <label>
                        <input class="with-gap" name="regime" type="radio" value="Visitante"/>
                        <span>Visitante</span>
                    </label>
                </div>
            </div>
        </form>
    </div>

    <footer class="page-footer grey lighten-3 grey-text right-align">
        <div class="col s6">
            <button class="btn waves-effect waves-light amber darken-3" type="submit" name="action"
                    form="formIdentificacao" formaction="{{ route('preencherPlano', 2) }}">Próxima
                <i class="material-icons right">arrow_forward</i>
            </button>
        </div>
    </footer>

    <script>
        // Alterando aba ativa no layout de preenchimento e setando funções onClick com os links corretos de cada aba.
        $("#opIdentificacao").addClass("active");


        $("#opIdentificacao a").on("click", function(){
            $("#formIdentificacao").attr('action', '{{ route('preencherPlano', 1) }}').submit();
        });

        $("#opAulas a").on("click", function(){
            $("#formIdentificacao").attr('action', '{{ route('preencherPlano', 2) }}').submit();
        });

        $("#opEnsino a").on("click", function(){
            $("#formIdentificacao").attr('action', '{{ route('preencherPlano', 3) }}').submit();
        });

        $("#opPesquisa a").on("click", function(){
            $("#formIdentificacao").attr('action', '{{ route('preencherPlano', 4) }}').submit();
        });

        $("#opExtensao a").on("click", function(){
            $("#formIdentificacao").attr('action', '{{ route('preencherPlano', 5) }}').submit();
        });

        $("#opAdministrativas a").on("click", function(){
            $("#formIdentificacao").attr('action', '{{ route('preencherPlano', 6) }}').submit();
        });




        $(document).ready(function () {
            $('input.autocomplete').autocomplete({
                data: {
                    "Administração": null,
                    "Agronomia": null,
                    "Artes - Música": null,
                    "Biologia": null,
                    "Ciências Humanas": null,
                    "Ciências Agrárias": null,
                    "Ciências Exatas e da Natureza": null,
                    "Ciências Exatas e da Terra": null,
                    "Ciências Sociais": null,
                    "Contabilidade e Gestão": null,
                    "Educação Física": null,
                    "Engenharia Agrícola": null,
                    "Filosofia": null,
                    "Física": null,
                    "Gestão": null,
                    "Gestão e Administração": null,
                    "História": null,
                    "Informática": null,
                    "Informática Básica": null,
                    "Letras - Português e Espanhol": null,
                    "Letras - Português e Inglês": null,
                    "Letras - Português e Literatura": null,
                    "Matemática": null,
                    "Medicina Veterinária": null,
                    "Química": null,
                    "Recursos Naturais": null,
                    "Sociologia": null,
                    "Zootecnia": null
                },
            });
        });

    </script>

@endsection