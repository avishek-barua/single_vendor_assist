 <!-- Single Prodect -->
    <div class="product">
        <div class="thumb" style="background-color: #F7F8FA">
            <a href="{{ route('bundle', $bundle) }}" class="image">
                <img src="{{asset('/assets/images/bundle/bundle_default_image.png')}}" alt="Product" height="300px" width="280px" style="object-fit: contain"/>
                <img class="hover-image" src="{{asset('/assets/images/bundle/bundle_default_image.png')}}"
                     alt="Product"  height="270px" width="300px" style="object-fit: contain"/>
            </a>
            <span class="badges">
                                                    <span class="new">New</span>
                                                </span>
        </div>
        <div class="content">
                                                <span class="ratings">
                                                    <span class="rating-wrap">
                                                        <span class="star" style="width: 100%"></span>
                                                    </span>
                                                    <span class="rating-num">( 5 Review )</span>
                                                </span>
            <h5 class="title"><a href="{{ route('bundle', $bundle) }}">{{ $bundle->name }}
                </a>
            </h5>
            <span class="price">
                                                    <span class="new"> BDT {{ $bundle->products()->sum('unit_price') }}</span>
                                                </span>
        </div>
        <button title="Add To Cart" class=" add-to-cart">Add
            To Cart
        </button>
    </div>

