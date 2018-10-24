@extends('layouts.frontend')
@php
use App\Content;
$content= Content::first();
@endphp
@section('title')
K.H. HABIB SYARIEF MUHAMMAD AL-AYDARUS
@endsection
@section('main')
<main id="main" class="fbq-content fbq-content--with-header" itemprop="mainContentOfPage" >
  <article id="post-2438" class="fbq-content-wrapper post-2438 page type-page status-publish hentry fbq_page_category-jabar-juara fbq_page_tag-jabar-juara fbq_page_tag-rindu" >
    <div class="fbq-section js-dynamic-navbar fbq-p-border-border" data-index="0">
      <div class="fbq-background fbq-background--fixed" data-type="image" data-parallaxspeed="0">
        <div class="fbq-background-wrapper">
          <div class="fbq-background-inner" style="background-image:url('{{asset('/img/'.$content->background)}}'); background-size:cover; background-position:center bottom; background-repeat:no-repeat;"></div>
        </div>
        <div class="fbq-background-overlay fbq-p-bg-bg" style="background-color:#ffffff; opacity:0.8;"></div>
      </div>
      <div class="fbq-section-wrapper fbq-middle-vertical" style="padding-bottom:0px;">
        <div class="fbq-container">
          <div class="fbq-row fbq-row--main">
            <div class="fbq-col-6">
              <div class="fbq-item js-item-box fbq-box fbq-right-align anmt-item anmt-fadeinl fbq-p-border-border js-box-fitted"  data-group="rk">
                <div class="fbq-background" data-type="image" data-parallaxspeed="0">
                  <div class="fbq-background-overlay " style="opacity:0.9;"></div>
                </div>
                <div class="fbq-box-inner"  >
                  <div class="fbq-box-content fbq-bottom-vertical" style="overflow-y:hidden;">
                    <div class="fbq-box-body" style="padding-bottom:30px;">
                      <div class="fbq-heading fbq-heading--plain fbq-item js-item-heading fbq-heading fbq-heading--plain fbq-right-align fbq-force-center-mobile">
                        <div class="fbq-heading-inner">
                          <h3 class="fbq-heading-text fbq-secondary-font fbq-p-border-border fbq-s-text-color" >{{$content->title_header}}</h3>
                        </div>
                      </div>
                      <div id="button-relawan" class="fbq-button fbq-button--fill fbq-button-hover--brand fbq-button-size--medium fbq-button-color--brand fbq-button--inline fbq-item js-item-button fbq-center-align" data-style="fill">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="fbq-col-6">
              <div class="fbq-item js-item-box fbq-box fbq-left-align fbq-p-border-border js-box-fitted"  data-group="rk">
                <div class="fbq-background" data-type="image" data-parallaxspeed="0">
                  <div class="fbq-background-overlay " style="opacity:0.9;"></div>
                </div>
                <div class="fbq-box-inner"  >
                  <div class="fbq-box-content fbq-middle-vertical" style="overflow-y:hidden;">
                    <div class="fbq-box-body" >
                      <div class="fbq-item js-item-image fbq-image fbq-center-align fbq-force-center-mobile anmt-item anmt-fadeinr">
                        <div class="fbq-image-container">
                          <div class="fbq-media-wrapper with-placeholder" >
                            <div class="fbq-media-wrapper-inner">
                              <div class="media-placeholder" style="width:1000px; padding-bottom:64.4%;"></div>
                              <img alt="" title="Habib Center" width="1000" height="644" data-full-width="1000" data-full-height="644" data-sizes="(max-width:1000px) 100vw, 1000px" data-src="{{asset('/img/'.$content->foto_profil)}}"  src="{{asset('/img/'.$content->foto_profil)}}" class="fbq-media-wrapper-image image-lazy-load"  />
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    @foreach($biografi as $data)
    <div class="fbq-main fbq-main--single">
      <div class="fbq-main-wrapper">
        <div id="rk" class="fbq-section js-dynamic-navbar fbq-p-border-border fbq-section--fit-height" style="height:100vh; line-height:100vh;" data-index="0" data-screen_percent="100">
          <div class="fbq-background" data-type="image" data-parallaxspeed="0">
            <div class="fbq-background-overlay fbq-p-bg-bg" style="opacity:1;"></div>
          </div>
          <div class="fbq-section-wrapper fbq-middle-vertical" >
            <div class="fbq-container">
              <div class="fbq-row fbq-row--main">
                <div class="fbq-col-4">
                  <div class="fbq-item js-item-box fbq-box fbq-left-align fbq-p-border-border" >
                    <div class="fbq-background" data-type="image" data-parallaxspeed="0">
                      <div class="fbq-background-overlay " style="opacity:0.9;"></div>
                    </div>
                    <div class="fbq-box-inner"  >
                      <div class="fbq-box-content fbq-middle-vertical" style="overflow-y:hidden;">
                        <div class="fbq-box-body" style="padding-bottom:30px;">
                          <div class="fbq-item js-item-image fbq-image fbq-center-align">
                            <div class="fbq-image-container">
                              <div class="fbq-media-wrapper with-placeholder" >
                                <div class="fbq-media-wrapper-inner">
                                  <div class="media-placeholder" style="width:1024px; padding-bottom:100%;"></div>
                                  <img alt="" title="" width="1024" height="1024" data-full-width="1024" data-full-height="1024" data-sizes="(max-width:1024px) 100vw, 1024px" data-src="{{asset('/assets/images/fotobiografi/'.$data->foto)}}" src="{{asset('/assets/images/fotobiografi/'.$data->foto)}}" class="fbq-media-wrapper-image image-lazy-load"  />
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="fbq-item js-item-share fbq-share fbq-share--icon fbq-center-align" data-style="icon">
                            
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="fbq-col-8">
                  <div class="fbq-heading fbq-heading--breakline fbq-item js-item-heading fbq-heading fbq-heading--breakline fbq-left-align">
                    <div class="fbq-heading-inner">
                      <h2 class="fbq-heading-text fbq-secondary-font fbq-p-border-border fbq-s-text-color" >{{$data->nama}}</h2>
                      <div class="fbq-heading-line fbq-p-border-bg after"></div>
                    </div>
                  </div>
                  <div class="fbq-item js-item-box fbq-box fbq-left-align fbq-p-border-border" >
                    <div class="fbq-background" data-type="image" data-parallaxspeed="0">
                      <div class="fbq-background-overlay " style="opacity:0.9;"></div>
                    </div>
                    <div class="fbq-box-inner"  >
                      <div class="fbq-box-content fbq-middle-vertical" style="max-width:95%; overflow-y:hidden;">
                        <div class="fbq-box-body" >
                          <div class="fbq-item js-item-text fbq-text fbq-justify-align fbq-primary-font">
                            <div class="fbq-row" style="margin:0 -30px;">
                              <div class="fbq-text-content fbq-col-12" style="padding:0 30px;">
                                <div class="fbq-text-content-inner">
                                  <b>
                                  {!!$data->deskripsi!!}                 
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="fbq-item js-item-divider fbq-divider fbq-divider--single fbq-center-align" data-style="single">
                    <div class="fbq-divider-line fbq-p-border-bg" style="width:100%; height:1px;">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
    </div>
  </article>
</main>

@endsection