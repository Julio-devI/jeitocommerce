<div>
    <div class="container" style="padding:30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                Edit Category
                            </div>

                            <div class="col-md-6">
                                <a href="{{route('admin.all.category')}}" class="btn btn-success pull-right">All Categories</a>
                            </div>
                        </div>
                    </div>

                    <div class="panel-body">
                        @if(Session::has('message'))
                            <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                        @endif

                        <form class="form-horizontal" wire:submit.prevent="updateCategory()" enctype="multipart/form-data">
                        @csrf
                            <div class="form-group">
                                <label class="col-md-4 control-label">Category Id</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Category id" class="form-control input-md" wire:model='category_id' required>
                                    @error('category_id') <p class="text-danger">{{$message}}</p> @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Category Name</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Category name" class="form-control input-md" wire:model='name_category' required>
                                    @error('name_category') <p class="text-danger">{{$message}}</p> @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label"></label>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary">Update Category</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
