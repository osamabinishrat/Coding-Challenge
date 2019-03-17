@extends('layout.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3 class="float-left">{{$assetObject->type()}} ({{$assetObject->code}})</h3>
                        <span class = "bg-success text-white float-right" style="border-radius: 4px; padding: 2px 5px 2px 5px;">Status : {{$assetObject->status()}}</span>
                    </div>
                    <div class="card-body">
                        <h5>Description</h5>
                        <p>{{$assetObject->description}}</p>
                        <table class="table table-bordered">
                            <tbody>
                            <tr>
                                <td>
                                    <h5>Current Owner</h5>
                                    <p>{{$assetObject->owner()}} <span class = "bg-success text-white" style="border-radius: 4px; padding: 2px 5px 2px 5px;">{{$assetObject->status()}}</span></p>
                                </td>
                                <td>
                                    <h5>Updated By</h5>
                                    <p>{{$assetObject->updatedBy()}}</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h5>Purchase Date</h5>
                                    <p>{{\Carbon\Carbon::parse($assetObject->purchase_date)->format('d M Y')}}</p>
                                </td>
                                <td>
                                    <h5>Created</h5>
                                    <p>{{\Carbon\Carbon::parse($assetObject->created_at)->format('d M Y')}}</p>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <a class="btn btn-info" href="{{URL::to('/asset/listing')}}">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
