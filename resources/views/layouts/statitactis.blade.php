@if($statitctis)
    <div class="fun-facts">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="left-content">
                        {!! $statitctis -> text !!}
                    </div>
                </div>
                <div class="col-md-6 align-self-center">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="count-area-content">
                                <div class="count-digit">{{$statitctis -> count1_value}}</div>
                                <div class="count-title">{{$statitctis -> count1_txt}}</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="count-area-content">
                                <div class="count-digit">{{$statitctis -> count2_value}}</div>
                                <div class="count-title">{{$statitctis -> count2_txt}}</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="count-area-content">
                                <div class="count-digit">{{$statitctis -> count3_value}}</div>
                                <div class="count-title">{{$statitctis -> count3_txt}}</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="count-area-content">
                                <div class="count-digit">{{$statitctis -> count4_value}}</div>
                                <div class="count-title">{{$statitctis -> count4_txt}}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
