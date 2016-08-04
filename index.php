<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Gerenciador Finaceiro</title>
        <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.css" />
        <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap-theme.css" />
        <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.css" />
        <script type="text/javascript" src="bower_components/jquery/dist/jquery.js"></script>
        <script type="text/javascript" src="bower_components/bootstrap/dist/js/bootstrap.js"></script>
        <script type="text/javascript" src="bower_components/underscore/underscore.js"></script>
        <script type="text/javascript" src="bower_components/backbone/backbone.js"></script>
        <script type="text/javascript" src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
        <script type="text/javascript" src="bower_components/bootstrap-datepicker/dist/locales/bootstrap-datepicker.pt-BR.min.js"></script>
        <script type="text/javascript" src="bower_components/jquery-maskmoney/dist/jquery.maskMoney.min.js"></script>
        <script type="text/javascript" src="js/financeiro.js"></script>
        <script type="text/javascript" src="js/principal.js"></script>
        <style>

            #saldo-total{

                font-weight: bolder;
                font-size: 1.2em;
                text-align: right;

            }
            .positivo{
                color:#009;
            }
            .negativo{
                color:#900;

            }
            .valor{
                text-align: right;

            }

        </style>
    </head>

    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Financeiro</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#" data-toggle="modal" data-target="#form-add">Add Novo</a></li>

                    </ul>

                </div>
            </div>
        </nav>
        <hr>

        <div class="container-fluid">

            <div class="row">
                <div class="col-sm-12  col-md-12 main">
                    <h1 class="page-header">Dashboard</h1>
                    <div class="row placeholders">
                        <div class="col-xs-6 col-sm-3 placeholder">
                            <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
                            <h4>Label</h4>
                            <span class="text-muted">Something else</span>
                        </div>
                        <div class="col-xs-6 col-sm-3 placeholder">
                            <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
                            <h4>Label</h4>
                            <span class="text-muted">Something else</span>
                        </div>
                        <div class="col-xs-6 col-sm-3 placeholder">
                            <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
                            <h4>Label</h4>
                            <span class="text-muted">Something else</span>
                        </div>
                        <div class="col-xs-6 col-sm-3 placeholder">
                            <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
                            <h4>Label</h4>
                            <span class="text-muted">Something else</span>
                        </div>
                    </div>

                    <h2 class="sub-header">Conta Corrente</h2>
                    <div class="table-responsive">
                        <table  class="table table-striped" id="tbl-cc">
                            <thead>
                                <tr>
                                    <th>Data</th>
                                    <th>Descrição</th>
                                    <th>Categoria</th>
                                    <th>Tipo</th>
                                    <th>Valor (R$)</th>
                                </tr>
                            </thead>
                            <tbody>


                            </tbody>
                            <tfoot>
                                <tr>

                                    <td colspan="4">Saldo</td>
                                    <td id="saldo-total">0,00</td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
            <div id="form-add" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="gridSystemModalLabel">Registro</h4>
                        </div>
                        <div class="modal-body">
                            <form class="form-horizontal">
                                <fieldset>

                                    <!-- Form Name -->
                                    

                                    <!-- Text input-->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="data">Data</label>  
                                        <div class="col-md-4">
                                            <input id="data" name="data" type="text" placeholder="DD/MM/YYYY" class="form-control input-md">

                                        </div>
                                    </div>

                                    <!-- Text input-->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="valor">Valor</label>  
                                        <div class="col-md-4">
                                            <input id="valor" name="valor" type="text" placeholder="0,00" class="form-control input-md" data-thousands="." data-decimal="," data-prefix="R$ ">

                                        </div>
                                    </div>

                                    <!-- Select Basic -->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="selectbasic">Categoria</label>
                                        <div class="col-md-4">
                                            <select id="cat" name="cat" class="form-control">
                                                <option value="Alimentação">Alimentação</option>
                                                <option value="Vestuário">Vestuário</option>
                                                <option value="Beleza">Beleza</option>
                                                <option value="Móveis">Móveis</option>
                                                <option value="Saúde">Saúde</option>
                                                <option value="Salário">Salário</option>
                                                <option value="Depósito identificado">Depósito identificado</option>
                                            </select>
                                        </div>
                                    </div>

                                    <!-- Multiple Radios -->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="tipo">Tipo registro</label>
                                        <div class="col-md-4">
                                            <div class="radio">
                                                <label for="tipo-0">
                                                    <input type="radio" name="tipo" id="tipo-0" value="C" checked="checked">
                                                    Crédito
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label for="tipo-1">
                                                    <input type="radio" name="tipo" id="tipo-1" value="D">
                                                    Débito
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Text input-->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="desc">Descrição</label>  
                                        <div class="col-md-4">
                                            <input id="desc" name="desc" type="text" placeholder="" class="form-control input-md">

                                        </div>
                                    </div>

                                </fieldset>
                            </form>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                            <button id="salvar" type="button" class="btn btn-primary">Cadastrar</button>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
        </div>

    </body>
</html>

