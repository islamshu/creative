
@foreach ( $projects as $item )
<div class="portfolio-item col-lg-4 col-md-12 wow slideInUp" id=""  >
    <div class="card">
        <div class="item-img">
            <img src="{{ asset('uploads/'.$item->image) }}" alt="">
        </div>
        <div class="item-text">
            <h6 class="d-inline float-right">{{ $item->title }}  </h6>
            <div class="item-links d-inline float-left">
                @if($item->url != null)
                <a href="{{ $item->url }}" target="_blank" class="website"><i class="fa fa-globe"></i></a>
                @endif
                @if($item->behance_url != null)
                <a href="{{ $item->behance_url }}" target="_blank" class="behance"><i class="fa fa-behance"></i></a>
                @endif
            </div>
        </div>
    </div>
  
    
</div>

@endforeach
    

