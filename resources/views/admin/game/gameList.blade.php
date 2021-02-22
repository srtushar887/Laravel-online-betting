@extends('layouts.admin')
@section('css')

    <link rel="stylesheet" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
@endsection
@section('admin')

    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0">Game</h4>

                <div class="page-title-right">
                    <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#creatgame">Create New</button>
                </div>

            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Game List</h4>

                    <div class="table-responsive">
                        <table class="table mb-0" id="team">

                            <thead>
                            <tr>
                                <th>Series Name</th>
                                <th>Match Name</th>
                                <th>Category Name</th>
                                <th>First team</th>
                                <th>Second team</th>
                                <th>Venue</th>
                                <th>Start Date</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                        </table>
                    </div>

                </div>
            </div>
        </div>

    </div>


    <div class="modal fade" id="creatgame" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Create Serise</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{route('admin.game.save')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Select Serise</label>
                            <select class="form-control" name="series_id">
                                <option value="0">select any</option>
                                @foreach($all_serise as $serssecond)
                                    <option value="{{$serssecond->id}}">{{$serssecond->series_name}}</option>
                                @endforeach
                            </select>

                        </div>
                        <div class="form-group">
                            <label>Select Match</label>
                            <select class="form-control" name="match_id">
                                <option value="0">select any</option>
                                @foreach($all_match as $amct)
                                    <option value="{{$amct->id}}">{{$amct->match_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Select Category</label>
                            <select class="form-control" name="category_id">
                                <option value="0">select any</option>
                                <option value="1">Football</option>
                                <option value="2">Cricket</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Select 1st Team</label>
                            <select class="form-control" name="first_team_id">
                                <option value="0">select any</option>
                                @foreach($all_team as $tem)
                                    <option value="{{$tem->id}}">{{$tem->team_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Select 2nd Team</label>
                            <select class="form-control" name="second_team_id">
                                <option value="0">select any</option>
                                @foreach($all_team as $tem)
                                    <option value="{{$tem->id}}">{{$tem->team_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Game Venue</label>
                            <input type="text" name="venue" class="form-control" placeholder="Enter Game Venue">
                        </div>
                        <div class="form-group">
                            <label>Start Time</label>
                            <input type="datetime-local" name="start_date" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Create</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <div class="modal fade" id="editserise" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Update Team</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{route('admin.gameseries.update')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Select Serise</label>
                            <select class="form-control" name="series_id">
                                <option value="0">select any</option>
                                @foreach($all_serise as $serssecond)
                                    <option value="{{$serssecond->id}}">{{$serssecond->series_name}}</option>
                                @endforeach
                            </select>

                        </div>
                        <div class="form-group">
                            <label>Select Match</label>
                            <select class="form-control" name="match_id">
                                <option value="0">select any</option>
                                @foreach($all_match as $amct)
                                    <option value="{{$amct->id}}">{{$amct->match_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Select Category</label>
                            <select class="form-control" name="category_id">
                                <option value="0">select any</option>
                                <option value="1">Football</option>
                                <option value="2">Cricket</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Select 1st Team</label>
                            <select class="form-control" name="first_team_id">
                                <option value="0">select any</option>
                                @foreach($all_team as $tem)
                                    <option value="{{$tem->id}}">{{$tem->team_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Select 2nd Team</label>
                            <select class="form-control" name="second_team_id">
                                <option value="0">select any</option>
                                @foreach($all_team as $tem)
                                    <option value="{{$tem->id}}">{{$tem->team_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Game Venue</label>
                            <input type="text" name="venue" class="form-control" placeholder="Enter Game Venue">
                        </div>
                        <div class="form-group">
                            <label>Start Time</label>
                            <input type="datetime-local" name="start_date" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>



    <div class="modal fade" id="deletegame" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Delete Team</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{route('admin.game.delete')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            are you sure to delete ?
                            <input type="hidden" name="delete_game" class="deletegame">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


@endsection



@section('js')
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script>

        function deletegame(id) {
            $('.deletegame').val(id);
        }



        $(document).ready(function () {

            $('#team').DataTable({

                "processing": true,
                "serverSide": true,
                "ajax": "{{route('admin.get.game')}}",
                columns: [
                    { data: 'serise.series_name', name: 'serise.series_name' },
                    { data: 'match.match_name', name: 'match.match_name' },
                    {
                        data: 'category_id',
                        render: function(data) {
                            if(data == 1) {
                                return "<span class='label label-info label-mini text-center'>Foodball</span>";
                            }else if (data == 2)
                            {
                                return "<span class='label label-info label-mini text-center'>Cricket</span>";
                            }
                            else {
                                return "<span class='label label-success label-mini text-center'>Not Set</span>";
                            }

                        },
                        defaultContent: '<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ0okZSQTV10ebVN9GwLfr45wbCB9tyUK_oFjmRrP9Uo000e9sU" alt="" img style="width:100%; height:100px">'
                    },
                    { data: 'first_team.team_name', name: 'first_team.team_name' },
                    { data: 'second_team.team_name', name: 'second_team.team_name' },
                    { data: 'venue', name: 'venue' },
                    { data: 'start_date', name: 'start_date' },
                    {
                        data: 'status',
                        render: function(data) {
                            if(data == 1) {
                                return "<span class='label label-info label-mini text-center'>Not Started</span>";
                            }else if (data == 2)
                            {
                                return "<span class='label label-info label-mini text-center'>Started</span>";
                            }else if (data == 3){
                                return "<span class='label label-info label-mini text-center'>Ended</span>";
                            }
                            else {
                                return "<span class='label label-success label-mini text-center'>Not Set</span>";
                            }

                        },
                        defaultContent: '<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ0okZSQTV10ebVN9GwLfr45wbCB9tyUK_oFjmRrP9Uo000e9sU" alt="" img style="width:100%; height:100px">'
                    },
                    {data: 'action', name: 'action', orderable: false, searchable: false},
                ]
            });
        })
    </script>

@endsection
