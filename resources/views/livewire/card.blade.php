@if($showCode === false)
    <div class="card">
        <div class="card-content p-2 d-flex flex-row">
            <div>
                <img src="{{$thumb}}" alt="image" class="h-100">
            </div>
            <div class="ml-20">
                <div>
                    <h3>{{$title}}</h3>
                    @if($onSale === true)
                        <span class="badge inline bg-green fg-white">On sale</span>
                    @endif
                    <span class="badge inline bg-orange fg-white">{{$console}}</span>
                    <span class="badge inline bg-blue fg-white">{{$category}}</span>
                </div>
                <p class="w-50 text-just">
                    {{$desc}}
                </p>
            </div>
        </div>
    </div>
@else
    <xmp>
        <div class="card">
            <div class="card-content p-2 d-flex flex-row">
                <div>
                    <img src="{{$thumb}}" alt="image" class="h-100">
                </div>
                <div class="ml-20">
                    <div>
                        <h3>{{$title}}</h3>
                        @if($onSale === true)
                            <span class="badge inline bg-green fg-white">On sale</span>
                        @endif
                        <span class="badge inline bg-orange fg-white">{{$console}}</span>
                        <span class="badge inline bg-blue fg-white">{{$category}}</span>
                    </div>
                    <p class="w-50 text-just">
                        {{$desc}}
                    </p>
                </div>
            </div>
        </div>
    </xmp>
@endif
