@extends('layouts.app')
@section('content')

@include('layouts.header')

<div class="row container-fluid ">
    <div class="col-lg-9 col-md-9 col-sm-12 py-5">
        
        {{-- Subscribe Form --}}
        <div class="dm_sub_form dm_bg_primary">
            <div class="row">
                <div class="col-9">
                    <input type="text" class="form-control dm_bg_primary dm_color_default" placeholder="Keywords ..... " aria-label="Phone">
                </div>
                
                <div class="col-3">
                    <button type="submit" class="dm_btn_secondary float-end">Search</button>
                </div>
            </div>
        </div>


        {{-- search Result --}}

        <div class="dm_search_content mx-3 my-5">
            <div class="row">
                <div class="col-12">
                    <a class="badge dm_bg_primary dm_color_default p-2 dm_padauk text-decoration-none" href="">Blog Type</a>
                    <a class=" dm-padauk fs-3 fw-bolder text-decoration-none lh-sm text-dark" href="">8 Advantages of Ecommerce to your Business in Myanmar</a>
                    <hr>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <a class="badge dm_bg_primary dm_color_default p-2 dm_padauk text-decoration-none" href="">Blog Type</a>
                    <a class=" dm-padauk fs-3 fw-bolder text-decoration-none lh-sm text-dark" href="">8 Advantages of Ecommerce to your Business in Myanmar</a>
                    <hr>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <a class="badge dm_bg_primary dm_color_default p-2 dm_padauk text-decoration-none" href="">Blog Type</a>
                    <a class=" dm-padauk fs-3 fw-bolder text-decoration-none lh-sm text-dark" href="">8 Advantages of Ecommerce to your Business in Myanmar</a>
                    <hr>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <a class="badge dm_bg_primary dm_color_default p-2 dm_padauk text-decoration-none" href="">Blog Type</a>
                    <a class=" dm-padauk fs-3 fw-bolder text-decoration-none lh-sm text-dark" href="">8 Advantages of Ecommerce to your Business in Myanmar</a>
                    <hr>
                </div>
            </div>
            
        </div>
        
    </div>
    <div class="col-lg-3 col-md-3 col-sm-12 py-5 ">
        
        {{-- sidebar --}}
        @include('layouts.sidebar')
        
    </div>
    
    
</div>
</div>

@endsection