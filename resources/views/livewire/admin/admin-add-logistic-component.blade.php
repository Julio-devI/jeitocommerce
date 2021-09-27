<div>
    <div class="container" style="padding:30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                Add new Logistic
                            </div>

                            <div class="col-md-6">
                                <a href="{{route('admin.all.logistic')}}" class="btn btn-success pull-right">All Logistics</a>
                            </div>
                        </div>
                    </div>

                    <div class="panel-body">
                        @if(Session::has('message'))
                            <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                        @endif

                        <form class="form-horizontal" wire:submit.prevent="storeLogistic" enctype="multipart/form-data">
                        @csrf
                            <div class="form-group">
                                <label class="col-md-4 control-label">Logistic Name</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Logistic name" class="form-control input-md" wire:model='logistic_name' required>
                                    @error('logistic_name') <p class="text-danger">{{$message}}</p> @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Is Free</label>
                                <select class="form-control" wire:model='is_free' required>
                                    <option value="1">Yes</option>
                                    <option value="0">no</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Enabled</label>
                                <select class="form-control" wire:model='enabled' required>
                                    <option value="1">Yes</option>
                                    <option value="0">no</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">estimated shipping fee</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Logistic name" class="form-control input-md" wire:model='estimated_shipping_fee' required>
                                    @error('estimated_shipping_fee') <p class="text-danger">{{$message}}</p> @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label"></label>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary">Add new Logistic</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
