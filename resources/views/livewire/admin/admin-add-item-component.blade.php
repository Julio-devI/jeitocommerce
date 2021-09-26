<div>
    <div class="container" style="padding:30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                Add New Item
                            </div>

                            <div class="col-md-6">
                                <a href="{{route('admin.products')}}" class="btn btn-success pull-right">All Items</a>
                            </div>
                        </div>
                    </div>

                    <div class="panel-body">
                        @if(Session::has('message'))
                            <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                        @endif
                        <form class="form-horizontal" enctype="multipart/form-data" wire:submit.prevent="addProduct">
                        @csrf
                            <div class="form-group">
                                <label class="col-md-4 control-label">Item Name</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Item Name" class="form-control input-md" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Item Status</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Item Status" class="form-control input-md" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Item original price</label>
                                <div class="col-md-4">
                                    <textarea class="form-control" id="Item original price" placeholder="Item original price" required></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Item package width</label>
                                <div class="col-md-4">
                                    <textarea class="form-control" id="Item package width" placeholder="Item package width" required></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Item description</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Item description" class="form-control input-md" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Item weight</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Item weight" class="form-control input-md" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Item Views</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Item views" class="form-control input-md" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Item Price</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Item Price" class="form-control input-md" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Item Sales</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Item sales" class="form-control input-md" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Item images</label>
                                <div class="col-md-4">
                                    <input type="files" class="form-control input-md" required>
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