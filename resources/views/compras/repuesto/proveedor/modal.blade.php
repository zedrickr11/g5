<div class="modal fade modal-slide-in-right" aria-hidden="true"
role="dialog" tabindex="-1" id="modal-delete-{{$per->idproveedor_repuesto}}">
	{{Form::Open(array('action'=>array('Proveedor_repuestoController@destroy',$per->idproveedor_repuesto),'method'=>'delete'))}}
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"
				aria-label="Close">
                     <span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title">Eliminar Proveedor</h4>
			</div>
			<div class="modal-body">
				<p>Confirme si desea Eliminar el Proveedor</p>
			</div>
			<div class="modal-footer">
				<button class="btn btn-danger" type="button" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> </button>
				<button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-ok"></span> </button>

			</div>
		</div>
	</div>
	{{Form::Close()}}

</div>
