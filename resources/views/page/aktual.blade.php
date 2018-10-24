@extends('layouts.frontend2')
@section('bread')
<header class="fbq-content-header fbq-page-title fbq-page-title--bottom fbq-center-align js-dynamic-navbar fbq-dark-scheme fbq-page-title--default" data-role="header" data-scheme="dark">
  <div class="fbq-background" data-type="image" data-parallaxspeed="0">
    <div class="fbq-background-wrapper">
      <div class="fbq-background-inner" ></div>
    </div>
    <div class="fbq-background-overlay fbq-s-bg-bg"></div>
  </div>
  <div class="fbq-page-title-breadcrumb fbq-primary-font fbq-left-align fbq-p-text-color custom-color" style="color:#191919;">
    <div class="fbq-container">
      <ul class="fbq-breadcrumb" itemprop="breadcrumb" itemscope="itemscope" itemtype="http://schema.org/BreadcrumbList">
        <li itemprop="itemListElement" itemscope="itemscope" itemtype="http://schema.org/ListItem">
          <a itemprop="item" href="/">
          <span itemprop="name">Beranda</span>
          </a>
          <meta itemprop="position" content="1" />
        </li>
        <li class="fbq-separator"><span class="twf twf-angle-right"></span></li>
        <li itemprop="itemListElement" itemscope="itemscope" itemtype="http://schema.org/ListItem">
          <a itemprop="item" href="/">
          <span itemprop="name">{{isset($id)?'Tag':'Kategori'}}</span>
          </a>
          <meta itemprop="position" content="2" />
        </li>
        <li class="fbq-separator"><span class="twf twf-angle-right"></span></li>
        <li class="fbq-breadcrumbs-current fbq-s-text-color">
          <span itemprop="name">{{isset($id)?App\Tag::find($id)->nama: $artikel[0]->kategori->nama}}</span>
        </li>
      </ul>
    </div>
  </div>
</header>
@endsection
@section('title')
@endsection
@section('main')
<main id="main" class="fbq-main fbq-main--single blueprint-inactive" itemprop="mainContentOfPage" itemscope="itemscope" itemtype="http://schema.org/Blog">
  <div class="fbq-item js-item-blog fbq-blog fbq-blog--plain fbq-center-align fbq-entries fbq-entries--grid fbq-entries--plain small with-border" data-style="plain" data-layout="grid">
    <div class="fbq-entries-content" style="margin:0 -30px;">
      @foreach($artikel as $data)
      <article class="fbq-entry fbq-col-3 post-2502 post type-post status-publish format-standard has-post-thumbnail hentry category-aktual category-artikel category-jabar-juara tag-jabar-juara tag-jawa-barat tag-pilkada tag-ridwan-kamil tag-rindu tag-uu-ruzhanul-ulum" style="margin-bottom:30px; padding:0 15px;" data-filter="aktual, artikel, jabar-juara">
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
                    <a  href="{{url('filter/kategori/'.$data->kategori->slug)}}" target="_self">{{$data->kategori->nama}}</a>              
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
  </div>
</main>

@endsection