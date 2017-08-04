<div class="modal fade" id="modalDeleteTask" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="myModalLabel">Confirmação</h4>
            </div>
            <div class="modal-body">
                Deseja realmente excluir este item? <br>
                Esta ação não poderá ser desfeita.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                <button type="button" class="btn btn-danger btn-deletetask">Excluir</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalCheckTask" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="myModalLabel">Confirmação</h4>
            </div>
            <div class="modal-body">
                Deseja realmente realizar este item? <br>
                Esta ação não poderá ser desfeita.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                <button type="button" class="btn btn-success btn-checktask">Realizar</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalDeleteAudience" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="myModalLabel">Confirmação</h4>
            </div>
            <div class="modal-body">
                Deseja realmente excluir este item? <br>
                Esta ação não poderá ser desfeita.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                <button type="button" class="btn btn-danger btn-deleteaudience">Excluir</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalCheckAudience" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="myModalLabel">Confirmação</h4>
            </div>
            <div class="modal-body">
                Deseja realmente realizar este item? <br>
                Esta ação não poderá ser desfeita.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                <button type="button" class="btn btn-success btn-checkaudience">Realizar</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalDeleteFlow" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="myModalLabel">Confirmação</h4>
            </div>
            <div class="modal-body">
                Deseja realmente excluir este item? <br>
                Esta ação não poderá ser desfeita.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                <button type="button" class="btn btn-danger btn-deleteflow">Excluir</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalDeleteFinance" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="myModalLabel">Confirmação</h4>
            </div>
            <div class="modal-body">
                Deseja realmente excluir este item? <br>
                Esta ação não poderá ser desfeita.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                <button type="button" class="btn btn-danger btn-deletefinance">Excluir</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalUploadFlow" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="myModalLabel">Anexos</h4>
            </div>
            <div class="modal-body">
                <label class="btn btn-success btn-file">
                    Escolher Arquivo <input style="display:none;" id="fileupload" type="file" name="files[]" data-url="server/php/" multiple>
                </label>
                <div class="progress" id="progressflow">
                    <div class="progress-bar bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalUploadFinance" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="myModalLabel">Anexos</h4>
            </div>
            <div class="modal-body">
                <label class="btn btn-success btn-file">
                    Escolher Arquivo <input style="display:none;" id="fileuploadfinance" type="file" name="files[]" data-url="server/php/" multiple>
                </label>
                <div class="progress" id="progressfinance">
                    <div class="progress-bar bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalDeleteFlowFile" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="myModalLabel">Confirmação</h4>
            </div>
            <div class="modal-body">
                Deseja realmente excluir este item? <br>
                Esta ação não poderá ser desfeita.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                <button type="button" class="btn btn-danger btn-deleteflowfile">Excluir</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalDeleteFinanceFile" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" id="myModalLabel">Confirmação</h4>
            </div>
            <div class="modal-body">
                Deseja realmente excluir este item? <br>
                Esta ação não poderá ser desfeita.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                <button type="button" class="btn btn-danger btn-deletefinancefile">Excluir</button>
            </div>
        </div>
    </div>
</div>