<div>
    <style>
        nav svg {
            height: 20px;
        }

        nav .hidden {
            display: block !important;
        }
    </style>
    <div class="container" style="padding:30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                All Items
                            </div>

                            <div class="col-md-6">
                                <a href="{{route('add.item')}}" class="btn btn-success pull-right">Add New Item</a>
                            </div>
                        </div>
                    </div>

                    <div class="panel-body">
                    {{--@if(Session::has('message'))
                        <div class="alert alert-success" role="alert">
                            {{Session::get('message')}}
                        </div>
                    @endif--}}
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Original Price</th>
                                    <th>Sales</th>
                                    <th>ShopId</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            <thead>
                            <tbody>
                                @foreach ($items as $item)
                                    <tr>
                                        <td>{{$item->id}}</td> 
                                        <td><img src="{{$item->images}}" width="60"></td>
                                        <td>{{$item->name}}</td>
                                        <td>{{$item->price}}</td>
                                        <td>{{$item->original_price}}</td>
                                        <td>{{$item->sales}}</td>
                                        <td>{{$item->shopid}}</td>
                                        <td>{{$item->created_at}}</td>
                                        <td>
                                            <a href="{{route('admin.edit.item')}}"><i class="fa fa-edit fa-2x text-info"></i></a>
                                            <a href="#" onclick="confirm('Are you sure, You want to delete this category ?') || event.stopImmediatePropagation()" wire:click.prevent="deleteItem({{$item->id}})" style="margin-left:10px;"><i class="fa fa-times fa-2x text-danger"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{--{{$products->links()}}--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>