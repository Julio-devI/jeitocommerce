<div>
    <div class="container" style="padding:30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                Add new Discount
                            </div>

                            <div class="col-md-6">
                                <a href="{{route('admin.all.discount')}}" class="btn btn-success pull-right">All Discounts</a>
                            </div>
                        </div>
                    </div>

                    <div class="panel-body">
                        @if(Session::has('message'))
                            <div class="alert alert-success" role="alert">Session::get('message')</div>
                        @endif

                        <form class="form-horizontal" wire:submit.prevent="storeDiscount" enctype="multipart/form-data">
                        @csrf
                            <div class="form-group">
                                <label class="col-md-4 control-label">Discount Label</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Discount label" class="form-control input-md" wire:model='label' required>
                                    @error('label') <p class="text-danger">{{$message}}</p> @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Discount value</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Discount value" class="form-control input-md" wire:model='valor' required>
                                    @error('value') <p class="text-danger">{{$message}}</p> @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Active</label>
                                <div class="col-md-4">
                                    <select class="form-control" wire:model='ativo' required>
                                        <option value="1">Yes</option>
                                        <option value="0">no</option>
                                    </select>
                                    @error('active') <p class="text-danger">{{$message}}</p> @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label"></label>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary">Add new Discount</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>