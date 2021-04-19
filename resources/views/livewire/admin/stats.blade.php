<div id="{{str_replace(' ', '', $title)}}" class="d-flex flex-column flex-justify-center flex-align-center">
    <h3 class="text-cap">{{$title}}</h3>
    @if($type === 'percent')
        <div data-role="donut" data-value="{{($sub_value/$base_value)*100}}"
             data-hole=".6" data-stroke="#f5f5f5" data-fill="#9C27B0"
             data-animate="10"></div>
    @else
        <div style="width: 100px; height: 100px">
            <p class="w-100 text-center">{{$base_value}}</p>
        </div>
    @endif
</div>
