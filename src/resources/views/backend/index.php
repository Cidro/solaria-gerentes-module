<script>
    //TODO: cambiar esto a auna llamada por ajax, es mas menos feo
    var contents = <?=json_encode(['gerentes' => $gerentes->toArray()]);?>;
</script>
<div class="row" ng-controller="GerentesModuleController" ng-init="init()">
    <div class="col-sm-3">
        <a ng-click="addForm()" class="btn btn-success" href="#add-form">
            <span class="glyphicon glyphicon-plus"></span>
            Nuevo Gerente
        </a>
        <hr>
        <div ng-cloak class="list-group">
            <a href="#{{gerente.alias}}" class="list-group-item" ng-click="changeActiveGerente($index)" ng-class="{active: selectedGerente === $index}" ng-repeat="gerente in gerentes track by $index">
                <button type="button" class="btn btn-xs btn-danger pull-right" ng-click="removeGerente($index)">
                    <span class="glyphicon glyphicon-trash"></span>
                </button>
                {{ gerente.first_name }}
            </a>
        </div>
    </div>
    <div ng-cloak class="col-sm-9">
        <form ng-submit="submit()" ng-if="selectedGerente!==null">
            <div>
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active">
                        <a href="#gerente-config" aria-controls="config" role="tab" data-toggle="tab">
                            <span class="glyphicon glyphicon-cog"></span> Configuración
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="gerente-config">
                        <div>
                            <fieldset>
                                <div class="form-group">
                                    <label for="gerente-first_name">Nombre</label>
                                    <input type="text" class="form-control" ng-model="gerentes[selectedGerente].first_name">
                                </div>
                            </fieldset>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary pull-right">Guardar</button>
            </div>
        </form>
    </div>
</div>