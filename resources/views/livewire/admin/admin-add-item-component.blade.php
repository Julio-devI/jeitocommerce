<div>
    <div class="container" style="padding:30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                Add new Item
                            </div>

                            <div class="col-md-6">
                                <a href="{{route('admin.all.items')}}" class="btn btn-success pull-right">All Items</a>
                            </div>
                        </div>
                    </div>

                    <div class="panel-body">
                        @if(Session::has('message'))
                            <div class="alert alert-success" role="alert">Session::get('message')</div>
                        @endif
                        <form class="form-horizontal" wire:submit.prevent='storeItem' enctype="multipart/form-data">
                        @csrf
                            <div class="form-group">
                                <label class="col-md-4 control-label">Item Status</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Item status" class="form-control input-md" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Item original price</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Item original price" class="form-control input-md" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Item Package Width</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Item package width" class="form-control input-md" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Item Description</label>
                                <div class="col-md-4">
                                    <textarea class="form-control" id="item description" placeholder="Item description" required></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Item weight</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Item weight" class="form-control input-md" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Item Price</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Item Price" class="form-control input-md" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">ShopId</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="shopid" class="form-control input-md" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Item Condition</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Item Condition" class="form-control input-md" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Link the Item Images</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Item Images" class="form-control input-md" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Item package height</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Item package height" class="form-control input-md" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Days to ship</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="days to ship" class="form-control input-md" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Item Name</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Item name" class="form-control input-md" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Item currency</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Item currency" class="form-control input-md" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Item Dangerous</label>
                                <div class="col-md-4">
                                    <select class="form-control" required>
                                        <option value="1">Yes</option>
                                        <option value="0">No</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Item SKU</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Item sku" class="form-control input-md" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Is 2tier item</label>
                                <div class="col-md-4">
                                    <select class="form-control" required>
                                        <option value="1">Yes</option>
                                        <option value="0">No</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Package length</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="package length" class="form-control input-md" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Is pre-order</label>
                                <div class="col-md-4">
                                    <select class="form-control" required>
                                        <option value="1">Yes</option>
                                        <option value="0">no</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Has variation</label>
                                <div class="col-md-4">
                                    <select class="form-control" required>
                                        <option value="1">Yes</option>
                                        <option value="0">no</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Item stock</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Item stock" class="form-control input-md" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Item reserved stock</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Item reserved stock" class="form-control input-md" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label"></label>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary">Add new item</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>