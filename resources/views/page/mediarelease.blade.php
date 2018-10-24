@extends('layouts.frontend')
@php
use App\Content;
$content= Content::first();
@endphp
@section('title')
Media Release
@endsection
@section('main')
<main id="main" class="fbq-content fbq-content--with-header" itemprop="mainContentOfPage" >
<article id="post-2433" class="fbq-content-wrapper post-2433 page type-page status-publish has-post-thumbnail hentry fbq_page_category-jabar-juara fbq_page_tag-jabar-juara fbq_page_tag-rindu" >
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
                            <img alt="Rindu Jabar Juara" title="Habib Center" width="1000" height="644" data-full-width="1000" data-full-height="644" data-sizes="(max-width:1000px) 100vw, 1000px" data-src="{{asset('/img/'.$content->foto_profil)}}"  src="{{asset('/img/'.$content->foto_profil)}}" class="fbq-media-wrapper-image image-lazy-load"  />
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
  <div class="fbq-main fbq-main--single">
    <div class="fbq-main-wrapper">
      <div class="fbq-section js-dynamic-navbar fbq-p-border-border" data-index="0">
        <div class="fbq-background" data-type="image" data-parallaxspeed="0">
          <div class="fbq-background-overlay fbq-p-bg-bg" style="background-color:#e3e3e3; opacity:0.38;"></div>
        </div>
        <div class="fbq-section-wrapper fbq-middle-vertical" style="padding-top:30px; padding-right:30px; padding-left:30px; padding-bottom:30px;">
          <div class="fbq-container">
            <div class="fbq-row fbq-row--main">
              <div class="fbq-col-12">
                <div class="fbq-item js-item-text fbq-text fbq-center-align fbq-force-center-mobile fbq-primary-font">
                  <div class="fbq-row" style="margin:0 -30px;">
                    <div class="fbq-text-content fbq-col-12" style="padding:0 30px;">
                      <div class="fbq-text-content-inner">
                        <span class="font-style" style="font-size: 26px;"><span style="font-weight: bold;">Media Release</span></span>                         
                      </div>
                    </div>
                  </div>
                </div>
                
            <div class="fbq-row fbq-row--main">
              <div class="fbq-col-12">
                <div class="fbq-item js-item-blog fbq-blog fbq-blog--plain fbq-left-align fbq-entries fbq-entries--grid fbq-entries--plain small" style="padding-bottom:40px;" data-style="plain" data-layout="grid">
                  <ul class="fbq-filter-bar fbq-center-align fbq-secondary-font">
                    <li class="fbq-filter-list fbq-filter-list--all">
                        @foreach($kategori as $data)
                        <a href="*" class="js-filter-list fbq-p-text-color active" data-filter="{{$data->nama}}">{{$data->nama}}</a>
                        @endforeach
                    </li>
                  </ul>
                  <div class="fbq-entries-content" style="margin:0 -15px;">
                    @foreach($artikel as $data)
                    <article class="fbq-entry fbq-col-3 post-2502 post type-post status-publish format-standard has-post-thumbnail hentry category-aktual category-artikel category-jabar-juara tag-jabar-juara tag-jawa-barat tag-pilkada tag-ridwan-kamil tag-rindu tag-uu-ruzhanul-ulum" style="margin-bottom:30px; padding:0 15px;" data-filter="{{$data->kategori->nama}}">
                    <div class="fbq-entry-inner fbq-p-border-border anmt-item anmt-fadeinu">
                      <div class="fbq-entry-header" >
                        <div class="fbq-media-wrapper with-placeholder anmt-image-slowzoom" >
                          <a class="fbq-media-wrapper-inner" href="{{url('artikel/show/'.$data->slug)}}" target="_blank">
                            <div class="media-placeholder" style="width:768px; padding-bottom:56.25%;"></div>
                            <img alt="" title="Habib Center" width="768" height="512" data-full-width="2016" data-full-height="1344" data-sizes="(max-width:767px) 100vw, (max-width:960px) 50vw, 25vw" data-src="{{asset('/assets/images/fotoartikel/'.$data->foto)}}" src="{{asset('/assets/images/fotoartikel/'.$data->foto)}}" class="fbq-media-wrapper-image image-lazy-load"  />
                          </a>
                        </div>
                      </div>
                      <div class="fbq-entry-body" style="background-color:rgba(244,244,244,1); padding:15px;">
                        <div class="fbq-entry-body-inner">
                          <div class="fbq-entry-body-content">
                            <div class="fbq-entry-meta fbq-custom_b-font">
                              <div class="fbq-entry-category fbq-p-brand-color">
                                <a  href="{{url('artikel/kategori/'.$data->kategori->slug)}}" target="_self">{{$data->kategori->nama}}</a>               
                              </div>
                              <div class="fbq-entry-tag">
                                @foreach(json_decode($data->tag) as $id)
                                  <i class="twf twf-bookmark-o"></i>
                                  <a href="{{url('filter/tag/'.$id)}}" rel="tag">{{App\Tag::find($id)->nama}}</a>
                                @endforeach                  
                              </div>
                            </div>
                            <h4 class="fbq-entry-title fbq-custom_b-font fbq-s-text-color" style="letter-spacing:2px; text-transform:uppercase; font-size:14px;">
                              <a href="{{url('artikel/show/'.$data->slug)}}">
                              {{$data->judul}}           </a>
                            </h4>
                          </div>
                        </div>
                      </div>
                    </div>
                  </article>
                  @endforeach
                  
                    
                  </div>
                  <div class="js-load-more fbq-pagination fbq-pagination--click fbq-button fbq-button-size--medium fbq-button--full">
                    <input type="hidden" value="{&quot;post_type&quot;:&quot;post&quot;,&quot;post_taxonomy&quot;:&quot;category&quot;,&quot;post_tag&quot;:&quot;post_tag&quot;,&quot;index&quot;:7,&quot;style&quot;:&quot;plain&quot;,&quot;layout&quot;:&quot;grid&quot;,&quot;components&quot;:[&quot;media&quot;,&quot;title&quot;,&quot;category&quot;,&quot;tag&quot;],&quot;name&quot;:&quot;&quot;,&quot;no_of_items&quot;:&quot;8&quot;,&quot;list_thumbnail_size&quot;:&quot;small&quot;,&quot;order_by&quot;:&quot;post_date&quot;,&quot;order&quot;:&quot;desc&quot;,&quot;query_offset&quot;:&quot;&quot;,&quot;featured_media&quot;:&quot;image&quot;,&quot;image_size&quot;:&quot;large&quot;,&quot;image_ratio&quot;:&quot;16x9&quot;,&quot;image_lazy_load&quot;:true,&quot;image_hover&quot;:&quot;slowzoom&quot;,&quot;no_of_columns&quot;:&quot;4&quot;,&quot;spacing&quot;:30,&quot;inner_spacing&quot;:20,&quot;entry_color_scheme&quot;:&quot;default&quot;,&quot;background_color&quot;:&quot;default&quot;,&quot;background_opacity&quot;:100,&quot;border&quot;:false,&quot;alignment&quot;:&quot;left&quot;,&quot;title_uppercase&quot;:false,&quot;title_letter_spacing&quot;:0,&quot;title_line_height&quot;:&quot;&quot;,&quot;title_size&quot;:22,&quot;title_font&quot;:&quot;custom_b&quot;,&quot;meta_font&quot;:&quot;primary&quot;,&quot;filter&quot;:true,&quot;filter_alignment&quot;:&quot;center&quot;,&quot;filter_sorting&quot;:&quot;default&quot;,&quot;filter_disable_all&quot;:false,&quot;filter_initial&quot;:&quot;media&quot;,&quot;excerpt_content&quot;:&quot;excerpt&quot;,&quot;excerpt_length&quot;:&quot;&quot;,&quot;more_icon_position&quot;:&quot;before&quot;,&quot;more_message&quot;:&quot;Read More&quot;,&quot;pagination&quot;:true,&quot;pagination_style&quot;:&quot;click&quot;,&quot;entry_link&quot;:&quot;post&quot;,&quot;link_new_tab&quot;:false,&quot;no_of_scrolls&quot;:1,&quot;navigation&quot;:true,&quot;indicator&quot;:false,&quot;loop&quot;:true,&quot;fade&quot;:false,&quot;adaptive_height&quot;:false,&quot;autoplay&quot;:false,&quot;autoplay_speed&quot;:5000,&quot;center_mode&quot;:false,&quot;center_padding&quot;:&quot;&quot;,&quot;variable_width&quot;:false,&quot;carousel_height&quot;:&quot;&quot;,&quot;type&quot;:&quot;blog&quot;,&quot;filters&quot;:[&quot;media&quot;,&quot;artikel&quot;],&quot;animation&quot;:&quot;fadeinr&quot;,&quot;stagger&quot;:true,&quot;padding_bottom&quot;:&quot;40&quot;,&quot;class&quot;:[&quot;fbq-item&quot;,&quot;js-item-blog&quot;,&quot;fbq-blog&quot;,&quot;fbq-blog--plain&quot;,&quot;fbq-left-align&quot;,&quot;fbq-entries fbq-entries--grid fbq-entries--plain&quot;,&quot;small&quot;],&quot;id&quot;:[],&quot;style_attr&quot;:{&quot;padding-bottom&quot;:&quot;40px&quot;},&quot;data_attr&quot;:{&quot;style&quot;:&quot;plain&quot;,&quot;layout&quot;:&quot;grid&quot;},&quot;media_on&quot;:true,&quot;author_on&quot;:false,&quot;category_on&quot;:true,&quot;tag_on&quot;:true,&quot;title_on&quot;:true,&quot;posttype_on&quot;:false,&quot;excerpt_on&quot;:false,&quot;comment_on&quot;:false,&quot;date_on&quot;:false,&quot;link_on&quot;:false,&quot;rating_on&quot;:false,&quot;price_on&quot;:false,&quot;addtocart_on&quot;:false,&quot;media_style&quot;:[],&quot;filter_args&quot;:{&quot;filter_taxonomy&quot;:&quot;category&quot;,&quot;filter_sorting&quot;:&quot;default&quot;,&quot;filter_alignment&quot;:&quot;center&quot;,&quot;filter_initial&quot;:&quot;media&quot;,&quot;filter_disable_all&quot;:false},&quot;content_attr&quot;:{&quot;class&quot;:&quot;fbq-entries-content&quot;,&quot;style_attr&quot;:{&quot;margin&quot;:&quot;0 -15px&quot;},&quot;data_attr&quot;:[]},&quot;query_args&quot;:{&quot;post_status&quot;:&quot;publish&quot;,&quot;suppress_filters&quot;:false,&quot;ignore_sticky_posts&quot;:1,&quot;orderby&quot;:&quot;post_date&quot;,&quot;order&quot;:&quot;desc&quot;,&quot;offset&quot;:&quot;&quot;,&quot;paged&quot;:1,&quot;posts_per_page&quot;:8,&quot;post_type&quot;:&quot;post&quot;,&quot;tax_query&quot;:[{&quot;taxonomy&quot;:&quot;category&quot;,&quot;field&quot;:&quot;slug&quot;,&quot;terms&quot;:[&quot;media&quot;,&quot;artikel&quot;]}]},&quot;all_posts&quot;:&quot;15&quot;,&quot;pagination_class&quot;:&quot;js-load-more fbq-pagination fbq-pagination--click fbq-button fbq-button-size--medium fbq-button--full&quot;,&quot;pagination_link_args&quot;:[]}" data-posts="15" />
                    
                    <div class="fbq-pagination-error-msg">
                      Fail to load posts. Try to refresh page. 
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="fbq-row fbq-row--main">
              <div class="fbq-col-12">
                <div class="fbq-heading fbq-heading--breakline fbq-item js-item-heading fbq-heading fbq-heading--breakline fbq-center-align">
                  <div class="fbq-heading-inner">
                    <div class="fbq-heading-line fbq-p-border-bg before"></div>
                    <h3 class="fbq-heading-text fbq-secondary-font fbq-p-border-border fbq-s-text-color" > Youtube Channel</h3>
                    <div class="fbq-heading-line fbq-p-border-bg after"></div>
                  </div>
                </div>
                <div class="fbq-item js-item-html fbq-html">
                  <div class="srizon-yt-container" id="srizonytscroller1">
                    @foreach($yt as $data)
                    <div class="yt-fp-outer outerwidthlarge4 outerwidthsmall2 rounding7">
                      <div class="yt-fp-padding padding5">
                        <div class="imgbox fpthumb shadownone" >
                          <a class="magpopif" href="https://www.youtube.com/watch?v={{$data->unique_url}}">
                            <img alt="Sepenggal Cerita Memperjuangkan RINDU" src="https://i.ytimg.com/vi/{{$data->unique_url}}/mqdefault.jpg" />
                            <div class="vidicon"></div>
                          </a>
                        </div>
                        <div class="titlebelowthumb" style="height:40px"><a class="magpopif" href="https://www.youtube.com/watch?v={{$data->unique_url}}">{{$data->title}}</a></div>
                      </div>
                    </div>
                    @endforeach
                    <div style="clear:both;"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</article>

@endsection
