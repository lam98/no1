﻿@extends('main.layouts.app')

{{--
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<link href="{{asset('icomoon/style.css')}}" rel="stylesheet">
<script src="{{asset('sliderengine/jquery.js')}}"></script>
<script src="{{asset('sliderengine/amazingslider.js')}}"></script>
<link rel="stylesheet" type="text/css" href="{{asset('sliderengine/amazingslider-1.css')}}">
<script src="{{asset('sliderengine/initslider-1.js')}}"></script>
--}}

@section('content')

    <!-- Main -->
    <form action="" method="POST" class="search-form"> <!--set the action and method attribute for search form-->
        <fieldset class="search-form__fieldset">
            <legend class="search-form__title--hidden">search</legend>
            <div class="search-form__content">
                <input type="search" placeholder="کالای مورد نظر خود رو جست و جو کنید" class="search-form__input"
                       required>
                <button type="submit" class="search-form__button">
                    <i class="icon-search"></i>
                </button>
            </div>
        </fieldset>
    </form>
    <div class="advantages">
        <ul class="advantages__list">
            <li class="advantages__item">
                <i class="icon-credit-card-alt advantages__icon"></i>
                <p class="advantages__caption">{{__('messages.advantages_item1')}}</p>
            </li>
            <li class="advantages__item">
                <i class="icon-dollar advantages__icon"></i>
                <p class="advantages__caption">{{__('messages.advantages_item2')}}</p>
            </li>
            <li class="advantages__item">
                <i class="icon-grip-horizontal-solid advantages__icon"></i>
                <p class="advantages__caption">{{__('messages.advantages_item3')}}</p>
            </li>
            <li class="advantages__item">
                <i class="icon-checkmark advantages__icon"></i>
                <p class="advantages__caption">{{__('messages.advantages_item4')}}</p>
            </li>
        </ul>
    </div>
    <div class="main-container">
        <div class="special-offers">
            <h1 class="special-offers__title">{{__('messages.offers')}}</h1>

            <div class="row">
            @foreach($products as $product)

                    <div class="col-md-4">

                        <div class="card my-5">
                            @if($product->image == null)
                                <img class="card-img-top" src="{{asset('images/main-banner-01-tn.jpg')}}" class="special-offers__image">
                            @else
                                <img class="card-img-top" src="{{asset('images/'.$product->image)}}" class="special-offers__image">
                            @endif

                            <div class="card-body">


                                <h5 class="card-title">{{$product->title}}</h5>
                                <p><span class="text-success">Description:</span> {!! $product->description !!}</p>
                                <br>
                                <p><span class="text-success">Price:</span> {{$product->price}}</p>

                                <a class="btn btn-primary" href={{route('show.products.details',['id'=>$product->id])}}>{{__('messages.show_more')}}</a>
                            </div>
                        </div>

                    </div>


            @endforeach
            </div>
            <div class="row">
                <div class="col">
                    {{ $products->links() }}

                </div>
            </div>


        </div>

    </div>


    <div>
    </div>


    @push('scripts')


        <script>

            $(function () {

                $('ul.pagination').addClass('justify-content-center');

            })



        </script>
    @endpush


@endsection