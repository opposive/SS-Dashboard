@extends('layouts.app')

@section('content')
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->

    <div class="container-fluid" id="mydynamic">
        <div class="row card d-flex justify-content-between align-items-center p-3" style="border-radius: 10px">
            <form action="">
                <div class="row g-3">

                    <div class="col-md-9 d-flex align-items-center">
                        Channels
                    </div>
                    <div class="col-md-3 text-right">
                        <button type="submit" class="btn btn-primary">Add Answerset</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="row g-3 card mt-3" style="border-radius: 10px">
            <div class="container p-3">
                <div class="row">
                    <div class="col-md-1 d-flex justify-content-center align-items-center"><i class="fas fa-cube fa-3x" aria-hidden="true"></i></div>
                    <div class="col-md-10"><h3 class="hide-menu">Icon</h3><p class="hide-menu">3 users assigned</p></div>
                </div>


            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End footer -->
    <!-- ============================================================== -->
@endsection
