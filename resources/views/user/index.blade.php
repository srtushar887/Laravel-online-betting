@extends('layouts.user')
@section('user')
    <div class="bg-white" style="min-height: 400px;">
        <div class="row">
            <div class="col-xl-9">
                <!-- title header -->
                <div class="t_header">
                    <div class="float-left">
                        <h2>Home</h2>
                    </div>
                    <div class="float-right">
                        <a href="today_match.html" class="btn btn-sm">Today's Match</a>
                        <a href="my_betting.html" class="btn btn-sm">My Betting</a>
                        <a href="betting_record.html" class="btn btn-sm">Betting Record</a>
                    </div>
                </div>
                <!-- catagory -->
                <div class="catagory">
                    <!-- cricket -->
                    <img src="{{asset('assets/frontend/')}}/images/cricket.png" class="img-fluid my-2" alt="Cricket">
                    @if(count($cricket_games) > 0)

                    <table class="table table-sm">
                        <thead>
                        <tr>
                            <th>Start Date | Time</th>
                            <th class="text-center">Emirates D20</th>
                            <th></th>
                            <th class="text-center">GIVEN</th>
                            <th class="text-center">EXPECTED</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($cricket_games as $cri_game)
                            <?php
                                $match_name = \App\Models\game_match::where('id',$cri_game->match_id)->first();
                                $first_team = \App\Models\game_team::where('id',$cri_game->first_team_id)->first();
                                $sec_team = \App\Models\game_team::where('id',$cri_game->second_team_id)->first();
                            ?>
                        <tr>
                            <td>20 Dec 11:00 pm</td>
                            <td>
                                <div class="match">
                                    <a href="running.html" class="d-block">
                                        @if($match_name){{$match_name->match_name}}@endif MATCH : {{$first_team->team_name}}
                                            @if(!empty($first_team->team_image) && file_exists($first_team->team_image))
                                            <img src="{{asset($first_team->team_image)}}" class="img-fluid rounded mx-2" alt="blank">
                                            @endif
                                            V
                                            @if(!empty($sec_team->team_image) && file_exists($sec_team->team_image))
                                                <img src="{{asset($sec_team->team_image)}}" class="img-fluid rounded mx-2" alt="blank">
                                            @endif
                                            {{$sec_team->team_name}}
                                    </a>
                                </div>
                            </td>
                            <td class="text-center">
                                @if($cri_game->status == 2)
                                <img src="{{asset('assets/frontend/')}}/images/live.gif" class="img-fluid" alt="live">
                                @endif
                            </td>
                            <td>
                                <div class="match_blue"><a href="running.html" class="d-block">150</a></div>
                            </td>
                            <td>
                                <div class="match_blue"><a href="running.html" class="d-block">8</a></div>
                            </td>
                            <td>
                                <div class="match_blue"><a href="#" class="d-block" data-toggle="modal" data-target="#newOffer">Create New Offer</a></div>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                @else
                        <p>No game avaialable</p>
                        @endif
                    <!-- football -->
                    <img src="{{asset('assets/frontend/')}}/images/football.png" class="img-fluid my-2" alt="Cricket">
                    @if(count($footbal_games) > 0)
                    <table class="table table-sm">
                        <thead>
                        <tr>
                            <th>Start Date | Time</th>
                            <th class="text-center">Emirates D20</th>
                            <th></th>
                            <th class="text-center">GIVEN</th>
                            <th class="text-center">EXPECTED</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($footbal_games as $foot_game)
                            <?php
                            $fmatch_name = \App\Models\game_match::where('id',$foot_game->match_id)->first();
                            $ffirst_team = \App\Models\game_team::where('id',$foot_game->first_team_id)->first();
                            $fsec_team = \App\Models\game_team::where('id',$foot_game->second_team_id)->first();
                            ?>
                            <tr>
                                <td>20 Dec 11:00 pm</td>
                                <td>
                                    <div class="match">
                                        <a href="running.html" class="d-block">
                                            @if($fmatch_name){{$fmatch_name->match_name}}@endif MATCH : {{$ffirst_team->team_name}}
                                            @if(!empty($ffirst_team->team_image) && file_exists($ffirst_team->team_image))
                                                <img src="{{asset($ffirst_team->team_image)}}" class="img-fluid rounded mx-2" alt="blank">
                                            @endif
                                            V
                                            @if(!empty($fsec_team->team_image) && file_exists($fsec_team->team_image))
                                                <img src="{{asset($fsec_team->team_image)}}" class="img-fluid rounded mx-2" alt="blank">
                                            @endif
                                            {{$fsec_team->team_name}}
                                        </a>
                                    </div>
                                </td>
                                <td class="text-center">
                                    @if($foot_game->status == 2)
                                        <img src="{{asset('assets/frontend/')}}/images/live.gif" class="img-fluid" alt="live">
                                    @endif
                                </td>
                                <td>
                                    <div class="match_blue"><a href="running.html" class="d-block">150</a></div>
                                </td>
                                <td>
                                    <div class="match_blue"><a href="running.html" class="d-block">8</a></div>
                                </td>
                                <td>
                                    <div class="match_blue"><a href="#" class="d-block" data-toggle="modal" data-target="#newOffer">Create New Offer</a></div>
                                </td>
                            </tr>


                        <div class="modal" id="newOfferfoodball{{$foot_game->id}}">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content modal_bg text-white">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Place Your Offer</h5>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <p class="m-0">Remaining Balance : $11.574</p>
                                        <p class="m-0">Base Ratio : $1.00</p>
                                        <p>Minimum Lot : 1</p>
                                        <form action="#" method="post">
                                            <div class="form-row bg-light text-dark rounded p-4 border">
                                                <div class="col-4 mb-2">
                                                    <label>Select Team:</label>
                                                </div>
                                                <div class="col-8 mb-2">
                                                    <select class="form-control form-control-sm">
                                                        <option>Select Team</option>
                                                        <option>WELLINGTON</option>
                                                        <option>AUCKLAND</option>
                                                    </select>
                                                </div>
                                                <div class="col-4 mb-2">
                                                    <label>Bet Type:</label>
                                                </div>
                                                <div class="col-8 mb-2">
                                                    <select class="form-control form-control-sm">
                                                        <option>Select</option>
                                                        <option>Given</option>
                                                        <option>Expected</option>
                                                    </select>
                                                </div>
                                                <div class="col-4 mb-2">
                                                    <label>Bet Ratio ( $ ):</label>
                                                </div>
                                                <div class="col-8 mb-2">
                                                    <input type="text" class="form-control form-control-sm">
                                                </div>
                                                <div class="col-4 mb-2">
                                                    <label>Lot Count:</label>
                                                </div>
                                                <div class="col-8 mb-2">
                                                    <input type="number" class="form-control form-control-sm">
                                                </div>
                                            </div>
                                            <div class="text-center mt-3">
                                                <p class="m-0">You are giving offer from <span class="text-success font-weight-bold">SYDNEY THUNDER</span></p>
                                                <p class="m-0">If <span class="text-success font-weight-bold">SYDNEY THUNDER</span> win you will win $1 on each accepted lot.</p>
                                                <p>If <span class="text-success font-weight-bold">SYDNEY THUNDER</span> defeat you will lose $1.00 on each accepted lot.</p>
                                                <p>Best of luck!</p>
                                                <button type="submit" class="btn btn-light">Confirm</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @endforeach
                        </tbody>
                    </table>
                    @else
                        <p>No Game Available</p>
                    @endif
                </div>
            </div>
            <div class="col-xl-3 text-xl-right">
                <div class="row">
                    <div class="col-4 col-xl-12 mt-3"><a href="#"><img src="{{asset('assets/frontend/')}}/images/CALLBACK2.gif" class="img-fluid" alt="CALLBACK"></a></div>
                    <div class="col-4 col-xl-12 mt-3"><a href="privacyPolicy.html"><img src="{{asset('assets/frontend/')}}/images/ACC.gif" class="img-fluid" alt="account"></a></div>
                    <div class="col-4 col-xl-12 mt-3"><a href="help.html"><img src="{{asset('assets/frontend/')}}/images/REF.gif" class="img-fluid" alt="REF"></a></div>
                </div>
            </div>
        </div>
    </div>




    <div class="modal" id="newOffer">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content modal_bg text-white">
                <div class="modal-header">
                    <h5 class="modal-title">Place Your Offer</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <p class="m-0">Remaining Balance : $11.574</p>
                    <p class="m-0">Base Ratio : $1.00</p>
                    <p>Minimum Lot : 1</p>
                    <form action="#" method="post">
                        <div class="form-row bg-light text-dark rounded p-4 border">
                            <div class="col-4 mb-2">
                                <label>Select Team:</label>
                            </div>
                            <div class="col-8 mb-2">
                                <select class="form-control teamid form-control-sm">

                                </select>
                                <p class="text-danger crickteamerror">Please select team</p>
                            </div>
                            <div class="col-4 mb-2">
                                <label>Bet Type:</label>
                            </div>
                            <div class="col-8 mb-2">
                                <select class="form-control bettpe form-control-sm">
                                    <option value="0">Select</option>
                                    <option value="1">Given</option>
                                    <option value="2">Expected</option>
                                </select>
                                <p class="text-danger circkbettypeerror">Please select bet type</p>
                            </div>
                            <div class="col-4 mb-2">
                                <label>Bet Ratio ( $ ):</label>
                            </div>
                            <div class="col-8 mb-2">
                                <input type="text" class="form-control form-control-sm betratio">
                                <p class="text-danger crickbetrationerror">Please select team</p>
                            </div>
                            <div class="col-4 mb-2">
                                <label>Lot Count:</label>
                            </div>
                            <div class="col-8 mb-2">
                                <input type="number" class="form-control form-control-sm lotcount">
                                <p class="text-danger crickloterror">Please select team</p>
                            </div>
                        </div>
                        <div class="text-center mt-3">
                            <p class="m-0">You are giving offer from <span class="text-success font-weight-bold">SYDNEY THUNDER</span></p>
                            <p class="m-0">If <span class="text-success font-weight-bold">SYDNEY THUNDER</span> win you will win $1 on each accepted lot.</p>
                            <p>If <span class="text-success font-weight-bold">SYDNEY THUNDER</span> defeat you will lose $1.00 on each accepted lot.</p>
                            <p>Best of luck!</p>
                            <button type="button" class="btn btn-light" id="crickofferconfirm">Confirm</button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


@endsection

@section('js')

<script>
    $(document).ready(function () {
            $('.crickteamerror').hide();
            $('.circkbettypeerror').hide();
            $('.crickbetrationerror').hide();
            $('.crickloterror').hide();





    })
</script>
@endsection

