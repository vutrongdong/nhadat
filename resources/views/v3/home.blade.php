
  @extends('v3.master')
   @section(' title ','home')
   @section('canonical', 'http://fulltechword.test/' )
      @section('content')
      <section id="post">
           <div class="container">
                <div class="row">
                      <div class="col-lg-9 col-md-12 col-xs-12">
                      @foreach ($data as $blog)
                        <div class="one-post">
                          <a href="{{ route('detail',['id'=>$blog->id,'slug'=>$blog->slug]) }} title="">
                              <img  src="{{ $blog->getImage() }}"  alt="$blog->title">
                                <div class="details">
                                        <h3 class="title">
                                             {{$blog->title}}
                                        </h3>
                                          <div class="item-label">
                                              <span> <i class="fa fa-calendar"></i>{{$blog->created_at}}</span>
                                              <span> <i class="fa fa-user"></i>{{$blog->author}}</span>
                                          </div>
                                          <p class="home-content">
                                                {{ $blog->teaser }}
                                          </p>
                                    </div>
                             </a>
                            </div>
                @endforeach
                                        {{$data->links()}}

                    </div>

              <div class="col-lg-3 hidden-md-down hidden-xs-down" id="banner">
                            <div class="banner-right">
                                <img src="images/banner1.png" alt="">
                                <h6 class="link text-right">
                                     <a href="#"  title="Sponsored">Sponsored</a>
                                </h6>

                            </div>

                         <div class="banner-right">
                                <img src="images/banner1.png" alt="">
                                <h6 class="link text-right">
                                    <a href="#"  title="Sponsored">Sponsored</a>
                                </h6>

                            </div>
                           <div class="details-post-right">
                                <div class="title-post-right">
                                   <h3>Popular News</h3>
                                </div>
                                    @foreach ($postnew as $post)
                                      <a href="{{ route('detail',['id'=>$post->id,'slug'=>$post->slug]) }}" title="{{ $post->title }}">
                                            <div class="right">
                                                 <div class="details-post-image">
                                                <img src="{{$post->getImage()}}"  alt="{{ $post->image }}">
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

            </div>

      </section>

       <section id="best-deal">
            <div class="container">
                <div class="title">
                    <h2> Best Deals</h2>
                </div>
                <div class="row paddTop-20">
                        @foreach ($besthot as $hot)
                    <div class="col-lg-3 col-md-6 col-xs-6">
                        <a href="{{ route('detail',['id'=>$hot->id,'slug'=>$hot->slug.'.html']) }}" title="{{ $hot->title }}">
                              <img src="{{  $hot->getImage() }}" alt="{{ $hot->image }}">
                          <h3 class="title-best-deal">
                              {{$hot->title}}
                           </h3>
                           <div class="price-best-deal">
                               <span> <i class="fa fa-calendar"></i>{{$hot->created_at}}</span>
                               <span> <i class="fa fa-user"></i>{{$hot->author}}</span>
                           </div>
                         </a>

                      </div>
                        @endforeach


                </div>
            </div>
       </section>

  @stop
