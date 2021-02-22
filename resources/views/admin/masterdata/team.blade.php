@extends('layouts.admin')
@section('css')

    <link rel="stylesheet" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
@endsection
@section('admin')

    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <h4 class="mb-0">Team Management</h4>

                <div class="page-title-right">
                    <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#createteam">Create New</button>
                </div>

            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Team List</h4>

                    <div class="table-responsive">
                        <table class="table mb-0" id="team">

                            <thead>
                            <tr>
                                <th>Team Name</th>
                                <th>Team Sort Name</th>
                                <th>Team Image</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                        </table>
                    </div>

                </div>
            </div>
        </div>

    </div>


    <div class="modal fade" id="createteam" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Create Team</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{route('admin.team.save')}}" method="post" enctype="multipart/form-data">
                    @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text"  name="team_name" class="form-control" placeholder="Team Name">
                    </div>
                    <div class="form-group">
                        <input type="text"  name="team_sort_name" class="form-control" placeholder="Team Sort Name">
                    </div>
                    <div class="form-group">
                        <input type="file"  name="team_image" class="form-control" placeholder="Team Image">
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


    <div class="modal fade" id="editteam" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Update Team</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{route('admin.team.update')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="hidden" name="edit_team" class="edittm">
                            <input type="text"  name="team_name" class="form-control team_namedata" placeholder="Team Name">
                        </div>
                        <div class="form-group">
                            <input type="text"  name="team_sort_name" class="form-control team_sort_namedata" placeholder="Team Sort Name">
                        </div>
                        <div class="form-group">
                            <img src="" style="height: 100px;width: 100px" class="teamimgup">
                            <input type="file"  name="team_image" class="form-control" placeholder="Team Image">
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



    <div class="modal fade" id="deleteteam" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Delete Team</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{route('admin.team.delete')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            are you sure to delete ?
                            <input type="hidden" name="delete_team" class="deleteteam">
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

    function deleteteam(id) {
        $('.deleteteam').val(id);
    }



    function editteam(id)
    {
        var id = id;
        $.ajax({
            type : "POST",
            url : "{{route('admin.get.single.team')}}",
            data : {
                '_token' : "{{csrf_token()}}",
                'id' : id,
            },
            success:function (data) {
                var url = "{{url('/')}}";
                var image = url+'/'+data.team_image;


                $('.edittm').val(id);
                $('.team_namedata').val(data.team_name);
                $('.team_sort_namedata').val(data.team_sort_name);
                $('.teamimgup').attr('src',image);

            }
        });
    }


    $(document).ready(function () {

        $('#team').DataTable({

            "processing": true,
            "serverSide": true,
            "ajax": "{{route('admin.get.team')}}",
            columns: [
                { data: 'team_name', name: 'team_name' },
                { data: 'team_sort_name', name: 'team_sort_name' },
                {
                    data: 'team_image',
                    render: function(data) {
                        if(data != null) {
                            return "<img src='{{url('/')}}/"+ data +"' style='height:50px;width:50px'>";
                        }
                        else {
                            return "<img src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ0okZSQTV10ebVN9GwLfr45wbCB9tyUK_oFjmRrP9Uo000e9sU' style='height:50px;width:50px'>";
                        }

                    },
                    defaultContent: "<img src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ0okZSQTV10ebVN9GwLfr45wbCB9tyUK_oFjmRrP9Uo000e9sU' style='height:50px;width:50px'>"
                },
                {data: 'action', name: 'action', orderable: false, searchable: false},
            ]
        });
    })
</script>

@endsection
