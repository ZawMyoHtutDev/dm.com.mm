@extends('layouts.app')
@section('content')

@include('layouts.header')

<div class="row container-fluid ">
    <div class="col-lg-9 col-md-9 col-sm-12 py-5">
        
        {{-- Blog Grid --}}
        <div class="card border-0 m-3 ">
            {{-- Image --}}
            <img src="{{asset('img/blog.jpg')}}" class="card-img-top dm_blog_img dm_rounded_default" alt="">
            <div class="card-body pb-5">
                
                {{-- Category --}}
                <div class="my-3">
                    <a class="badge dm_bg_secondary dm_color_default p-2 dm_padauk text-decoration-none" href="">Ecommerce</a>
                    <a class="badge dm_bg_secondary dm_color_default p-2 dm_padauk text-decoration-none" href="">Website Development</a>
                    <a class="badge dm_bg_secondary dm_color_default p-2 dm_padauk text-decoration-none" href="">Business</a>
                </div>
                
                
                {{-- Title --}}
                <a class="card-title dm-padauk fs-2 fw-bolder text-decoration-none lh-sm text-dark" href="">8 Advantages of Ecommerce to your Business in Myanmar</a>
                
                {{-- Content Data --}}
                <div class="card-text dm_blog_content dm_padauk">
                    
                    
            
                </div>
                {{-- Content End --}}
                
            </div>
        </div>
        
        {{-- Meta and other --}}
        <div class="card shadow border-0 m-3 dm_rounded_default">
            <div class="card-body ">
                <h4 class="fw-bolder">Tags</h4>
                {{-- Category --}}
                <div class="my-3">
                    <a class="badge dm_bg_primary dm_color_default p-2 dm_padauk text-decoration-none" href="">Ecommerce</a>
                    <a class="badge dm_bg_primary dm_color_default p-2 dm_padauk text-decoration-none" href="">Website Development</a>
                    <a class="badge dm_bg_primary dm_color_default p-2 dm_padauk text-decoration-none" href="">Business</a>
                </div>
                <hr>
                <a href="" class="btn btn-light dm_btn_primary">Comment</a>
            </div>
        </div>
        
        {{-- End Meta --}}
        
        
    </div>
    <div class="col-lg-3 col-md-3 col-sm-12 py-5 ">
        
        {{-- sidebar --}}
        @include('layouts.sidebar')
        
    </div>
    
    
</div>
</div>

@endsection