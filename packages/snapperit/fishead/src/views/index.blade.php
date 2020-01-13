@extends('album::layouts.app')
@section('content')
<div>
	<h2 style="text-align:center">
	 	Albums
	</h2>
</div>

<div id="page-wrapper">
	<!-- <div class="container-fluid"> -->
	<p>
		<a href="./albums/create">Create New Album</a>
	</p>
	<table class="table table-bordered">
        <tbody>
			<tr>
                <th>
                    Album name
                </th>
            </tr>
            @if($data)
                @foreach($data as $value)
	                <tr>
	                    <td><a href="./jobs/album/{{$value->id}}">{{$value->name}}</a></td>
	                </tr>
                @endforeach
            @endif
        </tbody>
    </table>

    Page {{ $data->currentPage() }} of {{ $data->lastPage() }}

    <span class="btn btn-success" style="float:right">Total ({{ $data->total() }})</span>
    <div class="pagination-container">
        {{ $data->links() }}
    </div>
</div>

@stop
