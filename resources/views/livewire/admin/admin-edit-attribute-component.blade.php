<div>
    <div class="container" style="padding:30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                Edit Attribute
                            </div>

                            <div class="col-md-6">
                                <a href="{{route('admin.all.attributes')}}" class="btn btn-success pull-right">All Attributes</a>
                            </div>
                        </div>
                    </div>

                    <div class="panel-body">
                        @if(Session::has('message'))
                            <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                        @endif

                        <form class="form-horizontal" wire:submit.prevent="updateAttribute()" enctype="multipart/form-data">
                        @csrf
                            <div class="form-group">
                                <label class="col-md-4 control-label">Attribute Name</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Attribute name" class="form-control input-md" wire:model='attribute_name' required>
                                    @error('attribute_name') <p class="text-danger">{{$message}}</p> @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Is Mandatory</label>
                                <div class="col-md-4">
                                    <select class="form-control" wire:model='is_mandatory' required>
                                        <option value="1">Yes</option>
                                        <option value="0">no</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Attribute Value</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="attribute value" class="form-control input-md" wire:model='attribute_value' required>
                                    @error('attribute_value') <p class="text-danger">{{$message}}</p> @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label"></label>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary">Update Attribute</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
