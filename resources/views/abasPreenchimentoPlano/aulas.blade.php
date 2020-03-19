@extends('layouts.preenchimentoPlano')

@section('abaPreenchimento')

    <div class="row" style="margin-top: 2%;">
        <form class="col s12" id="formPlano" method="post">
            @csrf
            <input type="hidden" name="aba" value="2">
            <div class="input-field col xl5 l5 m5 s12">
                <input type="text" id="input_discipline" name="discipline">
                <label for="discipline">Disciplina</label>
            </div>

            <div class="input-field col xl5 l5 m5 s12">
                <input type="text" id="input_course" name="course">
                <label for="course">Curso</label>
            </div>

            <div class="input-field col xl2 l2 m2 s12">
                <input type="number" id="input_workload" name="workload" min="0" max="40">
                <label for="workload">Carga Horária</label>
            </div>

            <div class="col s6 offset-s6 right-align ">
                <button class="btn waves-effect waves-light amber darken-3" onclick="addAula()">Adicionar
                    <i class="material-icons right">add_circle_outline</i>
                </button>
            </div>
        </form>
    </div>

    <div class="divider"></div>

    <div class="row" style="margin-top: 2%;">
        <div class="row">
            <div class="col s10 left-align offset-s1">
                <h6>Aulas adicionadas:</h6>
            </div>
        </div>

        <!-- LINHAS ADICIONADAS -->
        <div id="aulas">
            @if(isset($WorkPlan->classes))
                @foreach($WorkPlan->classes as $classe)
                {{$classe->course}}<br>
                @endforeach
            @endif
{{--            <div class="row">--}}
{{--                <div class="input-field col xl4 l4 m4 s12">--}}
{{--                    <input type="text" id="discipline" name="discipline" value="" disabled>--}}
{{--                    <label for="discipline">Disciplina</label>--}}
{{--                </div>--}}
{{--                <div class="input-field col xl4 l4 m4 s12">--}}
{{--                    <input type="text" id="course" name="course" value="" disabled>--}}
{{--                    <label for="course">Curso</label>--}}
{{--                </div>--}}
{{--                <div class="input-field col xl2 l2 m2 s8">--}}
{{--                    <input type="number" id="workload" name="workload" min="0" max="40" value="" disabled>--}}
{{--                    <label for="workload">CH</label>--}}
{{--                </div>--}}
{{--                <div class="input-field col xl1 l1 m1 s2">--}}
{{--                    <a href="#!" class="black-text">--}}
{{--                        <i class="material-icons" style="margin-top: 1rem;">edit</i>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <div class="input-field col xl1 l1 m1 s2">--}}
{{--                    <a href="#!" class="black-text">--}}
{{--                        <i class="material-icons" style="margin-top: 1rem;">delete_forever</i>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="row">--}}
{{--                <div class="input-field col xl4 l4 m4 s12">--}}
{{--                    <input type="text" id="discipline" name="discipline" value="Disciplina C sendo editada">--}}
{{--                    <label for="discipline">Disciplina</label>--}}
{{--                </div>--}}
{{--                <div class="input-field col xl4 l4 m4 s12">--}}
{{--                    <input type="text" id="course" name="course" value="Curso C sendo editado">--}}
{{--                    <label for="course">Curso</label>--}}
{{--                </div>--}}
{{--                <div class="input-field col xl2 l2 m2 s8">--}}
{{--                    <input type="number" id="workload" name="workload" min="0" max="40" value="3">--}}
{{--                    <label for="workload">CH</label>--}}
{{--                </div>--}}
{{--                <div class="input-field col xl1 l1 m1 s2">--}}
{{--                    <a href="#!" class="black-text">--}}
{{--                        <i class="material-icons" style="margin-top: 1rem;">save</i>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <div class="input-field col xl1 l1 m1 s2">--}}
{{--                    <a href="#!" class="black-text">--}}
{{--                        <i class="material-icons" style="margin-top: 1rem;">delete_forever</i>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </div>
    <footer class="page-footer grey lighten-3 grey-text">
        <div class="row">
            <div class="col s6 left-align">
                <button class="btn waves-effect waves-light amber darken-3" type="submit" name="action" onclick="submitFormPlano(1)">Anterior
                    <i class="material-icons right">arrow_back</i>
                </button>
            </div>
            <div class="col s6 right-align">
                <button class="btn waves-effect waves-light amber darken-3" type="submit" name="action" onclick="submitFormPlano(3)">Próxima
                    <i class="material-icons right">arrow_forward</i>
                </button>
            </div>
        </div>
    </footer>
@endsection