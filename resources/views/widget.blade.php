@extends('principal')
@section('conteudo')
    <h1>Widget</h1>
            <form method="GET">
                    <div class="form-group select">
                            <label>1. Escolha uma categoria</label>
                            <select class="form-control" name="categoria" id="select-categoria">
                                    <option>Selecione</option>
                                    <option value="diversos">Diversos</option>
                                    <option value="empregos">Empregos</option>
                                    <option value="especiais">Especiais</option>
                                    <option value="imoveis">Imóveis</option>
                                    <option value="popnews">PopNews</option>
                                    <option value="populares">Populares</option>
                                    <option value="veiculos">Veículos</option>
                                    <option value="ultimas">Ultimas</option>
                            </select>
                    </div>
                    <div id="preview-widget">
                        <div class="diversos">
                            <h2>Preview Diversos</h2>
                            <script src="http://localhost/joao/widget/public/js/categorias/diversos.js"></script>
                        </div>

                        <div class="empregos">
                            <h2>Preview Empregos</h2>
                            <script src="http://localhost/joao/widget/public/js/categorias/empregos.js"></script>
                        </div>

                        <div class="especiais">
                            <h2>Preview Especiais</h2>
                            <script src="http://localhost/joao/widget/public/js/categorias/especiais.js"></script>
                        </div>

                        <div class="imoveis">
                            <h2>Preview Imóveis</h2>
                            <script src="http://localhost/joao/widget/public/js/categorias/imoveis.js"></script>
                        </div>

                        <div class="popnews">
                            <h2>Preview Popnews</h2>
                            <script src="http://localhost/joao/widget/public/js/categorias/popnews.js"></script>
                        </div>

                        <div class="populares">
                            <h2>Preview Populares</h2>
                            <script src="http://localhost/joao/widget/public/js/categorias/populares.js"></script>
                        </div>

                        <div class="veiculos">
                            <h2>Preview Veículos</h2>
                            <script src="http://localhost/joao/widget/public/js/categorias/veiculos.js"></script>
                        </div>

                        <div class="ultimas">
                            <h2>Preview Últimas notícias</h2>
                            <script src="http://localhost/joao/widget/public/js/categorias/ultimasNoticias.js"></script>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">2. Copie o link de importação das notícias da categoria selecionada</div>
                        <div class="panel-body">
                            <textarea class="form-control" id="script_do_widget" rows="4"></textarea>
                        </div>
                    </div>
            </form>
@stop