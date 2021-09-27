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
                                <a href="{{route('admin.add.logistic')}}" class="btn btn-success pull-right">Add New Item</a>
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
                                    <th>logistic name</th>
                                    <th>is free</th>
                                    <th>enabled</th>
                                    <th>Action</th>
                                </tr>
                            <thead>
                            <tbody>
                                @foreach ($logistics as $logistic)
                                    <tr>
                                        <td>{{$logistic->id}}</td> 
                                        <td>{{$logistic->logistic_name}}</td>
                                        <td>{{$logistic->is_free}}</td>
                                        <td>{{$logistic->enabled}}</td>
                                        <td>
                                            <a href="#"><i class="fa fa-edit fa-2x text-info"></i></a>
                                            <a href="#" onclick="confirm('Are you sure, You want to delete this logistic ?') || event.stopImmediatePropagation()" wire:click.prevent="deleteLogistic({{$logistic->id}})" style="margin-left:10px;"><i class="fa fa-times fa-2x text-danger"></i></a>
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
