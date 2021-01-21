<div class="col md-10">
    <h1 class="h4 mb-0 font-weight-bold text-primary" style="margin-top: 0.2em;">{{$course->name}} Creations</h1>
</div>
    <div class="row" style="margin-top: 30px;">
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Creation Name</th>
                <th scope="col">Creator</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($creations as $creation)
{{--                @foreach($courses as $creation)--}}
                <tr>

                    <td>{{ $creation->id}}</td>
                    <td>{{ $creation->name }}</td>
                    <td>{{ $creation->created_by }}</td>
                    <td>@if($creation->status == 0) <p class="text-warning">Pending</p>
                        @elseif($creation->status == 1) <p class="text-success">Approved</p>
                        @else <p class="text-danger">Rejected</p> @endif </td>
                    <td width="150px">
                        <div class="row no-gutters">
                            @if($creation->status == 0)
                                <div class="col-md-6">
                                    <form action="{{route('admin.creations.approve', $creation->id)}}"
                                          method="POST">
                                        {{ csrf_field() }}
                                        <input name="event_id" type="hidden" value="{{$creation->id}}">
                                        <button class="btn btn-success btn-circle" title="Approve" type="submit"><i class="fas fa-check"></i></button>
                                    </form>
                                </div>
                                <div class="col-md-6">
                                    <form action="{{route('admin.creations.reject', $creation->id)}}"
                                          method="POST">
                                        {{ csrf_field() }}
                                        <input name="event_id" type="hidden" value="{{$creation->id}}">
                                        <button class="btn btn-danger btn-circle" title="Reject" type="submit"><i class="fas fa-times"></i></button>
                                    </form>
                                </div>
                            @endif
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
