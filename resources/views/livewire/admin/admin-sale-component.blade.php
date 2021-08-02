<div>
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Sale Setting
                    </div>
                    <div class="panel-body">
						@if (Session::has('message'))
							<div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
						@endif
                        <form class="form-horizontal" wire:submit.prevent="updateSale">
                            <div class="form-group">
                                <label class="col-md-4 control-label">Status</label>
                                <div class="col-md-4">
                                    <select class="form-control custom-select" wire:model="status">
                                        <option value="0">Inactive</option>
                                        <option value="1">Active</option>
                                    </select>
                                </div>
                            </div>

							<div class="form-group">
                                <label class="col-md-4 control-label">Sale Date</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="YYYY/MM/DD H:i:s" id="sale-date" class="form-control input-md" wire:model="sale_date" />
                                </div>
                            </div>

							<div class="form-group">
                                <label class="col-md-4 control-label"></label>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@push('scripts')
	<script>
		$(function() {
			$('#sale-date').datetimepicker({
				format: 'Y-MM-DD H:m:s',
				locale:'ko',
				icons: {
					date: "fa fa-calendar-alt",
					time: "fa fa-clock-o",
					date: "fa fa-calendar",
					up: "fa fa-angle-up",
					down: "fa fa-angle-down",
					previous: "fa fa-angle-left",
					next: "fa fa-angle-right"
				}
			})
			.on('dp_change', function(ev) {
				var data = $('#sale-date').val(); alert(data);
				@this.set('sale_date', data);
			})
		});
	</script>
@endpush