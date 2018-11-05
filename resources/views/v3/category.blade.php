  @extends('v3.master')
  @section('title',$slug)
  @section('canonical','http://fulltechword.test/category/'.$slug)
      @section('content')
      <section id="post">
           <div class="container">
                <div class="row">
                      <div class="col-lg-9 col-md-12 col-xs-12">
                     @if(count($category_post)>0)
                     <div>
                      </div>
                       @foreach ($category_post as $tk)
                        <div class="one-post">
                        <a href="{{ route('detail',['id'=>$tk->id,'slug'=>$tk->slug.'.html']) }}" title="{{ $tk->slug }}">
                            <img  src="{{ $tk->getImage() }}" alt="{{$tk->title}}">
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

                                   {{$category_post->links()}}
                     @else

                        <section class="text-center">

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



  @stop
