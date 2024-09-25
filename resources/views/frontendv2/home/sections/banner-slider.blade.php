 <!-- Slider -->
 <div class="tf-slideshow slider-home-2 slider-effect-fade position-relative">
     <div class="swiper tf-sw-slideshow" data-preview="1" data-tablet="1" data-mobile="1" data-centered="false" data-space="0"
         data-loop="true" data-auto-play="true" data-delay="2000" data-speed="1000">
         <div class="swiper-wrapper">

             @foreach ($slider as $slider)
                 <div class="swiper-slide" lazy="true">
                     <div class="wrap-slider">
                         <img srcset="{{ $slider->banner }}" class="lazyload" src="{{ $slider->banner }}"
                             alt="{{ $slider->description }}">
                         <div class="box-content">
                             <div class="container">
                                 <h1 class="fade-item fade-item-1">{!! $slider->title !!} <br> {!! $slider->subtitle !!}
                                 </h1>
                                 <p class="fade-item fade-item-2">{!! $slider->description !!}</p>
                                 <a href="{{ $slider->btn_url }}"
                                     class="fade-item fade-item-3 tf-btn btn-fill animate-hover-btn btn-xl radius-3"><span>Shop
                                         collection</span><i class="icon icon-arrow-right"></i></a>
                             </div>
                         </div>
                     </div>
                 </div>
             @endforeach
         </div>
     </div>
     <div class="wrap-pagination sw-absolute-2">
         <div class="container">
             <div class="sw-dots sw-pagination-slider"></div>
         </div>
     </div>
 </div>
 <!-- /Slider -->
