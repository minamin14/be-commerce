<div class="top_catagory_area section-padding-80 clearfix">
    <div class="container">
        <div class="row justify-content-center">
            <!-- Single Catagory -->
            @foreach($tcs as $i => $tc)
            <div class="col-12 col-sm-6 col-md-4">
                <div class="single_catagory_area d-flex align-items-center justify-content-center bg-img" 
                style="background-image: url( {{$tc->cover}});margin: 10px;">
                    <div class="catagory-content">
                        <a href="{{url('/products-category')}}/{{$tc->name}}">{{$tc->name}}</a>
                    </div>
                </div>
            </div>
            <br>
            @endforeach
            <!-- Single Catagory -->
        </div>
    </div>
</div>