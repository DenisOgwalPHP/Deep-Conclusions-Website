<div>
  <style>

    nav svg{
        height: 20px;
    }
    nav .hidden{
        display: block !important;
    }
</style>
     <!-- Breadcrumb -->
    <div class="text-left iq-breadcrumb-one iq-bg-over black">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-8 col-md-8 text-left align-self-center">
              <nav aria-label="breadcrumb" class="text-left">
                <h2 class="title">Blogs</h2>
                <ol class="breadcrumb main-bg">
                  <li class="breadcrumb-item"><a href="/">Home</a></li>
                  <li class="breadcrumb-item active">Blogs</li>
                </ol>
              </nav>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 text-right wow fadeInRight">
              <img
                src="{{ asset('assets/images/about-us/04.png') }}"
                class="img-fluid float-right"
                alt="banner"
              />
            </div>
          </div>
        </div>
    </div>
      <!-- Breadcrumb End -->
      <!-- Main Content -->
    <div class="main-content">
        <section>
          <div class="container">
            <div class="row flex-row-reverse">
              <!-- Blog List Section -->
              <div class="col-lg-8 col-sm-12">
                <div class="row">
                  @foreach ($blogs as $blog)
                  <div class="col-md-6 wow fadeInUp">
                    <div class="iq-blog-box">
                      <div class="iq-blog-image">
                        <img
                          width="1260"
                          height="954"
                          src="{{ asset('assets/images/about-us/01.png') }}"
                          alt="img"
                        />
                        <ul class="iq-blogtag">
                          <li><a href="#">CSS</a></li>
                        </ul>
                      </div>
                      <div class="iq-blog-detail">
                        <div class="iq-blog-meta">
                          <ul class="list-inline">
                            <li class="list-inline-item">
                              <a href="blog-details.html" rel="bookmark">
                                <time class="entry-date published updated" datetime="2019-09-26T06:49:49+00:00">
                                  {{date('d F, Y', strtotime(   $blog->created_at )) }}
                                </time>
                              </a>
                            </li>
                          </ul>
                        </div>
                        <div class="blog-title">
                          <h4 class="entry-title">
                            <a href="blog-details.html">
                              {{ $blog->name }}
                            </a>
                          </h4>
                        </div>
                        <div class="blog-content">
                          <p>
                            {!!Str::limit(strip_tags($blog->description),50,'...')  !!}
                          </p>
                        </div>
                        <div class="blog-button">
                          <a class="button-link" href="{{ route('blog.details', ['slug' => $blog->slug]) }}">Read More<i class="fa fa-angle-right"aria-hidden="true"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                @endforeach

                </div>
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12 wow fadeInUp">
                    <div class="pagination justify-content-center">
                      <nav aria-label="Page navigation">
                        <ul class="page-numbers">
                          <li ass="page-item">
                            {{ $blogs->links() }}
                          </li>
                          
                        </ul>
                      </nav>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Blog List Section End -->
              <!-- Sidebar Filter Section -->
              <div class="col-lg-4 col-sm-12 sidebar-service-right mt-5 mt-lg-0">
                <div id="secondary" class="widget-area">
                  <div id="search-2" class="widget widget_search wow fadeInLeft">
                    <form method="get" class="search-form">
                      <label for="search-form-5de637b4605ec"> </label>
                      <input
                        type="search"
                        id="search-form-5de637b4605ec"
                        class="search-field"
                        placeholder="Search"
                        value=""
                        name="s"
                      />
                      <button type="submit" class="search-submit">
                        <i class="fa fa-search"></i>
                      </button>
                    </form>
                  </div>
                  <div class="testimonial-widget-menu widget wow fadeInLeft">
                    <div
                      class="owl-carousel"
                      data-dots="true"
                      data-nav="false"
                      data-autoplay="true"
                      data-loop="true"
                      data-items="1"
                      data-items-laptop="1"
                      data-items-tab="1"
                      data-items-mobile="1"
                      data-items-mobile-sm="1"
                      data-margin="30">
                      @foreach ($l_blogs_review as $l_blog_review)
                      <div class="testimonial-info">
                        <p>
                          {!!Str::limit($l_blog_review->comment,120)!!}
                        </p>
                        <div class="post-img">
                          <img
                            width="150"
                            height="150"
                            src="{{ asset('assets/images/testimonials/1.jpg') }}"
                            class="attachment-thumbnail size-thumbnail wp-post-image"
                            alt=""
                          />
                          <div class="testimonial-name">
                            <h5>{{$l_blog_review->name}}</h5>
                            <!--<span class="sub-title">{{$l_blog_review->comment}}</span>-->
                          </div>
                        </div>
                      </div>
                    @endforeach
                    </div>
                  </div>
                  <div class="iq-widget-menu widget wow fadeInLeft">
                    <h2 class="widget-title">Recent Post</h2>
                    <div class="list-inline iq-widget-menu">
                      <ul class="iq-post">
                          @foreach ($l_blogs as $l_blog)
                          <li>
                          <div class="post-img">
                            <img width="150" height="150" src="{{ asset('assets/images/about-us/03.png') }}" class="attachment-thumbnail size-thumbnail wp-post-image" alt=""/>
                            <div class="post-blog">
                              <div class="blog-box">
                                <ul class="list-inline">
                                  <li class="list-inline-item mr-3">
                                    <a href="{{ route('blog.details', ['slug' => $l_blog->slug]) }}">
                                      <i class="fa fa-calendar mr-2" aria-hidden="true"></i>{{date('d F, Y', strtotime(   $l_blog->created_at )) }}</a>
                                  </li>
                                </ul>
                                <a class="new-link" href="{{ route('blog.details', ['slug' => $l_blog->slug]) }}">
                                  <h5>{{$l_blog->name}}</h5>
                                </a>
                              </div>
                            </div>
                          </div>
                        </li>
  @endforeach
                      </ul>
                    </div>
                  </div>
                  <div id="categories-4" class="widget widget_categories wow fadeInLeft">
                    <h2 class="widget-title">Categories</h2>
                    <ul>
                      @foreach ($categories as $categorie)
                      <li class="cat-item cat-item-3">
                        <a href="#">{{$categorie->name}}</a> <!--<span class="post_count"> 0 </span>-->
                      </li>
                    @endforeach
                    </ul>
                  </div>
                </div>
                <!-- #secondary -->
              </div>
              <!-- Sidebar Filter Section End -->
            </div>
          </div>
        </section>
      </div>
      <!--Main Content End-->
</div>
