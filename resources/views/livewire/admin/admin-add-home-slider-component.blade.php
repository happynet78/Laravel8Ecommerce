<div>
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
							<div class="col-md-6">
								<div class="panel-title">Add New Slider</div>
							</div>
							<div class="col-md-6">
								<a href="{{ route('admin.homeslider') }}" class="btn btn-success pull-right">All Slider</a>
							</div>
						</div>
                    </div>
                    <div class="panel-body">
						@if (Session::has('message'))
							<div class="alert alert-success" role="alert">{{ session::get('message') }}</div>
						@endif
						<form class="form-horizontal" wire:submit.prevent="addSlider">
							<div class="form-group">
								<label class="col-md-4 control-label">Title</label>
								<div class="col-md-4">
									<input type="text" placeholder="Title" class="form-control input-md" wire:model="title" />
								</div>
							</div>

							<div class="form-group">
								<label class="col-md-4 control-label">SubTitle</label>
								<div class="col-md-4">
									<input type="text" placeholder="SubTitle" class="form-control input-md" wire:model="subtitle" />
								</div>
							</div>

							<div class="form-group">
								<label class="col-md-4 control-label">Price</label>
								<div class="col-md-4">
									<input type="text" placeholder="Price" class="form-control input-md" wire:model="price" />
								</div>
							</div>

							<div class="form-group">
								<label class="col-md-4 control-label">Link</label>
								<div class="col-md-4">
									<input type="text" placeholder="Link" class="form-control input-md" wire:model="link" />
								</div>
							</div>

							<div class="form-group">
								<label class="col-md-4 control-label">Image</label>
								<div class="col-md-4">
									<div class="custom-file">
										<input type="file" class="custom-file-input" id="customFile" wire:model="image">
										<label class="custom-file-label" for="customFile">Choose file</label>
										@if($image)
											<img src="{{ $image->temporaryUrl() }}" width="120" />
										@endif
									</div>
								</div>
							</div>

							<div class="form-group">
								<label class="col-md-4 control-label">Status</label>
								<div class="col-md-4">
									<select class="custom-select" wire:model="status">
										<option value="0">Inactive</option>
										<option value="1">Active</option>
									</select>
								</div>
							</div>

							<div class="form-group">
								<label class="col-md-4 control-label"></label>
								<div class="col-md-4">
									<button type="submit" class="btn btn-primary">Submit</button>
								</div>
							</div>

						</form>
					</div>
                </div>
            </div>
        </div>
    </div>
</div>
