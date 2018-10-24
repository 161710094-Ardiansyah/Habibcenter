@extends('layouts.frontend')
@section('title')
{{$artikel->judul}}
@endsection
@section('main')
<main id="main" class="fbq-content fbq-content--with-header" itemprop="mainContentOfPage" itemtype="http://schema.org/Article" itemscope="itemscope">
  <article id="post-2494" class="fbq-content-wrapper post-2494 post type-post status-publish format-standard has-post-thumbnail hentry category-aktual category-berita category-jabar-juara tag-jabar-juara tag-jawa-barat tag-pilkada tag-ridwan-kamil tag-rindu tag-uu-ruzhanul-ulum">
    <div class="fbq-post fbq-post--no-sidebar fbq-post-format--standard fbq-post-featured--fullwidth">
    <div class="fbq-post-media fbq-post-media--standard js-dynamic-navbar" data-scheme="dark">
      <div class="fbq-background" data-type="image" data-parallaxspeed="5" data-contentfade="1">
        <div class="fbq-background-wrapper">
          <div class="fbq-background-inner" style="background-image:url('{{asset('/assets/images/fotoartikel/'.$artikel->foto)}}'); background-size:cover; background-position:center center; background-repeat:repeat;"></div>
        </div>
        <div class="fbq-background-overlay "></div>
      </div>
      <div class="fbq-post-headline fbq-left-align">
        <div class="fbq-container">
          <div class="fbq-post-headline-inner">
            <div class="fbq-post-headline-content">
              <h1 itemprop="headline" class="fbq-post-title post-title fbq-custom_b-font" style="font-size:45px; max-width:50%;">
                {{$artikel->judul}}   
              </h1>
              
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="fbq-container js-dynamic-navbar">
    <div class="fbq-main fbq-main--single">
    <div class="fbq-main-wrapper">
      <div class="fbq-post-body">
        <div class="fbq-post-content" itemprop="text">
          <p>{!!$artikel->deskripsi!!}
          </p>
        </div>
        <div class="fbq-entry-tag">
          <div class="fbq-post-tag with-margin fbq-secondary-font">
            @foreach(json_decode($artikel->tag) as $id)
            <span itemprop="keywords"><a class="fbq-s-bg-bg fbq-p-text-color fbq-p-brand-bg-hover"
              href="{{url('filter/tag/'.$id)}}" target="_self">{{App\Tag::find($id)->nama}}</a></span>
            @endforeach                  
          </div>
          </div>
          
            <div class="fbq-post-control-button fbq-p-text-color">
              <a href="#" class="fbq-post-print fbq-p-text-color fbq-p-text-border">
              <i class="twf twf-print"></i>Versi Cetak                        </a>
            </div>
          </div>
        </div>
        <div class="fbq-item js-item-navigation fbq-navigation fbq-navigation--border fbq-secondary-font fbq-p-border-border" data-style="border">
          <div class="container">
            <div class="row justify-content-between">
              @if(isset($previous))
              <div class="fbq-navigation-previous">
                <div class="fbq-navigation-link">
                  <a href="{{url('artikel/show/'.$previous->slug)}}" rel="prev">
                    <div class="fbq-navigation-content">
                      <i class="twf twf-arrow-bold-left twf-lg"></i>{{$previous->judul}}
                    </div>
                  </a>
                </div>
              </div>
              @endif
              @if(isset($next))
              <div class="fbq-navigation-next">
                <div class="fbq-navigation-link">
                  <a href="{{url('artikel/show/'.$next->slug)}}" rel="next">
                    <div class="fbq-navigation-content">
                      {{$next->judul}}<i class="twf twf-arrow-bold-right twf-lg"></i>
                    </div>
                  </a>
                </div>
              </div>
              @endif
            </div>
          </div>
        </div>
      </div>
      <div class="fbq-post-related">
        <div class="fbq-container js-dynamic-navbar">
          <div class="fbq-item js-item-relatedpost fbq-relatedpost fbq-relatedpost--grid" data-style="grid">
            <div class="fbq-relatedpost-heading">
              <div class="fbq-heading fbq-heading--leadline">
                <div class="fbq-heading-inner">
                  <h3 class="fbq-heading-text fbq-secondary-font fbq-s-text-border fbq-s-text-color" >Related Posts</h3>
                </div>
              </div>
            </div>  
            <div class="fbq-row">
              @foreach($related as $data)
              <div class="fbq-entry fbq-col-3">
                <a href="{{url('artikel/show/'.$data->slug)}}" class="fbq-entry-inner">
                  <div class="fbq-entry-header">
                    <div class="fbq-entry-media fbq-s-text-color">
                      <div class="fbq-media-wrapper with-placeholder" >
                        <div class="fbq-media-wrapper-inner">
                          <div class="media-placeholder" style="width:768px; padding-bottom:66.666666666667%;"></div>
                          <img alt="" title="151231_Panen Berkebun (363)_resize" width="768" height="512" data-full-width="2016" data-full-height="1344" data-sizes="(max-width:767px) 100vw, (max-width:960px) 50vw, 25vw" data-src="{{asset('/assets/images/fotoartikel/'.$data->foto)}}" src="{{asset('/assets/images/fotoartikel/'.$data->foto)}}" class="fbq-media-wrapper-image image-lazy-load"  />
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="fbq-entry-content">
                    <h4 class="fbq-entry-title fbq-s-text-color fbq-secondary-font">
                      {{$data->judul}}                
                    </h4>
                  </div>
                </a>
              </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
  </article>
</main>

@endsection