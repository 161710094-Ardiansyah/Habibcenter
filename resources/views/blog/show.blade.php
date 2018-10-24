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
                <div class="fbq-post-meta fbq-primary-font">
                  <div class="fbq-post-category fbq-s-text-color-hover">
                    <a  href="{{url('filter/kategori/'.$artikel->kategori->id)}}" target="_self">{{$artikel->kategori->nama}}</a>             
                  </div>
                  <div class="fbq-post-share fbq-post-share--top">
                    <div class="fbq-post-share-button fbq-p-brand-color twf twf-share-alt"></div>
                    <div class="fbq-post-share-box fbq-p-border-border fbq-p-bg-bg">
                      <ul class="fbq-social-share fbq-social-share--box">
                        <li class="fbq-p-border-border fbq-share-item">
                          <a class="js-share box fbq-social-item--color fbq-social-facebook" href="http://www.facebook.com/share.php?u=https://jabarjuara.id/ini-doa-pendukung/&amp;title=Doa+Pendukung+untuk+Jabar+Juara+No.1">
                          <span class="fbq-icon fbq-icon--plain fbq-icon--without-hover"><span class="fbq-icon-normal fbq-icon-plain fbq-p-brand-color" ><i class="twf twf-facebook"></i></span></span>               <span class="fbq-social-share-label">
                          Facebook                </span>
                          </a>
                        </li>
                        <li class="fbq-p-border-border fbq-share-item">
                          <a class="js-share box fbq-social-item--color fbq-social-twitter" href="http://twitter.com/intent/tweet?text=Doa+Pendukung+untuk+Jabar+Juara+No.1+https://jabarjuara.id/ini-doa-pendukung/">
                          <span class="fbq-icon fbq-icon--plain fbq-icon--without-hover"><span class="fbq-icon-normal fbq-icon-plain fbq-p-brand-color" ><i class="twf twf-twitter"></i></span></span>                <span class="fbq-social-share-label">
                          Twitter               </span>
                          </a>
                        </li>
                        <li class="fbq-p-border-border fbq-share-item">
                          <a class="js-share box fbq-social-item--color fbq-social-email" href="mailto:?subject=Site%20Sharing&#038;body=Check%20out%20this%20site-https://jabarjuara.id/ini-doa-pendukung/">
                          <span class="fbq-icon fbq-icon--plain fbq-icon--without-hover"><span class="fbq-icon-normal fbq-icon-plain fbq-p-brand-color" ><i class="twf twf-envelope"></i></span></span>               <span class="fbq-social-share-label">
                          Email               </span>
                          </a>
                        </li>
                      </ul>
                      <div class="fbq-triangle-border up"></div>
                      <div class="fbq-triangle up"></div>
                    </div>
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
                <p>{{$artikel->deskripsi}}
                </p>
              </div>
              <div class="fbq-entry-tag">                 
               <div class="fbq-post-tag with-margin fbq-secondary-font">
                @foreach(json_decode($artikel->tag) as $id)
                 <span itemprop="keywords"><a class="fbq-s-bg-bg fbq-p-text-color fbq-p-brand-bg-hover"
                    href="{{url('filter/tag/'.$id)}}" target="_self">{{App\Tag::find($id)->nama}}</a></span>
                @endforeach                  
                </div>
              </div
             
              <div class="fbq-post-control">
                <div class="fbq-post-share fbq-post-share--bottom fbq-s-text-color fbq-share fbq-share--icon">
                  <ul class="fbq-social-share fbq-social-share--icon with-divider" style="font-size:12px;">
                    <li class="fbq-social-share-count fbq-p-border-border fbq-s-text-color">
                      <span class="fbq-social-share-count-number">0</span>
                      <span class="fbq-social-share-count-suffix">
                      Dibagikan       </span>
                    </li>
                    <li class="fbq-p-border-border fbq-share-item">
                      <a class="js-share fbq-social-item--color fbq-social-facebook" href="http://www.facebook.com/share.php?u=https://jabarjuara.id/ini-doa-pendukung/&#038;title=Doa+Pendukung+untuk+Jabar+Juara+No.1">
                      <span class="fbq-icon fbq-icon--fill fbq-icon--with-hover fbq-icon--hover-fill"><span class="fbq-icon-normal fbq-icon-fill fbq-p-brand-bg fbq-p-brand-contrast-color" ><i class="twf twf-facebook"></i></span><span class="fbq-icon-hover fbq-icon-fill fbq-s-brand-bg fbq-s-brand-contrast-color" ><i class="twf twf-facebook"></i></span></span>        </a>
                    </li>
                    <li class="fbq-p-border-border fbq-share-item">
                      <a class="js-share fbq-social-item--color fbq-social-twitter" href="http://twitter.com/intent/tweet?text=Doa+Pendukung+untuk+Jabar+Juara+No.1+https://jabarjuara.id/ini-doa-pendukung/">
                      <span class="fbq-icon fbq-icon--fill fbq-icon--with-hover fbq-icon--hover-fill"><span class="fbq-icon-normal fbq-icon-fill fbq-p-brand-bg fbq-p-brand-contrast-color" ><i class="twf twf-twitter"></i></span><span class="fbq-icon-hover fbq-icon-fill fbq-s-brand-bg fbq-s-brand-contrast-color" ><i class="twf twf-twitter"></i></span></span>        </a>
                    </li>
                    <li class="fbq-p-border-border fbq-share-item">
                      <a class="js-share fbq-social-item--color fbq-social-email" href="mailto:?subject=Site%20Sharing&#038;body=Check%20out%20this%20site-https://jabarjuara.id/ini-doa-pendukung/">
                      <span class="fbq-icon fbq-icon--fill fbq-icon--with-hover fbq-icon--hover-fill"><span class="fbq-icon-normal fbq-icon-fill fbq-p-brand-bg fbq-p-brand-contrast-color" ><i class="twf twf-envelope"></i></span><span class="fbq-icon-hover fbq-icon-fill fbq-s-brand-bg fbq-s-brand-contrast-color" ><i class="twf twf-envelope"></i></span></span>        </a>
                    </li>
                  </ul>
                </div>
                <div class="fbq-post-control-button fbq-p-text-color">
                  <a href="#" class="fbq-post-print fbq-p-text-color fbq-p-text-border">
                  <i class="twf twf-print"></i>Versi Cetak                        </a>
                  <a class="fbq-post-email fbq-p-text-color" href="mailto:?subject=Doa Pendukung untuk Jabar Juara No.1&body=Check out this site-https://jabarjuara.id/ini-doa-pendukung/">
                  <i class="twf twf-envelope-o"></i>Email                       </a>
                </div>
              </div>
            </div>
            <div class="fbq-item js-item-navigation fbq-navigation fbq-navigation--border fbq-secondary-font fbq-p-border-border" data-style="border">
              <div class="container">
                        <div class="row justify-content-between">
              @if(isset($previous))
              <div class="fbq-navigation-previous">
                <div class="fbq-navigation-link">
                  <a href="{{url('artikel/show/'.$data->id)}}" rel="prev">
                    <div class="fbq-navigation-content">
                    prev<i class="twf twf-arrow-bold-left twf-lg"></i>
                    </div>
                  </a>
                </div>
                @endif
              </div>

              <div class="fbq-navigation-next">
                <div class="fbq-navigation-link">
                  <a href="juaraekonomi" rel="next">
                    <div class="fbq-navigation-content">
                      Jabar Juara Saat Ekonomi Pedesaan Optimal<i class="twf twf-arrow-bold-right twf-lg"></i>
                    </div>
                  </a>
                </div>
              </div>
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
            @php
            $related= App\Artikel::where('kategori_id',$artikel->kategori_id)->get();
            @endphp
            <div class="fbq-row">
              @foreach($related as $data)
              <div class="fbq-entry fbq-col-3">
                <a href="{{url('artikel/show/'.$data->id)}}" class="fbq-entry-inner">
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
@stop

