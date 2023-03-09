@extends("template")
@section("body")
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{route("mcq.topics.store")}}">
                        @csrf
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">

                                    <select class="form-control" name="subject_id">
                                        @foreach($subject as $sub)
                                            <option value="{{$sub->id}}">{{$sub->subject_name}}</option>
                                        @endforeach
                                    </select>

                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <input type="text" id="roundText" class="form-control round" placeholder="Enter Subject Name" name="topic_name">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <input type="submit" class="btn btn btn-primary" value="Add New">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <section class="section">
        <div class="card">

            <div class="card-body">
                <table class="table table-striped" id="table1">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Subject Name</th>
                        <th>Topic Name</th>
                        <th>Created Date</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>




                    @foreach($data as $key=>$subjects)

                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$subjects->subject_name}}</td>
                            <td>{{$subjects->topic_name}}</td>
                            <td>{{$subjects->created_at}}</td>
                            <td>


                                <button type="button" class="badge bg-success" data-bs-toggle="modal"
                                        data-bs-target="#backdrop{{$subjects->id}}" style="border: none">
                                    Edit
                                </button>
                                <a class="badge bg-danger" href="{{route("mcq.topics.delete",[$subjects->id])}}">Delete</a>
                                <!--Disabled Backdrop Modal -->
                                <div class="modal fade text-left" id="backdrop{{$subjects->id}}" tabindex="-1" role="dialog"
                                     aria-labelledby="myModalLabel4" data-bs-backdrop="false" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="myModalLabel4">Subject</h4>
                                                <button type="button" class="close" data-bs-dismiss="modal"
                                                        aria-label="Close">
                                                    <i data-feather="x"></i>
                                                </button>
                                            </div>
                                            <form method="POST" action="{{route("mcq.topics.edit",[$subjects->id])}}">

                                                @csrf
                                                <div class="modal-body">
                                                    <select class="form-control" name="subject_id">
                                                        @foreach($subject as $sub)
                                                            <option value="{{$sub->id}}" @if($sub->id==$subjects->subject_id) {{$value="selected"}} @endif>{{$sub->subject_name}}</option>
                                                        @endforeach
                                                    </select>
                                                </br>
                                                    <input type="text" class="form-control" name="topic_name" placeholder="Enter Subject Name" value="{{$subjects->topic_name}}">


                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-light-secondary"
                                                            data-bs-dismiss="modal">
                                                        <i class="bx bx-x d-block d-sm-none"></i>
                                                        <span class="d-none d-sm-block">Close</span>
                                                    </button>
                                                    <input type="submit" class="btn btn-success" value="Save">
                                                </div>

                                            </form>
                                        </div>
                                    </div>
                            </td>
                        </tr>

                    @endforeach


                    </tbody>
                </table>
            </div>
        </div>

    </section>
@endsection
