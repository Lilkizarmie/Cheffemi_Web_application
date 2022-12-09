    <div class="ps-main__wrapper">
        <header class="header--dashboard">
            <div class="header__left">
                <h3>New Product</h3>
                <p>Add new product</p>
            </div>
            <div class="header__center">
                <form class="ps-form--search-bar" action="index.html" method="get">
                    <input class="form-control" type="text" placeholder="Search something">
                    <button><i class="icon-magnifier"></i></button>
                </form>
            </div>
            <div class="header__right"><a class="header__site-link" href="#"><span>View your store</span><i class="icon-exit-right"></i></a></div>
        </header>
        <section class="ps-new-item">
            <form class="ps-form ps-form--new-product" action="index.html" method="get">
                <div class="ps-form__content">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <figure class="ps-block--form-box">
                                <figcaption>General</figcaption>
                                <div class="ps-block__content">
                                    <div class="form-group">
                                        <label>Product Name<sup>*</sup>
                                        </label>
                                        <input class="form-control" type="text" placeholder="Enter product name..." wire:model="name">
                                    </div>
                                    <div class="form-group form-group--select">
                                        <label>Category<sup>*</sup>
                                        </label>
                                        <div class="form-group__content">
                                            <select class="ps-select" title="Brand">
                                                <option selected>-- Choose Categories --</option>
                                                @if($categories)
                                                @foreach($categories as $cat)
                                                @if($cat->id == $categories_id)
                                                <option value="{{ $cat->id }}" selected>{{ $cat->name }}</option>
                                                @else
                                                <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                                @endif
                                                @endforeach
                                                @endif
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Regular Price<sup>*</sup>
                                        </label>
                                        <input class="form-control" type="text" placeholder="Price" wire:model.defer="reg_price">
                                    </div>
                                    <div class="form-group">
                                        <label>Sale Price</label>
                                        <input class="form-control" type="text" placeholder="" wire:model.defer="sale_price">
                                    </div>
                                    <div class="form-group">
                                        <label>Sale Quantity<sup>*</sup>
                                        </label>
                                        <input class="form-control" type="text" placeholder="Input quantity" wire:model.defer="stock">
                                    </div>
                                    <div class="form-group">
                                        <label>Product Description<sup>*</sup></label>
                                        <textarea id="summernote" rows="6" name="editordata" wire:model.defer="description"></textarea>
                                    </div>
                                </div>
                            </figure>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <figure class="ps-block--form-box">
                                <figcaption>Product Images</figcaption>
                                <div class="ps-block__content">
                                    <div class="form-group">
                                        <label>Product Thumbnail</label>
                                        <div class="form-group--nest">
                                            <input class="form-control mb-1" type="text" placeholder="" wire:model.defer="thumbnail">
                                            <button class="ps-btn ps-btn--sm">Choose</button>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Product Gallery</label>
                                        <div class="form-group--nest">
                                            <input class="form-control mb-1" type="text" placeholder="" wire:model.defer="image_gallery1">
                                            <button class="ps-btn ps-btn--sm">Choose</button>
                                        </div>
                                    </div>
                                    <div class="form-group form-group--nest">
                                        <input class="form-control mb-1" type="text" placeholder="" wire:model.defer="image_gallery2">
                                        <button class="ps-btn ps-btn--sm">Choose</button>
                                    </div>
                                </div>
                            </figure>
                            <figure class="ps-block--form-box">
                                <figcaption>Inventory</figcaption>
                                <div class="ps-block__content">
                                    <div class="form-group">
                                        <label>SKU<sup>*</sup>
                                        </label>
                                        <input class="form-control" type="text" placeholder="">
                                    </div>
                                </div>
                            </figure>
                            <figure class="ps-block--form-box">
                                <figcaption>Meta</figcaption>
                                <div class="ps-block__content">
                                    <div class="form-group">
                                        <label>Tags
                                        </label>
                                        <input class="form-control" type="text" wire:model="tags">
                                    </div>
                                    <div class="form-group">
                                        <label>Slug
                                        </label>
                                        <input class="form-control" type="text" wire:model="slug" placeholder="url-slug" readonly>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>
                </div>
                <div class="ps-form__bottom"><a class="ps-btn ps-btn--black" href="{{ route('products') }}">{{ __('Cancel') }}</a>
                    @if ($modelId)
                    <button class="ps-btn ps-btn--gray" wire:click="createOrUpdate" wire:loading.attr="disabled"> {{ __('Update Product') }}</button>
                    @else
                    <button class="ps-btn" wire:click="createOrUpdate" wire:loading.attr="disabled">{{ __('Add Product') }}</button>
                    @endif
                </div>
            </form>
        </section>
    </div>
</main>