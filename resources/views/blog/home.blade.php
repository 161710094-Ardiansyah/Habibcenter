

@extends('layouts.frontend')
@php
use App\Content;
$content= Content::first();
@endphp
@section('title')
Home
@stop
@section('main')
<main id="main" class="fbq-content fbq-content--with-header" itemprop="mainContentOfPage" >
  <article id="post-2273" class="fbq-content-wrapper post-2273 page type-page status-publish has-post-thumbnail hentry fbq_page_category-jabar-juara fbq_page_tag-jabar-juara fbq_page_tag-jawa-barat fbq_page_tag-pilkada fbq_page_tag-ridwan-kamil fbq_page_tag-rindu fbq_page_tag-uu-ruzhanul-ulum" >
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
                        <a href="hitungcepat/index.html" class="btnx " style="border-radius:40px; border-width:1px;" target="_self">
                        <i class="twf fbq-icon--before twf-child"></i>
                        <span class="fbq-button-label">Hitung Cepat KPU</span>
                        </a>
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
                              <img alt="Habib center" title="Habib center" width="1000" height="644" data-full-width="1000" data-full-height="644" data-sizes="(max-width:1000px) 100vw, 1000px" src="{{asset('/img/'.$content->foto_profil)}}" class="fbq-media-wrapper-image image-lazy-load"  />
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
    <div class="fbq-main fbq-main--single">
      <div class="fbq-main-wrapper">
        <div id="beranda" class="fbq-section js-dynamic-navbar fbq-p-border-border fbq-dark-scheme" data-index="0" data-scheme="dark">
          <div class="fbq-background fbq-background--fixed" data-type="image" data-parallaxspeed="0">
            <div class="fbq-background-wrapper">
              <div class="fbq-background-inner" style="background-image:url('wp-content/uploads/2018/02/1.jpg'); background-size:cover; background-position:center top; background-repeat:no-repeat;"></div>
            </div>
            <div class="fbq-background-overlay fbq-p-bg-bg" style="background-color:#4a9e51; opacity:1;"></div>
          </div>
          <div class="fbq-section-wrapper fbq-middle-vertical" >
            <div class="fbq-container">
              <div class="fbq-row fbq-row--main">
                <div class="fbq-col-12">
                  <div class="fbq-item js-item-box fbq-box fbq-center-align anmt-item anmt-fadeinu fbq-p-border-border js-box-fitted"  data-group="head">
                    <div class="fbq-background" data-type="image" data-parallaxspeed="0">
                      <div class="fbq-background-overlay " style="opacity:0.9;"></div>
                    </div>
                    <div class="fbq-box-inner"  >
                      <div class="fbq-box-content fbq-bottom-vertical" style="overflow-y:hidden;">
                        <div class="fbq-box-body" >
                          <div class="fbq-heading fbq-heading--plain fbq-item js-item-heading fbq-heading fbq-heading--plain fbq-center-align">
                            <div class="fbq-heading-inner">
                              <h2 class="fbq-heading-text fbq-secondary-font fbq-p-border-border fbq-s-text-color" >{{$content->title_1}}</h2>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="fbq-item js-item-box fbq-box fbq-center-align anmt-item anmt-fadein fbq-p-border-border" >
                    <div class="fbq-background" data-type="image" data-parallaxspeed="0">
                      <div class="fbq-background-overlay " style="opacity:0.9;"></div>
                    </div>
                    <div class="fbq-box-inner"  >
                      <div class="fbq-box-content fbq-middle-vertical" style="overflow-y:hidden;">
                        <div class="fbq-box-body" >
                          <div class="fbq-item js-item-text fbq-text fbq-center-align fbq-primary-font" style="padding-top:30px;">
                            <div class="fbq-row" style="margin:0 -30px;">
                              <div class="fbq-text-content fbq-col-12" style="padding:0 30px;">
                                <div class="fbq-text-content-inner">
                                  <span style="color: rgb(255, 255, 255);">
                                  {{$content->deskripsi_1}}
                                  </span>                 
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
        <div class="fbq-section js-dynamic-navbar fbq-p-border-border fbq-section--fit-height" style="height:100vh; line-height:100vh;" data-index="1" data-screen_percent="100">
          <div class="fbq-background" data-type="image" data-parallaxspeed="0">
            <div class="fbq-background-overlay fbq-p-bg-bg" style="opacity:0.9;"></div>
          </div>
          <div class="fbq-section-wrapper fbq-middle-vertical" style="padding-top:20px; padding-bottom:20px;">
            <div class="fbq-container">
              <div class="fbq-row fbq-row--main fbq-row--40">
                <div class="fbq-col-5">
                  <div class="fbq-item js-item-box fbq-box fbq-left-align fbq-p-border-border" >
                    <div class="fbq-background" data-type="image" data-parallaxspeed="0">
                      <div class="fbq-background-overlay " style="opacity:0.9;"></div>
                    </div>
                    <div class="fbq-box-inner"  >
                      <div class="fbq-box-content fbq-middle-vertical" style="overflow-y:hidden;">
                        <div class="fbq-box-body" >
                          <div class="fbq-item js-item-space fbq-space fbq-tablet-landscape-hidden fbq-tablet-hidden fbq-mobile-hidden fbq-force-center-mobile" style="height:80px;"></div>
                          <div class="fbq-item js-item-image fbq-image fbq-center-align anmt-item anmt-fadeinl">
                            <div class="fbq-image-container">
                              <div class="fbq-media-wrapper with-placeholder" >
                                <div class="fbq-media-wrapper-inner">
                                  <div class="media-placeholder" style="width:600px; padding-bottom:33.333333333333%;"></div>
                                  <img alt="" title="Rindu Jabar Juara" width="600" height="200" data-full-width="600" data-full-height="200" data-sizes="(max-width:600px) 100vw, 600px" data-src="{{asset('assets/wp-content/uploads/2018/02/index3.png')}}"  src="{{asset('assets/wp-content/uploads/2018/02/index3.png')}}" class="fbq-media-wrapper-image image-lazy-load"  />
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="fbq-item js-item-blueprintblock fbq-blueprintblock anmt-item anmt-fadeinr" style="padding-bottom:30px;">
                            <div class="fbq-row">
                              <div class="fbq-col-6">
                                <div class="fbq-item js-item-box fbq-box fbq-left-align fbq-p-border-border" >
                                  <div class="fbq-background" data-type="image" data-parallaxspeed="0">
                                    <div class="fbq-background-overlay " style="opacity:0.9;"></div>
                                  </div>
                                  <div class="fbq-box-inner"  >
                                    <div class="fbq-box-content fbq-middle-vertical" style="overflow-y:hidden;">
                                      <div class="fbq-box-body" style="padding-top:10px; padding-bottom:10px;">
                                        <div class="fbq-item js-item-image fbq-image fbq-center-align" >
                                          <div class="fbq-image-container">
                                            <div class="fbq-media-wrapper with-placeholder" >
                                              <a class="fbq-media-wrapper-inner" href="{{asset('assets/wp-content/uploads/2018/02/index4.jpg')}}" target="_self">
                                                <div class="media-placeholder" style="width:1024px; padding-bottom:100%;"></div>
                                                <img alt="" title="Rindu Jabar Juara" width="1024" height="1024" data-full-width="1024" data-full-height="1024" data-sizes="(max-width:1024px) 100vw, 1024px" data-src="{{asset('assets/wp-content/uploads/2018/02/index4.jpg')}}" src="{{asset('assets/wp-content/uploads/2018/02/index4.jpg')}}" class="fbq-media-wrapper-image image-lazy-load"  />
                                              </a>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="fbq-col-6">
                                <div class="fbq-item js-item-box fbq-box fbq-left-align fbq-p-border-border" >
                                  <div class="fbq-background" data-type="image" data-parallaxspeed="0">
                                    <div class="fbq-background-overlay " style="opacity:0.9;"></div>
                                  </div>
                                  <div class="fbq-box-inner"  >
                                    <div class="fbq-box-content fbq-middle-vertical" style="overflow-y:hidden;">
                                      <div class="fbq-box-body" style="padding-top:10px; padding-bottom:10px;">
                                        <div class="fbq-item js-item-image fbq-image fbq-center-align" >
                                          <div class="fbq-image-container">
                                            <div class="fbq-media-wrapper with-placeholder" >
                                              <a class="fbq-media-wrapper-inner" href="{{asset('assets/wp-content/uploads/2018/02/index5.jpg')}}" target="_self">
                                                <div class="media-placeholder" style="width:1024px; padding-bottom:100%;"></div>
                                                <img alt="" title="Rindu Jabar Juara" width="1024" height="1024" data-full-width="1024" data-full-height="1024" data-sizes="(max-width:1024px) 100vw, 1024px" data-src="{{asset('assets/wp-content/uploads/2018/02/index5.jpg')}}" src="{{asset('assets/wp-content/uploads/2018/02/index5.jpg')}}" class="fbq-media-wrapper-image image-lazy-load"  />
                                              </a>
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
                  </div>
                  <div id="accordion-landing" class="fbq-item js-item-accordion fbq-accordion fbq-accordion--fill fbq-left-align fbq-force-center-mobile anmt-item anmt-fadeinl minimal-plus" data-style="fill">
                    @php
                    $listhome = App\Listhome::all();
                    @endphp 
                    @foreach($listhome as $data)
                    <div class="fbq-accordion-panel fbq-p-border-border"  data-index="1">
                      <a href="#" class="fbq-accordion-heading fbq-p-text-color" style="background-color:#e3e3e3;" data-index="1">
                      <span class="fbq-accordion-title fbq-secondary-font">{{$data->nama}}</span>
                      </a>
                      <div class="fbq-accordion-body fbq-side-padding" style="padding-top:20px;" data-index="1">
                        <div class="fbq-background" data-type="image" data-parallaxspeed="0">
                          <div class="fbq-background-wrapper">
                            <div class="fbq-background-inner" style="background-image:url('wp-content/uploads/2018/02/poly-bg.jpg'); background-size:cover; background-position:center center; background-repeat:repeat;"></div>
                          </div>
                          <div class="fbq-background-overlay " style="background-color:#4a9e51; opacity:0.75;"></div>
                        </div>
                        <div class="fbq-item js-item-text fbq-text fbq-justify-align fbq-primary-font">
                          <div class="fbq-row" style="margin:0 -30px;">
                            <div class="fbq-text-content fbq-col-12" style="padding:0 30px;">
                              <div class="fbq-text-content-inner">
                                <span style="color: rgb(255, 255, 255);">{{$data->deskripsi}}</span><br>                  
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    @endforeach
                    <div class="fbq-accordion-panel fbq-p-border-border"  data-index="2">
                      <div class="fbq-accordion-body fbq-side-padding" style="padding-top:20px;" data-index="2">
                        <div class="fbq-background" data-type="image" data-parallaxspeed="0">
                          <div class="fbq-background-wrapper">
                            <div class="fbq-background-inner" style="background-image:url('wp-content/uploads/2018/02/poly-bg.jpg'); background-size:cover; background-position:center center; background-repeat:repeat;"></div>
                          </div>
                          <div class="fbq-background-overlay " style="background-color:#4a9e51; opacity:0.75;"></div>
                        </div>
                        <div class="fbq-item js-item-text fbq-text fbq-justify-align fbq-primary-font">
                          <div class="fbq-row" style="margin:0 -30px;">
                            <div class="fbq-text-content fbq-col-12" style="padding:0 30px;">
                              <div class="fbq-text-content-inner">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="fbq-accordion-panel fbq-p-border-border"  data-index="3">
                      <div class="fbq-accordion-body fbq-side-padding" style="padding-top:20px;" data-index="3">
                        <div class="fbq-background" data-type="image" data-parallaxspeed="0">
                          <div class="fbq-background-wrapper">
                            <div class="fbq-background-inner" style="background-image:url('wp-content/uploads/2018/02/poly-bg.jpg'); background-size:cover; background-position:center center; background-repeat:repeat;"></div>
                          </div>
                          <div class="fbq-background-overlay " style="background-color:#4a9e51; opacity:0.75;"></div>
                        </div>
                        <div class="fbq-item js-item-text fbq-text fbq-justify-align fbq-primary-font">
                          <div class="fbq-row" style="margin:0 -30px;">
                            <div class="fbq-text-content fbq-col-12" style="padding:0 30px;">
                              <div class="fbq-text-content-inner">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="fbq-col-7">
                  <div class="fbq-item js-item-box fbq-box fbq-left-align fbq-p-border-border" >
                    <div class="fbq-background" data-type="image" data-parallaxspeed="0">
                      <div class="fbq-background-overlay " style="opacity:0.9;"></div>
                    </div>
                    <div class="fbq-box-inner"  >
                      <div class="fbq-box-content fbq-middle-vertical" style="overflow-y:hidden;">
                        <div class="fbq-box-body" style="padding-bottom:10px;">
                          <div class="fbq-heading fbq-heading--underline fbq-item js-item-heading fbq-heading fbq-heading--underline fbq-left-align fbq-force-center-mobile anmt-item anmt-fadeinl" >
                            <div class="fbq-heading-inner">
                              <h2 class="fbq-heading-text fbq-secondary-font fbq-p-border-border fbq-s-text-color" ><span style="color: rgb(52, 127, 75);">{{$content->title_2}}</span></h2>
                            </div>
                          </div>
                          <div class="fbq-item js-item-text fbq-text fbq-justify-align fbq-primary-font">
                            <div class="fbq-row" style="margin:0 -15px;">
                              <div class="fbq-text-content fbq-col-6 anmt-item anmt-fadeinr" style="padding:0 15px;">
                                <div class="">
                                  {{$content->deskripsi_2}}                 
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="fbq-item js-item-divider fbq-divider fbq-divider--single fbq-center-align" data-style="single">
                            <div class="fbq-divider-line fbq-p-border-bg" style="width:100%; height:1px;">
                            </div>
                          </div>
                          <div class="fbq-item js-item-video fbq-video fbq-video--standard fbq-center-align" style="padding-top:8px;" >
                            <div class="fbq-video-inner" style="max-width:1280px;">
                              <div class="fbq-video-content" >
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/U1er2MQP8uI" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>      
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="fbq-row fbq-row--main">
                <div class="fbq-col-12">
                  <div id="home-post" class="fbq-item js-item-blog fbq-blog fbq-blog--plain fbq-left-align fbq-entries fbq-entries--grid fbq-entries--plain medium"  data-style="plain" data-layout="grid">
                    <ul class="fbq-filter-bar fbq-center-align fbq-secondary-font">
                      <li class="fbq-filter-list fbq-filter-list--all">
                        @php
                        $artikel = App\Kategori::all();
                        @endphp
                        @foreach($artikel as $data)
                        <a href="#" class="js-filter-list fbq-p-text-color active" data-filter="{{$data->judul}}">{{$data->nama}}</a>
                        @endforeach
                      </li>
                    </ul>
                    <div class="fbq-entries-content" style="margin:0 -15px;">
                      @php
                      $artikel = App\Artikel::with('Kategori')->get();
                      @endphp
                      @foreach($artikel as $data)
                      <article class="fbq-entry fbq-col-3 post-2502 post type-post status-publish format-standard has-post-thumbnail hentry category-aktual category-artikel category-jabar-juara tag-jabar-juara tag-jawa-barat tag-pilkada tag-ridwan-kamil tag-rindu tag-uu-ruzhanul-ulum" style="margin-bottom:30px; padding:0 15px;" data-filter="aktual, artikel, jabar-juara">
                        <div class="fbq-entry-inner fbq-p-border-border anmt-item anmt-fadeinu">
                          <div class="fbq-entry-header" >
                            <div class="fbq-media-wrapper with-placeholder anmt-image-slowzoom" >
                              <a class="fbq-media-wrapper-inner" href="{{url('artikel/show/'.$data->id)}}" target="_blank">
                                <div class="media-placeholder" style="width:768px; padding-bottom:56.25%;"></div>
                                <img alt="" title="151231_Panen Berkebun (363)_resize" width="768" height="512" data-full-width="2016" data-full-height="1344" data-sizes="(max-width:767px) 100vw, (max-width:960px) 50vw, 25vw" data-src="{{asset('/assets/images/fotoartikel/'.$data->foto)}}" src="{{asset('/assets/images/fotoartikel/'.$data->foto)}}" class="fbq-media-wrapper-image image-lazy-load"  />
                              </a>
                            </div>
                          </div>
                          <div class="fbq-entry-body" style="background-color:rgba(244,244,244,1); padding:15px;">
                            <div class="fbq-entry-body-inner">
                              <div class="fbq-entry-body-content">
                                <div class="fbq-entry-meta fbq-custom_b-font">
                                  <div class="fbq-entry-category fbq-p-brand-color">
                                    <a  href="{{url('filter/kategori/'.$data->kategori->id)}}" target="_self">{{$data->kategori->nama}}</a>               
                                  </div>
                                  <div class="fbq-entry-tag">
                                    @foreach(json_decode($data->tag) as $id)
                                    <i class="twf twf-bookmark-o"></i>
                                    <a href="{{url('filter/tag/'.$id)}}" rel="tag">{{App\Tag::find($id)->nama}}</a>
                                    @endforeach                  
                                  </div>
                                </div>
                                <h4 class="fbq-entry-title fbq-custom_b-font fbq-s-text-color" style="letter-spacing:2px; text-transform:uppercase; font-size:14px;">
                                  <a href="{{url('artikel/show/'.$data->id)}}">
                                  <a class="posts-title" href="/blog/{{$data->slug}}">{{$data->judul}}</a>
                                </h4></a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </article>
                      @endforeach
                    </div>
                    <div class="js-load-more fbq-pagination fbq-pagination--click fbq-button fbq-button-size--medium fbq-button--full">
                      <input type="hidden" value="{&quot;post_type&quot;:&quot;post&quot;,&quot;post_taxonomy&quot;:&quot;category&quot;,&quot;post_tag&quot;:&quot;post_tag&quot;,&quot;index&quot;:3,&quot;style&quot;:&quot;plain&quot;,&quot;layout&quot;:&quot;grid&quot;,&quot;components&quot;:[&quot;media&quot;,&quot;category&quot;,&quot;title&quot;,&quot;tag&quot;],&quot;name&quot;:&quot;&quot;,&quot;no_of_items&quot;:&quot;4&quot;,&quot;list_thumbnail_size&quot;:&quot;medium&quot;,&quot;order_by&quot;:&quot;post_date&quot;,&quot;order&quot;:&quot;desc&quot;,&quot;query_offset&quot;:&quot;&quot;,&quot;featured_media&quot;:&quot;auto&quot;,&quot;image_size&quot;:&quot;medium_large&quot;,&quot;image_ratio&quot;:&quot;16x9&quot;,&quot;image_lazy_load&quot;:true,&quot;image_hover&quot;:&quot;slowzoom&quot;,&quot;no_of_columns&quot;:&quot;4&quot;,&quot;spacing&quot;:30,&quot;inner_spacing&quot;:30,&quot;entry_color_scheme&quot;:&quot;default&quot;,&quot;background_color&quot;:&quot;#f4f4f4&quot;,&quot;background_opacity&quot;:100,&quot;border&quot;:false,&quot;alignment&quot;:&quot;left&quot;,&quot;title_uppercase&quot;:true,&quot;title_letter_spacing&quot;:&quot;2&quot;,&quot;title_line_height&quot;:&quot;&quot;,&quot;title_size&quot;:14,&quot;title_font&quot;:&quot;custom_b&quot;,&quot;meta_font&quot;:&quot;custom_b&quot;,&quot;filter&quot;:true,&quot;filter_alignment&quot;:&quot;center&quot;,&quot;filter_sorting&quot;:&quot;default&quot;,&quot;filter_disable_all&quot;:false,&quot;filter_initial&quot;:&quot;&quot;,&quot;excerpt_content&quot;:&quot;excerpt&quot;,&quot;excerpt_length&quot;:&quot;&quot;,&quot;more_icon_position&quot;:&quot;before&quot;,&quot;more_message&quot;:&quot;Lihat Artikel&quot;,&quot;pagination&quot;:true,&quot;pagination_style&quot;:&quot;click&quot;,&quot;entry_link&quot;:&quot;post&quot;,&quot;link_new_tab&quot;:true,&quot;no_of_scrolls&quot;:1,&quot;navigation&quot;:true,&quot;indicator&quot;:false,&quot;loop&quot;:true,&quot;fade&quot;:false,&quot;adaptive_height&quot;:false,&quot;autoplay&quot;:false,&quot;autoplay_speed&quot;:5000,&quot;center_mode&quot;:false,&quot;center_padding&quot;:&quot;&quot;,&quot;variable_width&quot;:false,&quot;carousel_height&quot;:&quot;&quot;,&quot;type&quot;:&quot;blog&quot;,&quot;filters&quot;:[&quot;all&quot;],&quot;css_id&quot;:&quot;home-post&quot;,&quot;animation&quot;:&quot;fadeinu&quot;,&quot;padding_bottom&quot;:&quot;&quot;,&quot;class&quot;:[&quot;fbq-item&quot;,&quot;js-item-blog&quot;,&quot;fbq-blog&quot;,&quot;fbq-blog--plain&quot;,&quot;fbq-left-align&quot;,&quot;fbq-entries fbq-entries--grid fbq-entries--plain&quot;,&quot;medium&quot;],&quot;id&quot;:[&quot;home-post&quot;],&quot;style_attr&quot;:{&quot;padding-bottom&quot;:&quot;&quot;},&quot;data_attr&quot;:{&quot;style&quot;:&quot;plain&quot;,&quot;layout&quot;:&quot;grid&quot;},&quot;media_on&quot;:true,&quot;author_on&quot;:false,&quot;category_on&quot;:true,&quot;tag_on&quot;:true,&quot;title_on&quot;:true,&quot;posttype_on&quot;:false,&quot;excerpt_on&quot;:false,&quot;comment_on&quot;:false,&quot;date_on&quot;:false,&quot;link_on&quot;:false,&quot;rating_on&quot;:false,&quot;price_on&quot;:false,&quot;addtocart_on&quot;:false,&quot;media_style&quot;:[],&quot;filter_args&quot;:{&quot;filter_taxonomy&quot;:&quot;category&quot;,&quot;filter_sorting&quot;:&quot;default&quot;,&quot;filter_alignment&quot;:&quot;center&quot;,&quot;filter_initial&quot;:&quot;&quot;,&quot;filter_disable_all&quot;:false},&quot;content_attr&quot;:{&quot;class&quot;:&quot;fbq-entries-content&quot;,&quot;style_attr&quot;:{&quot;margin&quot;:&quot;0 -15px&quot;},&quot;data_attr&quot;:[]},&quot;query_args&quot;:{&quot;post_status&quot;:&quot;publish&quot;,&quot;suppress_filters&quot;:false,&quot;ignore_sticky_posts&quot;:1,&quot;orderby&quot;:&quot;post_date&quot;,&quot;order&quot;:&quot;desc&quot;,&quot;offset&quot;:&quot;&quot;,&quot;paged&quot;:1,&quot;posts_per_page&quot;:4,&quot;post_type&quot;:&quot;post&quot;},&quot;all_posts&quot;:&quot;17&quot;,&quot;pagination_class&quot;:&quot;js-load-more fbq-pagination fbq-pagination--click fbq-button fbq-button-size--medium fbq-button--full&quot;,&quot;pagination_link_args&quot;:[]}" data-posts="17" />
                      <div class="fbq-pagination-error-msg">
                        Fail to load posts. Try to refresh page.  
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="fbq-section js-dynamic-navbar fbq-p-border-border fbq-dark-scheme fbq-section--fit-height" style="height:60vh; line-height:60vh;" data-index="2" data-scheme="dark" data-screen_percent="60">
          <div class="fbq-background fbq-background--fixed" data-type="video" data-parallaxspeed="0">
            <div class="fbq-background-wrapper" style="background-image:url('{{asset('/img/'.$content->background)}}'); background-size:cover; background-position:center top; background-repeat:repeat;">
              <div class="fbq-background-wrapper-inner">
                <video class="fbq-video-background-inner fbq-video-background-inner--selfhosted" loop muted>
                  <source src="wp-content/uploads/2018/02/Sequence-01_3.mp4">
                </video>
              </div>
            </div>
            <div class="fbq-background-overlay fbq-p-bg-bg" style="background-color:#191919; opacity:0.86;"></div>
          </div>
          <div class="fbq-section-wrapper fbq-middle-vertical" >
            <div class="fbq-container">
              <div class="fbq-row fbq-row--main">
                <div class="fbq-col-2"></div>
                <div class="fbq-col-8">
                  <div class="fbq-item js-item-space fbq-space" style="height:50px;"></div>
                  <div class="fbq-heading fbq-heading--plain fbq-item js-item-heading fbq-heading fbq-heading--plain fbq-center-align anmt-item anmt-fadeinu">
                    <div class="fbq-heading-inner">
                      <h2 class="fbq-heading-text fbq-secondary-font fbq-p-border-border fbq-s-text-color" ><span style="color: rgb(255, 255, 255);">Ayo bersama mewujudkan Assalaam lebih maju.</span></h2>
                    </div>
                  </div>
                  <div id="cta-parallax" class="fbq-item js-item-box fbq-box fbq-center-align fbq-p-border-border" >
                    <div class="fbq-background" data-type="image" data-parallaxspeed="0">
                      <div class="fbq-background-overlay " style="opacity:0.68;"></div>
                    </div>
                    <div class="fbq-box-inner"  >
                      <div class="fbq-box-content fbq-middle-vertical" style="overflow-y:hidden;">
                        <div class="fbq-box-body" >
                          <div id="button-relawan" class="fbq-button fbq-button--fill fbq-button-hover--brand fbq-button-size--medium fbq-button-color--brand fbq-button--inline fbq-item js-item-button fbq-center-align anmt-item anmt-fadeinl" data-style="fill">
                            <a href="https://relawan.jabarjuara.id/" class="btnx " style="border-radius:40px; border-width:1px;" target="_self">
                            <i class="twf fbq-icon--before twf-child"></i>
                            <span class="fbq-button-label">Relawan Rindu</span>
                            </a>
                          </div>
                          <div id="button-udunan" class="fbq-button fbq-button--fill fbq-button-hover--brand fbq-button-size--medium fbq-button-color--brand fbq-button--inline fbq-item js-item-button fbq-center-align anmt-item anmt-fadeinr" data-style="fill">
                            <a href="404-not-found/index.html" class="btnx " style="border-radius:40px; border-width:1px;" target="_blank">
                            <i class="twf fbq-icon--before twf-gift"></i>
                            <span class="fbq-button-label">Udunan Warga</span>
                            </a>
                          </div>
                          <div class="fbq-item js-item-divider fbq-divider fbq-divider--single fbq-center-align anmt-item anmt-fadeinu" data-style="single">
                            <div class="fbq-divider-line fbq-p-border-bg" style="width:60%; height:1px; background-color:#ffffff;">
                              <span class="fbq-divider-text fbq-p-border-color fbq-p-bg-bg" style="font-size:12px; color:#ffffff; background-color:#191919;">
                              Habib Center - Yayasan Assalaam Bandung   </span>
                            </div>
                          </div>
                          <div class="fbq-item js-item-social fbq-social fbq-social--border fbq-center-align" data-style="border">
                            <div class="fbq-social-inner">
                              <a href="https://www.facebook.com/rindujabarjuara" class="fbq-social-item fbq-social-facebook" target="_blank"><span class="fbq-icon fbq-icon--border fbq-icon--small fbq-icon--with-hover fbq-icon--hover-plain"><span class="fbq-icon-normal fbq-icon-border fbq-p-brand-color" style="color:#ffffff;"><i class="twf twf-facebook"></i></span><span class="fbq-icon-hover fbq-icon-plain fbq-s-brand-color" style="color:#e3a700;"><i class="twf twf-facebook"></i></span></span></a><a href="https://www.instagram.com/rindujabarjuara" class="fbq-social-item fbq-social-instagram" target="_blank"><span class="fbq-icon fbq-icon--border fbq-icon--small fbq-icon--with-hover fbq-icon--hover-plain"><span class="fbq-icon-normal fbq-icon-border fbq-p-brand-color" style="color:#ffffff;"><i class="twf twf-instagram"></i></span><span class="fbq-icon-hover fbq-icon-plain fbq-s-brand-color" style="color:#e3a700;"><i class="twf twf-instagram"></i></span></span></a><a href="https://www.youtube.com/channel/UCYBakOsYlTVMi6RRTA7fKFg" class="fbq-social-item fbq-social-youtube" target="_blank"><span class="fbq-icon fbq-icon--border fbq-icon--small fbq-icon--with-hover fbq-icon--hover-plain"><span class="fbq-icon-normal fbq-icon-border fbq-p-brand-color" style="color:#ffffff;"><i class="twf twf-youtube"></i></span><span class="fbq-icon-hover fbq-icon-plain fbq-s-brand-color" style="color:#e3a700;"><i class="twf twf-youtube"></i></span></span></a>  
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="fbq-item js-item-space fbq-space" style="height:50px;"></div>
                </div>
                <div class="fbq-col-2"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </article>
</main>
@stop

