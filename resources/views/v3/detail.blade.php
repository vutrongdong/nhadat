@extends('v3.master')
   @section('title',$data->title)
   @section('canonical','http://fulltechword.test/details/'.$data->slug)
@section('content')
     <script type="application/ld+json">
  {
    "@context": "http://schema.org",
    "@type": "Article",
    "headline": "{!! $data->title !!}",
    "alternativeHeadline": "{!! $data->title !!}",
    "image": {
      "@type": "ImageObject",
      "url": " {{'http://fulltechword.com/storage/images/blogs/image/'.$data->image }} ",
      "height": 342,
      "width": 786
    },
    "author": {
      "@type": "Organization",
      "name": "{{ $data->author ? $data->author->name : 'anonymous' }}"
    },
     "publisher": {
      "@type": "Organization",
      "name": " {{  route('/')  }} ",
      "logo": {
        "@type": "ImageObject",
        "url": "{{ 'http://fulltechword.com/storage/images/blogs/image/anh1.png' }}",
        "width": 140
      }
    },
    "url": "{{ route('detail',['id'=>$data->id,'slug'=>$data->slug]) }}",
    "datePublished": "{{ $data->created_at }} ",
    "dateCreated": " {{ $data->created_at }} ",
    "dateModified": "{{ $data->updated_at }}",
    "description": "{!! $data->title !!}",
    "mainEntityOfPage":{
      "@type":"WebPage",
      "@id":"https://google.com/article"
    }
 }
</script>


<section id="one-post-detail">


    <div class="container">
            <div class="title-detail">
                <h1>{{$data->title}}</h1>
            </div>
            <div class="icon-detail">
                  <span> <i class="fa fa-calendar"></i>{{$data->created_at}}</span>
                   <span> <i class="fa fa-user"></i>{{$data->author_id}}</span>
            </div>
            <div class="row">
                <div class="col-lg-9">
                      <div class="img">
                            <img src="{{$data->getImage()}}" alt="{{$data->image}}">
                      </div>
                      <div class="content">
                            {!!$data->content!!}
                      </div>

                </div>


                   <div class="col-lg-3 hidden-md-down hidden-xs-down" id="banner">
                            <div class="banner-right">
                                <img src="../../images/banner1.png" alt="">
                                <h6 class="link text-right">
                                     <a href="#"  title="Sponsored">Sponsored</a>
                                </h6>
                            </div>
                         <div class="banner-right">
                                <img src="../../images/banner1.png" alt="">
                                <h6 class="link text-right">
                                    <a href="#"  title="Sponsored">Sponsored</a>
                                </h6>

                            </div>
                           <div class="details-post-right">
                                <div class="title-post-right">
                                   <h3>Popular News</h3>
                                </div>
                                    @foreach ($postnew as $post)
                                      <a href="{{ route('detail',['id'=>$post->id,'slug'=>$post->slug.'.html']) }}" title="{{ $post->title }}">
                                            <div class="right">
                                                 <div class="details-post-image">
                                                <img src="{{$post->getImage()}}"  alt="">
                                                </div>

                                                <h4 class="details-post-title">
                                                    {{$post->title}}
                                                </h4>
                                            </div>
                                        </a>

                                    @endforeach
                                </div>

                           </div>
                    </div>

    </div>
</section>

<div class="icon-bar hidden-md-down hidden-xs-down">
  <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
  <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
  <a href="#" class="google"><i class="fa fa-google"></i></a>
  <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
  <a href="#" class="youtube"><i class="fa fa-youtube"></i></a>
</div>



<section id="latest-tori">
    <div class="container">
        <div class="title-latest-tori">
             <h3> Latest Stories</h3>
        </div>
        <div class="row">
          @foreach ($lateststori as $element)
             <div class="col-lg-3 col-md-6 col-xs-12 padd0">
                   <a href="{{ route('detail',['id'=>$element->id,'slug'=>$element->slug.'.html']) }}" title="{{$element->slug}}">
                        <img src="{{ $element->getImage() }}" alt="">
                    <div class="title-image-latest-tori">
                        <h6>{{ $element->title }}</h6>
                    </div>
                 <div class="icon-detail">
                  <span> <i class="fa fa-calendar"></i>{{$element->created_at}}</span>
                   <span> <i class="fa fa-user"></i>{{$element->author_id}}</span>
                 </div>
                   </a>
             </div>
        @endforeach



        </div>
    </div>
</section>

  <section id="best-deal">
            <div class="container">
                <div class="title">
                     Best Deals
                </div>
                <div class="row paddTop-20">
                 @foreach ($besthot as $element)
                      <div class="col-lg-3 col-md-6 col-xs-6">
                        <a href="{{ route('detail',['id'=>$element->id,'slug'=>$element->slug.'.html']) }}" title="{{ $element->slug }}">
                              <img src="{{ $element->getImage() }}" alt="">
                          <h3 class="title-best-deal">
                              {{ $element->title }}
                          </h3>
                           <div class="price-best-deal">
                              <span> <i class="fa fa-calendar"></i>{{$data->created_at}}</span>
                               <span> <i class="fa fa-user"></i>{{$data->author_id}}</span>
                           </div>
                         </a>
                      </div>
                   @endforeach

                </div>
            </div>
       </section>


@stop
