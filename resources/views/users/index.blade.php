@extends('layouts.bungkus')

@section('script')
        <!-- third party css -->
        <link href="{{ asset('assets/css/vendor/dataTables.bootstrap5.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets/css/vendor/responsive.bootstrap5.css') }}" rel="stylesheet" type="text/css">
@endsection

@section('content')
                <div class="content">
                    <!-- Topbar Start -->
                    <div class="navbar-custom">
                        <ul class="list-unstyled topbar-menu float-end mb-0">
                            
                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle nav-user arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <span class="account-user-avatar"> 
                                        <img src="{{ asset('assets/images/users/avatar-1.jpg') }}" alt="user-image" class="rounded-circle">
                                    </span>
                                    <span>
                                        <span class="account-user-name">Soeng Souy</span>
                                        <span class="account-position">Founder</span>
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated topbar-dropdown-menu profile-dropdown">
                                    <!-- item-->
                                    <div class=" dropdown-header noti-title">
                                        <h6 class="text-overflow m-0">Welcome !</h6>
                                    </div>

                                    <<!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="mdi mdi-logout me-1"></i>
                                        <span>Logout</span>
                                    </a>
                                </div>
                            </li>

                        </ul>
                        <button class="button-menu-mobile open-left">
                            <i class="mdi mdi-menu"></i>
                        </button>
                    </div>
                    <!-- end Topbar -->

                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Hyper</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
                                            <li class="breadcrumb-item active">Starter</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">User</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <a href="{{ route('users.create') }}" class="btn btn-info mb-8"><i class="mdi mdi-plus-circle-outline me-1"></i> Tambah User </a>
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="scroll-horizontal-preview">
                                                <table class="table table-striped table-centered mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Nama</th>
                                                            <th>Email</th>
                                                            <th>Hak Akses</th>
                                                            <th>Aksi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($data as $key => $user)
                                                        <tr>
                                                            <td class="table-user">{{ ++$i }}</td>
                                                            <td class="table-user">{{ $user->name }}</td>
                                                            <td class="table-user">{{ $user->email }}</td>
                                                            <td class="table-user">
                                                              @if(!empty($user->getRoleNames()))
                                                                @foreach($user->getRoleNames() as $v)
                                                                  <label class="badge badge-success">{{ $v }}</label>
                                                                @endforeach
                                                              @endif
                                                            </td>
                                                            <td class="table-action">
                                                                <a href="{{ route('users.edit',$user->id) }}" class="action-icon"><i class="mdi mdi-pencil"></i></a>
                                                                <form action="{{ route('users.destroy',$user->id) }}" method="POST">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                <button type="submit" class="action-icon"> <i class="mdi mdi-delete"></i></button>
                                                                </form>
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>                                                                                   
                                            </div> <!-- end preview-->                                        
                                           
                                        </div> <!-- end tab-content-->

                                    </div> <!-- end card body-->
                                </div> <!-- end card -->
                            </div><!-- end col-->
                        </div>
                        <!-- end row-->
                        
                    </div> <!-- container -->

                </div>
@endsection

@section('script')
        <!-- third party js -->
        <script src="{{ asset('assets/js/vendor/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('assets/js/vendor/dataTables.bootstrap5.js') }}"></script>
        <script src="{{ asset('assets/js/vendor/dataTables.responsive.min.js') }}"></script>
        <script src="{{ asset('assets/js/vendor/responsive.bootstrap5.min.js') }}"></script>
        <script src="{{ asset('assets/js/vendor/dataTables.buttons.min.js') }}"></script>
        <script src="{{ asset('assets/js/vendor/buttons.bootstrap5.min.js') }}"></script>
        <script src="{{ asset('assets/js/vendor/buttons.html5.min.js') }}"></script>
        <script src="{{ asset('assets/js/vendor/buttons.flash.min.js') }}"></script>
        <script src="{{ asset('assets/js/vendor/buttons.print.min.js') }}"></script>
        <script src="{{ asset('assets/js/vendor/dataTables.keyTable.min.js') }}"></script>
        <script src="{{ asset('assets/js/vendor/dataTables.select.min.js') }}"></script>
        <!-- third party js ends -->

        <!-- demo app -->
        <script src="{{ asset('assets/js/pages/demo.datatable-init.js') }}"></script>
        <!-- end demo js-->
@endsection
