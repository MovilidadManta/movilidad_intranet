<style>
    .icon_message{
        font-size: 60px;
        color: green;
    }

    .icon_modal_div{
        display: flex;
        justify-content: center;
        align-content: center;
        margin-bottom: 80px;
    }
</style>
<div
    class="modal show"
    id="{{$idModal}}"
    aria-modal="true"
    role="dialog"
>
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content tx-size-sm">
            <div class="modal-body tx-center pd-y-20 pd-x-20">
                <div class="icon_modal_div">
                    <i class="icon ion-ios-checkmark-circle-outline tx-100 tx-info lh-1 mg-t-20 d-inline-block icon_message"></i>
                </div>
                <h4 class="tx-info mg-b-20" id="msj_{{$idModal}}">{{$message}}</h4>
                <button
                    aria-label="Close"
                    class="btn ripple btn-danger pd-x-25"
                    data-bs-dismiss="modal"
                    type="button"
                    id="{{$idBtnCancel}}"
                    style="float: right"
                ><i class="fa fa-times-circle"></i> &nbsp; Salir</button>
                <button class="btn btn-success" style="float: right; margin-right: 5px;" id="{{$idBtnConfirm}}" type="button">
                    <i class="fa fa-check"></i> &nbsp; Confirmar
                </button>
            </div>
        </div>
    </div>
</div>