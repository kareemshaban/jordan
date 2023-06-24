@if($clients)
    <div class="partners">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-partners owl-carousel">

                        @foreach($clients as $client)
                            <div class="partner-item">
                                <img src="{{'images/Clients' . '/' . $client -> img}}" title="{{$loop -> index + 1}}" alt="{{$loop -> index + 1}}">
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

@endif
