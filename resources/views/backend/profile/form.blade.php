@extends('backend.layout')

@section('content')

    <div id="app_content">

     @if(\Session::has('message'))

            {!! \Helper::alert('success' , \Session::get('message')) !!}

    @endif



    @if(\Session::has('info'))

            {!! \Helper::alert('info' , \Session::get('info')) !!}

    @endif

    <div id="content_header">

        <h3 class="user"> {{ \Helper::labelAction() }}</h3>

    </div>

        <div id="content_body">

            <div id="station-form-wrapper">

                <!-- start form -->

                {!! Form::model($model , ['class' => 'main-editor' , 'enctype' => 'multipart/form-data']) !!}   

                

                <div class="tab-selector content-text">

                    <ul id="content-tab">

                        <li class="active" id = 'tab_bahasa' onclick="return activeBahasa();"><span class="default">Profile</span></li>

                        <li class="" id = 'tab_english' onclick="return activeEnglish();"><span class="default">Update Profile</span></li>

                    </ul>

                </div>

                

                    <!-- start element -->

                    <div id="content">

                        <div id="media-content-container" class="media-container active">

                        

                           

                            <div id="content_bahasa">

                               

                                <div class="element-block-wrapper">

                                <div class="label block_left">Name</div>

                                <div class="center block_separator">:</div>

                                <div class=" block_label block_right">

                                    <div style = 'margin-top:5px;'>{{ $model->firstname }} {{ $model->lastname }}</div>

                                    <div class="error"></div>

                                </div>

                                <div class="line-break clear_left">&nbsp;</div>

                            </div>



                            <div class="element-block-wrapper">

                                <div class="label block_left">Email</div>

                                <div class="center block_separator">:</div>

                                <div class=" block_label block_right">

                                    <div style = 'margin-top:5px;'>{{ $model->email }}</div>

                                    <div class="error"></div>

                                </div>

                                <div class="line-break clear_left">&nbsp;</div>

                            </div>



                            <div class="element-block-wrapper">

                                <div class="label block_left">Role</div>

                                <div class="center block_separator">:</div>

                                <div class=" block_label block_right">

                                    <div style = 'margin-top:5px;'>{{ $model->role->role }}</div>

                                    <div class="error"></div>

                                </div>

                                <div class="line-break clear_left">&nbsp;</div>

                            </div>



                            <div class="element-block-wrapper">

                                <div class="label block_left">Gender</div>

                                <div class="center block_separator">:</div>

                                <div class=" block_label block_right">

                                    <div style = 'margin-top:5px;'>{{ $model->gender == 'p' ? 'Men' : 'Woman' }}</div>

                                    <div class="error"></div>

                                </div>

                                <div class="line-break clear_left">&nbsp;</div>

                            </div>



                            <div class="element-block-wrapper">

                                <div class="label block_left">Phone</div>

                                <div class="center block_separator">:</div>

                                <div class=" block_label block_right">

                                    <div style = 'margin-top:5px;'>{{ $model->phone }}</div>

                                    <div class="error"></div>

                                </div>

                                <div class="line-break clear_left">&nbsp;</div>

                            </div>







                                 



                            </div>



                            <div id="content_english">

                               

                                <div id="media-content-container" class="media-container active">

                        

                            <div class="subtitle_container"><span>Account Information</span></div>

                            

                            <p>&nbsp;</p>

                            

                            <div class="element-block-wrapper">

                                <div class="label block_left">Role</div>

                                <div class="center block_separator">:</div>

                                <div class=" block_label block_right">

                                    <div> {!!  Form::select('role_id', $roles) !!}</div>

                                    <div class="error">{{ $errors->first('role_id') }}</div>

                                </div>

                                <div class="line-break clear_left">&nbsp;</div>

                            </div>



                            <div class="element-block-wrapper">

                                <div class="label block_left">Email</div>

                                <div class="center block_separator">:</div>

                                <div class=" block_label block_right">

                                    <div> {!!  Form::text('email', null) !!}</div>
                                    <div class="error">{{ $errors->first('email') }}</div>

                                </div>

                                <div class="line-break clear_left">&nbsp;</div>

                            </div>



                            <div class="element-block-wrapper">

                                <div class="label block_left">Username</div>

                                <div class="center block_separator">:</div>

                                <div class=" block_label block_right">

                                    <div> {!!  Form::text('name', null) !!}</div>

                                    <div class="error">{{ $errors->first('name') }}</div>

                                </div>

                                <div class="line-break clear_left">&nbsp;</div>

                            </div>



                             <div class="element-block-wrapper">

                                <div class="label block_left">Password</div>

                                <div class="center block_separator">:</div>

                                <div class=" block_label block_right">

                                    <div> {!!  Form::password('password', null) !!}</div>

                                    <div class="error">{{ $errors->first('password') }}</div>

                                </div>

                                <div class="line-break clear_left">&nbsp;</div>

                            </div>



                            <div class="element-block-wrapper">

                                <div class="label block_left">Verify Password</div>

                                <div class="center block_separator">:</div>

                                <div class=" block_label block_right">

                                    <div> {!!  Form::password('verify_password', null) !!}</div>

                                    <div class="error">{{ $errors->first('verify_password') }}</div>

                                </div>

                                <div class="line-break clear_left">&nbsp;</div>

                            </div>



                            <p>&nbsp;</p>



                            <div class="subtitle_container"><span>General Information</span></div>

                            

                            <p>&nbsp;</p>



                            <div class="element-block-wrapper">

                                <div class="label block_left">Firstname</div>

                                <div class="center block_separator">:</div>

                                <div class=" block_label block_right">

                                    <div> {!!  Form::text('firstname', null) !!}</div>

                                    <div class="error">{{ $errors->first('firstname') }}</div>

                                </div>

                                <div class="line-break clear_left">&nbsp;</div>

                            </div>



                            <div class="element-block-wrapper">

                                <div class="label block_left">Lastname</div>

                                <div class="center block_separator">:</div>

                                <div class=" block_label block_right">

                                    <div> {!!  Form::text('lastname', null) !!}</div>

                                    <div class="error">{{ $errors->first('lastname') }}</div>

                                </div>

                                <div class="line-break clear_left">&nbsp;</div>

                            </div>



                            <div class="element-block-wrapper">

                                <div class="label block_left">Gender</div>

                                <div class="center block_separator">:</div>

                                <div class=" block_label block_right">

                                    <div> {!!  Form::select('gender', ['p' => 'Pria' , 'w' => 'Wanita']) !!}</div>

                                    <div class="error">{{ $errors->first('gender') }}</div>

                                </div>

                                <div class="line-break clear_left">&nbsp;</div>

                            </div>



                            <div class="element-block-wrapper">

                                <div class="label block_left">Address</div>

                                <div class="center block_separator">:</div>

                                <div class=" block_label block_right">

                                    <div> {!!  Form::textarea('address', null) !!}</div>

                                    <div class="error">{{ $errors->first('address') }}</div>

                                </div>

                                <div class="line-break clear_left">&nbsp;</div>

                            </div>

                            

                            <div class="element-block-wrapper">

                                <div class="label block_left">Phone</div>

                                <div class="center block_separator">:</div>

                                <div class=" block_label block_right">

                                    <div> {!!  Form::text('phone', null , ['maxlength' => 15]) !!}</div>

                                    <div class="error">{{ $errors->first('phone') }}</div>

                                </div>

                                <div class="line-break clear_left">&nbsp;</div>

                            </div>



                            <div class="center no_label">&nbsp;</div>

                        

                        </div>



                                <div class="block_right" id="submit_wrapper">

                                    <span>Submit</span>

                                </div>

                                <div class=" block_right" id="cancel_wrapper">

                                    <button data-link="{{ \Helper::urlAction('index') }}" class="cancel-button" name="cancel_form">Cancel</button>

                                </div>



                            </div>



                            

                            

                            <div class="center no_label">&nbsp;</div>

                        

                        </div>

                        <!-- End Media Content Container --></div>

                    <!-- End ID Content -->

                    



                    <div class="break8 clear_left">&nbsp;</div>

                {!! Form::close() !!}

                <!-- end of form --></div>

        </div>

    </div>



    @include('backend.popElfinder');

@endsection

@stop



