@extends('layouts.app')

@section('subtitle')
    <div class="page-title-heading">
        <div class="page-title-icon">
            <i class="pe-7s-users icon-gradient bg-amy-crisp">
            </i>
        </div>
        <div>USER MANAGEMENT</div>                            
    </div>
    <div class="page-title-actions">
        <div class="d-inline-block">
            <button type="button" id="modalbutton" class="btn-shadow btn btn-info">
                <span class="btn-icon-wrapper pr-2 opacity-7">
                    <i class="fa fa-user-plus fa-w-20"></i>
                </span>
                Add User
            </button>
        </div>
    </div>
    
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <table style="width: 100%;" id="usertable" class="table table-hover table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>User ID</th>
                            <th>User Name</th>
                            <th>User Email</th>
                            <th>Role</th>
                            <th>Parent</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @isset($users)
                            @php
                                $n = 0;
                            @endphp
                            @forelse ($users as $user)
                                @php
                                    $n += 1;
                                @endphp                          
                                    <tr>
                                        <td>{{$n}}</td>
                                        <td>{{$user->name}}</td>
                                        <td>
                                            {{$user->username}}
                                        </td>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->role->name}}</td>
                                        @if ($user->parent_id != null)
                                            <td>{{$user->my_admin->name}}</td>
                                        @else
                                            <td>---</td>
                                        @endif
                                        <td>
                                            <a href="{{ route('useredit', ['id' => $user->id]) }}" class="text-primary" title="Edit">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            &nbsp;&nbsp;&nbsp;
                                            <a href="{{ route('userdelete', ['id' => $user->id]) }}" class="text-danger userd_elete" title="Delete">
                                                <i class="fas fa-trash-alt"></i>
                                            </a>
                                        </td>
                                    </tr>
                            @empty
                                <p>There is no users.</p>
                            @endforelse
                        @endisset                        
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>User ID</th>
                            <th>User Name</th>
                            <th>User Email</th>
                            <th>Role</th>
                            <th>Parent</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
@if ($errors->has('exist'))
    <div class="alert alert-danger alert-dismissible fade show" id="my_alert">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>{{ $errors->first('exist') }}</strong>
    </div>    
@endif
@endsection

@section('modal')
    <!-- Modal -->
    <div class="modal fade" id="adduser" tabindex="-1" role="dialog" aria-labelledby="adduserLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center" style="display:block;">
                    <h5 class="modal-title" id="adduserLabel">Add User</h5>
                    {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button> --}}
                </div>
                <div class="modal-body">
                    <form id="adduserForm">
                        @csrf
                        <div class="form-group">
                            <label for="name">User ID <span class="require-field">*</span></label>
                            <div>
                                <input type="text" value="" class="form-control" id="userid" name="name" placeholder="User ID" required autocomplete="off"/>                            
                                <em id="userid-require-error" class="error invalid-feedback">Please enter your User ID</em>
                                <em id="userid-unique-error" class="error invalid-feedback">The User ID is already stored in the database.</em>
                            </div>
                        </div>
    
                        <div class="form-group">
                            <label for="username">User Name</label>
                            <div>
                                <input type="text" class="form-control" id="username" name="username" placeholder="Username"/>
                            </div>
                        </div>
    
                        <div class="form-group">
                            <label for="email">User Email</label>
                            <div>
                                <input type="text" class="form-control" id="email" name="email" placeholder="Email"/>
                                <em id="email-type-error" class="error invalid-feedback">Please enter your correct email</em>
                            </div>
                        </div>
    
                        <div class="form-group">
                            <label for="role">Role <span class="require-field">*</span></label>
                            <select class="form-control" id="role" required>
                                <option value="">Please select...</option>
                                <option value="2">Admin</option>
                                <option value="3">User</option>      
                            </select>
                            <em id="role-require-error" class="error invalid-feedback">Please enter your role</em>
                        </div>
    
                        <div class="form-group" id="admin-wrapper">
                            <label for="admin">Admin <span class="require-field">*</span></label>
                            <select class="form-control" id="admin">
                                <option value="">Please select...</option>
                                @isset($admins)
                                    @foreach ($admins as $admin)
                                        <option value="{{$admin->id}}">{{$admin->name}}</option>
                                    @endforeach
                                @endisset
                                
                            </select>
                            <em id="admin-require-error" class="error invalid-feedback">Please enter admin</em>
                        </div>
    
                        <div class="form-group">
                            <label for="password">Password <span class="require-field">*</span></label>
                            <input type="password" class="form-control" id="password" name="password" value="12345678" placeholder="Password" required/>
                            <em id="password-require-error" class="error invalid-feedback">Please enter your password</em>
                            <em id="password-length-error" class="error invalid-feedback">Your password must be at least 8 characters long</em>
                        </div>
    
                        <div class="form-group">
                            <label for="confirm_password">Confirm password <span class="require-field">*</span></label>
                            <div>
                                <input type="password" class="form-control" id="confirm_password" value="12345678" name="confirm_password" placeholder="Confirm password" required/>
                                <em id="confirm_password-require-error" class="error invalid-feedback">Please enter your confirm password</em>
                                <em id="password-same-error" class="error invalid-feedback">Please enter the same password as above</em>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" id="close" data-dismiss="modal">Close</button>
                    <button type="button" id="user-submit" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </div>
    {{-- Alert --}}

@endsection
@section('script')
<script>
$(document).ready(function(){
    setTimeout(function(){
        $("#my_alert").alert("close");
    }, 5000);
})
</script>
@endsection
