@extends('layouts.app')

@section('content')
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->

            <div class="container-fluid " id="mydynamic">
                <div class="row card p-3 g-3">
                    <form action="">
                        <div class="row g-3">
                            <div class="col d-flex justify-content-center align-items-center">
                                Answerset
                            </div>
                            <div class="col">
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="col">
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="col">
                                <button type="submit" class="btn btn-primary">Add Answerset</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="row g-3 card">
                    <div class="container p-3">
                        <div class="row gx-5 p-3">
                            <div class="col d-flex justify-content-center align-items-center">
                                <div class="container border border-primary p-2">
                                    <div class="row" style="height: 20px">
                                        <i class="fas fa-file-alt" aria-hidden="true" style="height: 100%;width:20px;"></i>
                                    </div>
                                    <div class="row">
                                        <p>မငျ်ဂလာပါခငျဗြာ ... Samsung Myanmar Facebook Page ရဲ့ Chat Box မှ လာရောကျမေးမွနျးသူ အနညျးငယျမြားပွားနတေဲ့အတှကျ Reply လေးကွန့ျကွာသှားတာမြိုးဖွဈနိုငျပါတယျခငျဗြာ။အဆငျမပွမှေုဖွဈသှားတဲ့အတှကျ အနူးအညှှတျတောငျးပနျအပျပါတယျခငျဗြာ။</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col d-flex justify-content-center align-items-center">
                                <div class="container border border-primary p-2">
                                    <div class="row" style="height: 20px">
                                        <i class="fas fa-file-alt" aria-hidden="true" style="height: 100%;width:20px;"></i>
                                    </div>
                                    <div class="row">
                                        <p>မငျ်ဂလာပါ ခငျဗြာ ... အားလုံးဘေးကငျးလုံခွုံစှာ ရှိနမေယျလို့ မြှောျလင့ျပါတယျခငျဗြာ။</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->

@endsection
