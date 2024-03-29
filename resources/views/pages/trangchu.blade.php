@extends('layout.index')
@section('title')
    Trang chủ
@endsection

@section('content')
<div class="container">

    	<!-- slider -->
    	<div class="row carousel-holder">
            <div class="col-md-12">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="item active">
                            <img class="slide-image" src="image/800x300.png" alt="">
                        </div>
                        <div class="item">
                            <img class="slide-image" src="image/800x300.png" alt="">
                        </div>
                        <div class="item">
                            <img class="slide-image" src="image/800x300.png" alt="">
                        </div>
                    </div>
                    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>
            </div>
        </div>
        <!-- end slide -->

        <div class="space20"></div>

    <div class="row main-left">
        @include('layout.menu')

        <div class="col-md-9">
                <div class="panel panel-default">            
                    <div class="panel-heading" style="background-color:#337AB7; color:white;" >
                        <h2 style="margin-top:0px; margin-bottom:0px;">Laravel Tin Tức</h2>
                    </div>

                    <div class="panel-body">
                        <!-- item -->
                        <div class="row-item row">
                            <h3>
                                <a href="category.html">Category</a> | 	
                                <small><a href="category.html"><i>subtitle</i></a>/</small>
                                <small><a href="category.html"><i>subtitle</i></a>/</small>
                                <small><a href="category.html"><i>subtitle</i></a>/</small>
                                <small><a href="category.html"><i>subtitle</i></a>/</small>
                                <small><a href="category.html"><i>subtitle</i></a>/</small>
                            </h3>
                            <div class="col-md-8 border-right">
                                <div class="col-md-5">
                                    <a href="detail.html">
                                        <img class="img-responsive" src="image/320x150.png" alt="">
                                    </a>
                                </div>

                                <div class="col-md-7">
                                    <h3>Project Five</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, quo, minima, inventore voluptatum saepe quos nostrum provident .</p>
                                    <a class="btn btn-primary" href="detail.html">View Project <span class="glyphicon glyphicon-chevron-right"></span></a>
                                </div>

                            </div>
                            

                            <div class="col-md-4">
                                <a href="detail.html">
                                    <h4>
                                        <span class="glyphicon glyphicon-list-alt"></span>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    </h4>
                                </a>

                                <a href="detail.html">
                                    <h4>
                                        <span class="glyphicon glyphicon-list-alt"></span>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    </h4>
                                </a>

                                <a href="detail.html">
                                    <h4>
                                        <span class="glyphicon glyphicon-list-alt"></span>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    </h4>
                                </a>

                                <a href="detail.html">
                                    <h4>
                                        <span class="glyphicon glyphicon-list-alt"></span>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    </h4>
                                </a>
                            </div>
                            
                            <div class="break"></div>
                        </div>
                        <!-- end item -->
                        <!-- item -->
                        <div class="row-item row">
                            <h3><a href="category.html">Category</a> | 	
                                <small><a href="category.html"><i>subtitle</i></a>/</small>
                                <small><a href="category.html"><i>subtitle</i></a>/</small>
                                <small><a href="category.html"><i>subtitle</i></a>/</small>
                                <small><a href="category.html"><i>subtitle</i></a>/</small>
                                <small><a href="category.html"><i>subtitle</i></a>/</small>
                            </h3>
                            <div class="col-md-8 border-right">
                                <div class="col-md-5">
                                    <a href="detail.html">
                                        <img class="img-responsive" src="image/320x150.png" alt="">
                                    </a>
                                </div>
                                <div class="col-md-7">
                                    <h3>Project Five</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, quo, minima, inventore voluptatum saepe quos nostrum provident .</p>
                                    <a class="btn btn-primary" href="detail.html">View Project <span class="glyphicon glyphicon-chevron-right"></span></a>
                                </div>
                            </div>
                            

                            <div class="col-md-4">
                                <a href="detail.html">
                                    <h4>
                                        <span class="glyphicon glyphicon-list-alt"></span>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    </h4>
                                </a>

                                <a href="detail.html">
                                    <h4>
                                        <span class="glyphicon glyphicon-list-alt"></span>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    </h4>
                                </a>

                                <a href="detail.html">
                                    <h4>
                                        <span class="glyphicon glyphicon-list-alt"></span>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    </h4>
                                </a>

                                <a href="detail.html">
                                    <h4>
                                        <span class="glyphicon glyphicon-list-alt"></span>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    </h4>
                                </a>
                            </div>
                            


                            <div class="break"></div>
                        </div>
                        <!-- end item -->
                        <!-- item -->
                        <div class="row-item row">
                            <h3><a href="category.html">Category</a> | 	
                                <small><a href="category.html"><i>subtitle</i></a>/</small>
                                <small><a href="category.html"><i>subtitle</i></a>/</small>
                                <small><a href="category.html"><i>subtitle</i></a>/</small>
                                <small><a href="category.html"><i>subtitle</i></a>/</small>
                                <small><a href="category.html"><i>subtitle</i></a>/</small>
                            </h3>
                            <div class="col-md-8 border-right">
                                <div class="col-md-5">
                                    <a href="detail.html">
                                        <img class="img-responsive" src="image/320x150.png" alt="">
                                    </a>
                                </div>
                                <div class="col-md-7">
                                    <h3>Project Five</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, quo, minima, inventore voluptatum saepe quos nostrum provident .</p>
                                    <a class="btn btn-primary" href="detail.html">View Project <span class="glyphicon glyphicon-chevron-right"></span></a>
                                </div>
                            </div>
                            

                            <div class="col-md-4">
                                <a href="detail.html">
                                    <h4>
                                        <span class="glyphicon glyphicon-list-alt"></span>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    </h4>
                                </a>

                                <a href="detail.html">
                                    <h4>
                                        <span class="glyphicon glyphicon-list-alt"></span>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    </h4>
                                </a>

                                <a href="detail.html">
                                    <h4>
                                        <span class="glyphicon glyphicon-list-alt"></span>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    </h4>
                                </a>

                                <a href="detail.html">
                                    <h4>
                                        <span class="glyphicon glyphicon-list-alt"></span>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    </h4>
                                </a>
                            </div>
                            


                            <div class="break"></div>
                        </div>
                        <!-- end item -->
                        <!-- item -->
                        <div class="row-item row">
                            <h3><a href="category.html">Category</a> | 	
                                <small><a href="category.html"><i>subtitle</i></a>/</small>
                                <small><a href="category.html"><i>subtitle</i></a>/</small>
                                <small><a href="category.html"><i>subtitle</i></a>/</small>
                                <small><a href="category.html"><i>subtitle</i></a>/</small>
                                <small><a href="category.html"><i>subtitle</i></a>/</small>
                            </h3>
                            <div class="col-md-8 border-right">
                                <div class="col-md-5">
                                    <a href="detail.html">
                                        <img class="img-responsive" src="image/320x150.png" alt="">
                                    </a>
                                </div>
                                <div class="col-md-7">
                                    <h3>Project Five</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, quo, minima, inventore voluptatum saepe quos nostrum provident .</p>
                                    <a class="btn btn-primary" href="detail.html">View Project <span class="glyphicon glyphicon-chevron-right"></span></a>
                                </div>
                            </div>
                            

                            <div class="col-md-4">
                                <a href="detail.html">
                                    <h4>
                                        <span class="glyphicon glyphicon-list-alt"></span>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    </h4>
                                </a>

                                <a href="detail.html">
                                    <h4>
                                        <span class="glyphicon glyphicon-list-alt"></span>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    </h4>
                                </a>

                                <a href="detail.html">
                                    <h4>
                                        <span class="glyphicon glyphicon-list-alt"></span>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    </h4>
                                </a>

                                <a href="detail.html">
                                    <h4>
                                        <span class="glyphicon glyphicon-list-alt"></span>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    </h4>
                                </a>
                            </div>
                            


                            <div class="break"></div>
                        </div>
                        <!-- end item -->

                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>
@endsection