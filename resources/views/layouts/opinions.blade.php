@if($opinions)
    <div class="testimonials">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>What People say <em>about us</em></h2>
                        <span>you also can send your opinion to us </span>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="owl-testimonials owl-carousel">

                        @foreach($opinions as $opinion)
                            <div class="testimonial-item">
                                <div class="inner-content">
                                    <h4>{{$opinion -> name}}</h4>
                                    <span>{{$opinion -> role}}</span>
                                    <p>"{{$opinion -> details}}"</p>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>

@endif
