@extends('welcome')
@section('title', ' Activities')
@section('content')

<div class="card">
    <div class="card-header">
        <h2>{{ $title }}</h2>
    </div>
    <div class="card-body">
        
        <form method="GET" action="{{ url('/activity') }}" role="search">
            <div class="input-group">
                <input type="text" class="form-control" name="search" placeholder="Search by activity name..." value="{{ request('search') }}">
                <span class="input-group-btn">
                    <button type="submit" class="btn btn-secondary">
                        <i class="fa fa-search"></i> Search
                    </button>
                </span>
            </div>
        </form>
        <br/>

        <a href="{{ url('/activity/create') }}" class="btn btn-success btn-sm" title="Add New Activity">
            <i class="fa fa-plus" aria-hidden="true"></i> Add New Activity
        </a>
        <br/><br/>
        
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Time Created</th>
                        <th>Duration</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($activities as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->created_at }}</td>
                        <td>{{ $item->duration }}</td>
                        <td>
                            <span class="btn btn-sm {{ $item->status == 'done' ? 'btn-success' : 'btn-danger' }}">
                                <i class="fa fa-check-circle" aria-hidden="true"></i> {{ ucfirst($item->status) }}
                            </span>
                        </td>
                        <td>
                            <a href="{{ url('/activity/' . $item->id) }}" title="View Activity">
                                <button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button>
                            </a>
                            <a href="{{ url('/activity/' . $item->id . '/edit') }}" title="Edit Activity">
                                <button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Update</button>
                            </a>
                            <form method="POST" action="{{ url('/activity' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Activity" onclick="return confirm(&quot;Confirm delete?&quot;)">
                                    <i class="fa fa-trash-o" aria-hidden="true"></i> Delete
                                </button>
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
