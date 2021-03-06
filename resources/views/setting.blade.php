@extends('layouts.app')

@section('subtitle')
    <div class="page-title-heading">
        <div class="page-title-icon">
            <i class="pe-7s-note icon-gradient bg-amy-crisp">
            </i>
        </div>
        <div>USER SETTING</div>
    </div>
    <div class="page-title-actions">
        <div class="d-inline-block">
        <a href="{{route('home')}}" class="btn-shadow btn btn-info">
            <span class="btn-icon-wrapper pr-2 opacity-7">
                <i class="fa fa-angle-double-left fa-w-20"></i>
            </span>
            Home
        </a>
        </div>
    </div>
@endsection

@section('content')
@php
    $user = Auth::user();
@endphp
<div class="row">
    <div class="col-md-12">
        <div class="card-hover-shadow profile-responsive card-border border-success mb-3 card">
            <div class="dropdown-menu-header">
                <div class="dropdown-menu-header-inner bg-success">
                    <div class="menu-header-content">
                        <div class="avatar-icon-wrapper btn-hover-shine mb-2 avatar-icon-xl">
                            <div class="avatar-icon rounded">                                
                                <img id="my_avatar" src="{{asset($user->photo)}}" alt="Avatar 6">
                            </div>
                        </div>
                    <div><h5 class="menu-header-title">{{$user->username}}</h5><h6 class="menu-header-subtitle">You have a role of <span style="color:red;"> {{$user->role->name}}</span></h6></div>                        
                    </div>
                </div>
            </div>
            <div class="p-5 card-body">
                {{-- {{dd($errors)}} --}}
                <form action="{{route('user_setting')}}" method="post" id="setform" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">User ID <span class="require-field">*</span></label>
                                <div>
                                    <input type="text" class="form-control" name="name" placeholder="User ID" value="{{$user->name}}" required autocomplete="off" disabled/>
                                    
                                    <em id="userid-require-error" class="error invalid-feedback">Please enter your User ID</em>
                                    <em id="userid-unique-error" class="error invalid-feedback">The User ID is already stored in the database.</em>
                                </div>
                            </div>
        
                            <div class="form-group">
                                <label for="username">User Name</label>
                                <div>
                                    <input type="text" class="form-control" value="{{$user->username}}" name="username" placeholder="Username"/>
                                </div>
                            </div>
        
                            <div class="form-group">
                                <label for="email">User Email</label>
                                <div>
                                    <input type="text" class="form-control" id="set_email" name="email"  value="{{$user->email}}" placeholder="Email"/>
                                    <em id="set_email-type-error" class="error invalid-feedback">Please enter your correct email</em>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="photo">User Avatar</label>
                                <div>
                                    <input type="file" class="form-control" id="photo" name="photo"/>
                                    <em id="photo-type-error" class="error invalid-feedback">Please enter your correct email</em>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">

                            <div class="form-group">
                                <label for="role">Role</span></label>
                                <select class="form-control" name="role" id="role" disabled>
                                    @if ($user->role_id == 1)
                                        <option value="1" selected>Super Admin</option>
                                    @endif
                                    @if ($user->role_id == 2)
                                        <option value="2" selected>Admin</option>
                                    @endif
                                    @if($user->role_id == 3)
                                        <option value="3" selected>User</option> 
                                    @endif
                                    
                                         
                                </select>
                                <em id="role-require-error" class="error invalid-feedback">Please enter your role</em>
                            </div>
        
                            <div class="form-group" id="admin-wrapper">
                                <label for="admin">Admin</span></label>
                                <select class="form-control" name="admin" id="admin" disabled>
                                    @isset($admins)
                                        @foreach ($admins as $admin)
                                            @if ($admin->id == $user->parent_id)
                                                <option value="{{$admin->id}}" selected>{{$admin->name}}</option>                                            
                                            @endif
                                            
                                        @endforeach
                                    @endisset
                                </select>
                                <em id="admin-require-error" class="error invalid-feedback">Please enter admin</em>
                            </div>
        
                            <div class="form-group">
                                <label for="password">Current Password</span></label>
                                <input type="password" class="form-control" id="cur_password" name="cur_password" value="" placeholder="Current Password"/>
                                @if ($errors->has('cur_password'))
                                    <span class="invalid-feedback" role="alert" style="display:block">
                                        <strong><i>{{ $errors->first('cur_password') }}</i></strong>
                                    </span>
                                @endif
                                <em id="cur_password-require-error" class="error invalid-feedback">Please enter your current password</em>
                            </div>

                            <div class="form-group">
                                <label for="password">Password</span></label>
                                <input type="password" class="form-control" id="set_password" name="password" value="" placeholder="Password"/>
                                <em id="set_password-require-error" class="error invalid-feedback">Please enter your new password</em>
                                <em id="set_password-length-error" class="error invalid-feedback">Your password must be at least 8 characters long</em>
                            </div>
        
                            <div class="form-group">
                                <label for="confirm_password">Confirm password</span></label>
                                <div>
                                    <input type="password" class="form-control" id="set_confirm_password" value="" name="confirm_password" placeholder="Confirm password"/>
                                    <em id="set_confirm_password-require-error" class="error invalid-feedback">Please enter your confirm password</em>
                                    <em id="set_password-same-error" class="error invalid-feedback">Please enter the same password as above</em>
                                </div>
                            </div>                           
                        </div>
                        
                    </div>
                    <hr>
                    <div class="text-center">
                        <input type="button" id="setuser" class="btn-shadow-primary btn btn-primary btn-lg" value="Save">
                    </div>
                </form>
            </div>
            
        </div>
    </div>
</div>
@endsection
