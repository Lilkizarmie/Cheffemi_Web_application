    <div class="ps-main__wrapper">
        <header class="header--dashboard">
            <div class="header__left">
                <h3>New Category</h3>
                <p>Add new category</p>
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
                                        <label>Category Name<sup>*</sup>
                                        </label>
                                        <input class="form-control" type="text" placeholder="Enter category name..." wire:model.defer="name">
                                    </div>
                                    <div class="form-group form-group--select">
                                        <label>Status<sup>*</sup>
                                        </label>
                                        <div class="form-group__content">
                                            <select class="ps-select" title="Status">
                                                <option value="1">Active</option>
                                                <option value="2">InActive</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Category Summary<sup>*</sup>
                                        </label>
                                        <textarea class="form-control" rows="6" placeholder="Enter product description..." wire:model.defer="description"></textarea>
                                    </div>
                                </div>
                            </figure>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <figure class="ps-block--form-box">
                                <figcaption>Category Images</figcaption>
                                <div class="ps-block__content">
                                    <div class="form-group">
                                        <label>Category Thumbnail</label>
                                        <div class="form-group--nest">
                                            <input class="form-control mb-1" type="text" placeholder="" wire:model.defer="thumbnail">
                                            <button class="ps-btn ps-btn--sm">Choose</button>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Tags
                                        </label>
                                        <input class="form-control" type="text" placeholder="Category tags" wire:model="tags">
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>
                </div>
                <div class="ps-form__bottom"><a class="ps-btn ps-btn--black" href="{{ route('categories') }}">{{ __('Cancel') }}</a>
                    @if ($modelId)
                    <button class="ps-btn ps-btn--gray" wire:click="createOrUpdate" wire:loading.attr="disabled">{{ __('Update Category') }}</button>
                    @else
                    <button class="ps-btn" wire:click="createOrUpdate" wire:loading.attr="disabled">{{ __('Add Category') }}</button>
                    @endif
                </div>
            </form>
        </section>
    </div>
</main>