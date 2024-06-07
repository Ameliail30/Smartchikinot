@extends('layout.admin')

@section('title', 'Manage Device | Smart Chikinot')

@section('page','Manage Devices')


@section('content')
<div class="card mb-4">
        <div class="card-header pb-0">
            <h6>Manage devices</h6>
        </div>
        <div class="card-title">
<a href="{{url('/devices/create')}}" class="btn btn-primary">tambah device</a>
        </div>
        <div class="card-body px-0 pt-0 pb-2">
            <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                    <thead>
                        <tr>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">id</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">User id</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center">name</th>
                            <th class="text-secondary opacity-7">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($devices as $item)
                        <tr>
                            <td class="text-center">
                                <span class="text-secondary text-xs font-weight-bold">{{$item->User_id}}</span>
                            </td>
                            <td class="text-center">
                                <span class="text-secondary text-xs font-weight-bold">{{$item->id}}</span>
                            </td>
                            <td class="text-center">
                                <span class="text-secondary text-xs font-weight-bold">{{$item->name}}</span>
                            </td>
                            <td class="">
                                <div class="d-flex">
                                    <a href="{{ url('/devices/'.$item->id.'/edit') }}" class="btn btn-secondary font-weight-bold text-xs me-2"
                                        data-toggle="tooltip" data-original-title="Edit user">
                                        Edit
                                    </a>
                                    <form action="{{ url('/devices/'.$item->id) }}" method="post" >
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-warning font-weight-bold text-xs">
                                            Hapus
                                    </button>
                                </div>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
