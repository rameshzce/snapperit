@extends('album::layouts.app')
@section('content')

<div>
	<h2 style="text-align:center">
	 	Jobs for the album - {{$album_name}}
	</h2>
</div>
<div id="page-wrapper">
	<!-- <div class="container-fluid"> -->
	<p>
		<a href="/jobs/create">Create New Job</a>
	</p>
	<table class="table table-bordered">
        <tbody>
			<tr>
                <th>
                    Job name
                </th>
            </tr>
            @if($data)
                @foreach($data as $value)
	                <tr>
	                    <td><a href="./jobs/{{$value->id}}">{{$value->name}}</a></td>
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
