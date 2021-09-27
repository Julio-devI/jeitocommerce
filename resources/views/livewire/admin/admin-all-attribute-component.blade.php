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
                                All Attributes
                            </div>

                            <div class="col-md-6">
                                <a href="{{route('admin.add.attributes')}}" class="btn btn-success pull-right">Add New Attribute</a>
                            </div>
                        </div>
                    </div>

                    <div class="panel-body">
                    @if(Session::has('message'))
                        <div class="alert alert-success" role="alert">
                            {{Session::get('message')}}
                        </div>
                    @endif
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Attribute name</th>
                                    <th>is mandatory</th>
                                    <th>Attribute value</th>
                                    <th>Action</th>
                                </tr>
                            <thead>
                            <tbody>
                                @foreach ($attributes as $attribute)
                                    <tr>
                                        <td>{{$attribute->id}}</td>
                                        <td>{{$attribute->attribute_name}}</td> 
                                        <td>{{$attribute->is_mandatory}}</td>
                                        <td>{{$attribute->attribute_value}}</td>
                                        <td>
                                            <a href="{{route('admin.edit.attributes')}}"><i class="fa fa-edit fa-2x text-info"></i></a>
                                            <a href="#" onclick="confirm('Are you sure, You want to delete this category ?') || event.stopImmediatePropagation()" wire:click.prevent="deleteAttribute({{$attribute->id}})" style="margin-left:10px;"><i class="fa fa-times fa-2x text-danger"></i></a>
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

