@extends('layouts.app')

@section('content')

    <!-- Quando tiverem planos encontrados -->
    <style>
        .card p {
            font-size: 1.3rem;
            font-weight: bolder;
        }

        .card a {
            color: black;
        }
    </style>

    <div class="container" style="margin-top: 7rem;">
        <div class="row">
            <h5>Meus Relatórios: </h5>
        </div>

        <div class="row">
            <div class="col xl4 l4 m6 s12">
                <a href="{{ route('verRelatorio', 1) }}">
                    <div class="card black-text">
                        <div class="card-content">
                            <p>2019/2</p>
                            <br/>
                            <i class="medium material-icons">content_paste</i>
                            <br/>
                            <div class="blue-text text-darken-3" style="font-size: 13px; margin-top: 5px;">ENTREGUE
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col xl4 l4 m6 s12">
                <a href="{{ route('verRelatorio', 1) }}">
                    <div class="card black-text">
                        <div class="card-content">
                            <p>2019/1</p>
                            <br/>
                            <i class="medium material-icons">content_paste</i>
                            <br/>
                            <div class="green-text text-darken-3" style="font-size: 13px; margin-top: 5px;">APROVADO
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col xl4 l4 m6 s12">
                <a href="{{ route('verRelatorio', 1) }}">
                    <div class="card black-text">
                        <div class="card-content">
                            <p>2018/2</p>
                            <br/>
                            <i class="medium material-icons">content_paste</i>
                            <br/>
                            <div class="red-text text-darken-3" style="font-size: 13px; margin-top: 5px;">FECHADO</div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col xl4 l4 m6 s12">
                <a href="{{ route('verRelatorio', 1) }}">
                    <div class="card black-text">
                        <div class="card-content">
                            <p>2018/1</p>
                            <br/>
                            <i class="medium material-icons">content_paste</i>
                            <br/>
                            <div class="red-text text-darken-3" style="font-size: 13px; margin-top: 5px;">FECHADO</div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col xl4 l4 m6 s12">
                <a href="{{ route('verRelatorio', 1) }}">
                    <div class="card black-text">
                        <div class="card-content">
                            <p>2017/2</p>
                            <br/>
                            <i class="medium material-icons">content_paste</i>
                            <br/>
                            <div class="red-text text-darken-3" style="font-size: 13px; margin-top: 5px;">FECHADO</div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col xl4 l4 m6 s12">
                <a href="{{ route('verRelatorio', 1) }}">
                    <div class="card black-text">
                        <div class="card-content">
                            <p>2017/1</p>
                            <br/>
                            <i class="medium material-icons">content_paste</i>
                            <br/>
                            <div class="red-text text-darken-3" style="font-size: 13px; margin-top: 5px;">FECHADO</div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col xl4 l4 m6 s12">
                <a href="{{ route('verRelatorio', 1) }}">
                    <div class="card black-text">
                        <div class="card-content">
                            <p>2016/2</p>
                            <br/>
                            <i class="medium material-icons">content_paste</i>
                            <br/>
                            <div class="red-text text-darken-3" style="font-size: 13px; margin-top: 5px;">FECHADO</div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col xl4 l4 m6 s12">
                <a href="{{ route('verRelatorio', 1) }}">
                    <div class="card black-text">
                        <div class="card-content">
                            <p>2016/1</p>
                            <br/>
                            <i class="medium material-icons">content_paste</i>
                            <br/>
                            <div class="red-text text-darken-3" style="font-size: 13px; margin-top: 5px;">FECHADO</div>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col xl4 l4 m6 s12">
                <a href="{{ route('verRelatorio', 1) }}">
                    <div class="card black-text">
                        <div class="card-content">
                            <p>2015/2</p>
                            <br/>
                            <i class="medium material-icons">content_paste</i>
                            <br/>
                            <div class="red-text text-darken-3" style="font-size: 13px; margin-top: 5px;">FECHADO</div>
                        </div>
                    </div>
                </a>
            </div>

        </div>

    </div>


    <!-- QUANDO NENHUM PLANO FOR ENCONTRADO -->

    <!--div class="container" style="margin-top: 10rem;">
        <div class="col s12">
            <div class="card">
                <div class="card-content">
                    <p><i>Nenhum plano encontrado.</i></p>
                </div>
            </div>
        </div>
        <div class="right">
            <i class="material-icons" style="display: inline-flex; vertical-align: top; margin-top: -1px;">help_outline</i>
            Acha que tem algo errado? Clique <a href="#!">aqui</a>.
        </div>
    </div-->

@endsection
