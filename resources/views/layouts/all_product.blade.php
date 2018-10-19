@extends('main.layouts.app')



@section('content')

    <div class="row rtl text-right my-5">
        <div class="col-md-3 category">
            <ul class="list-group category__list">
                <h6 class="category__title">دسته بندی نتایج</h6>
                <li class="list-group-item category__item">مردانه</li>
                <ul class="list-group category__sub-list">
                    <li class="list-group-item category__item">کاپشن، پالتو و بارانی مردانه</li>
                    <li class="list-group-item category__item">ژاکت و پلیور مردانه</li>
                    <li class="list-group-item category__item">سویشرت و هودی مردانه</li>
                    <li class="list-group-item category__item">تی‌شرت و پولوشرت مردانه</li>
                    <li class="list-group-item category__item">پیراهن مردانه</li>
                    <li class="list-group-item category__item">کت و شلوار مردانه</li>
                </ul>
            </ul>


            <div class="card ltr my-3 search-card">
                <h5 class="card-header">:جستجو در نتایج</h5>
                <div class="card-body">
                    <div class="input-group mb-3">
                        <input type="text" style="font-size: 12px" class="form-control text-right" placeholder="نام محصول مورد نظر را بنویسید" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="button"><i class="fas fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card ltr my-3 filter">
                <h5 class="card-header">:برند</h5>
                <div class="card-body">
                    <div class="input-group mb-3">
                        <input type="text" style="font-size: 12px" class="form-control text-right" placeholder="نام محصول مورد نظر را بنویسید" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="button"><i class="fas fa-search"></i></button>
                        </div>
                    </div>
                    <ul class="list-group rtl filter-list">
                        <li class="list-group-item category__item"><input type="checkbox" class="filter-list__input ml-2" aria-label="Checkbox for following text input">Morbi leo risus</li>
                        <li class="list-group-item category__item"><input type="checkbox" class="filter-list__input ml-2" aria-label="Checkbox for following text input">Porta ac consectetur ac</li>
                        <li class="list-group-item category__item"><input type="checkbox" class="filter-list__input ml-2" aria-label="Checkbox for following text input">Vestibulum at eros</li>
                    </ul>
                </div>
            </div>

        </div>
        <div class="col-md-9">
            <div class="row">
                <div class="col-md-6 col-lg-3 mb-3">
                    <div class="card card-product">
                        <img class="card-img-top" src="{{ asset('images/1536172717.jpg') }}" alt="Card image cap">
                        <div class="card-body card-product__body">
                            <div class="card-product__text">
                                <p class="card-text">محصول آزمایشی</p>
                            </div>
                            <p class="text-danger">تومان10000</p>
                            <a href="#" class="btn btn-primary">مشاهده</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-3">
                    <div class="card card-product">
                        <img class="card-img-top" src="{{ asset('images/1536172717.jpg') }}" alt="Card image cap">
                        <div class="card-body card-product__body">
                            <div class="card-product__text">
                                <p class="card-text">محصول آزمایشی</p>
                            </div>
                            <p class="text-danger">تومان10000</p>
                            <a href="#" class="btn btn-primary">مشاهده</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-3">
                    <div class="card card-product">
                        <img class="card-img-top" src="{{ asset('images/1536172717.jpg') }}" alt="Card image cap">
                        <div class="card-body card-product__body">
                            <div class="card-product__text">
                                <p class="card-text">محصول آزمایشی</p>
                            </div>
                            <p class="text-danger">تومان10000</p>
                            <a href="#" class="btn btn-primary">مشاهده</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-3">
                    <div class="card card-product">
                        <img class="card-img-top" src="{{ asset('images/1536172717.jpg') }}" alt="Card image cap">
                        <div class="card-body card-product__body">
                            <div class="card-product__text">
                                <p class="card-text">محصول آزمایشی</p>
                            </div>
                            <p class="text-danger">تومان10000</p>
                            <a href="#" class="btn btn-primary">مشاهده</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection