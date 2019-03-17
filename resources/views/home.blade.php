@extends('layout.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Assets Listing</div>

                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Asset Type</th>
                            <th>Code</th>
                            <th>Status</th>
                            <th>Owner</th>
                            <th>Purchase Date</th>
                            <th>Action(s)</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($assetObjects as $object)
                        <tr>
                            <td>{{$object->type()}}</td>
                            <td>{{$object->code}}</td>
                            <td><span class = "bg-success text-white" style="border-radius: 4px; padding: 2px 5px 2px 5px;">{{$object->status()}}</span></td>
                            <td>{{$object->owner()}}</td>
                            <td>{{\Carbon\Carbon::parse($object->purchase_date)->format('d M Y')}}</td>
                            <td><a href="#">Details</a></td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                {{ $assetObjects->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
