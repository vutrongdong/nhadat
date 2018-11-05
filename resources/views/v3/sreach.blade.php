  @extends('v3.master')
  @section('canonical','http://fulltechword.test/sreachs/'.$name)

      @section('content')
      <section id="post">
           <div class="container">
                <div class="row">
                      <div class="col-lg-9 col-md-12 col-xs-12">
                     @if(count($sreach)>0)
                     <div>
                        <h3>Tu Khoa Tim Kiem : {{$name}}</h3>
                      </div>
                       @foreach ($sreach as $tk)
                        <div class="one-post">
                            <a href="{{ route('detail',['id'=>$tk->id,'slug'=>$tk->slug.'.html']) }}" title="{{ $tk->slug }}">
                                <img  src="{{ $tk->getImage() }}" alt="{{ $tk->image }}">
                                    <div class="details">
                                              <h3 class="title">
                                                {{$tk->title}}
                                              </h3>
                                              <div class="item-label">
                                                  <span> <i class="fa fa-calendar"></i>{{$tk->created_at}}</span>
                                                  <span> <i class="fa fa-user"></i>{{$tk->author}}</span>
                                              </div>
                                              <p class="home-content">
                                                    {{ $tk->teaser }}
                                              </p>
                                     </div>
                            </a>
                        </div>
                      @endforeach

                                   {{$sreach->links()}}
                     @else

                        <section class="text-center">
                                <h3>Khong Tu Khoa Tim Kiem : {{$name}}</h3>
                            </section>

                     @endif

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

{{--                            </div>
 --}}                    </div>

                </div>

            </div>

      </section>



  @stop
