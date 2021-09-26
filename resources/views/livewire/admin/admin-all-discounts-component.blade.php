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
                                All Discounts
                            </div>

                            <div class="col-md-6">
                                <a href="{{route('admin.add.discount')}}" class="btn btn-success pull-right">Add New Discount</a>
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
                                    <th>label</th>
                                    <th>valor</th>
                                    <th>ativo</th>
                                    <th>Action</th>
                                </tr>
                            <thead>
                            <tbody>
                                @foreach ($discounts as $discount)
                                    <tr>
                                        <td>{{$discount->id}}</td> 
                                        <td>{{$discount->label}}</td>
                                        <td>{{$discount->valor}}</td>
                                        <td>{{$discount->ativo}}</td>
                                        <td>
                                            <a href="{{route('admin.edit.item')}}"><i class="fa fa-edit fa-2x text-info"></i></a>
                                            <a href="#" style="margin-left:10px;"><i class="fa fa-times fa-2x text-danger"></i></a>
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
