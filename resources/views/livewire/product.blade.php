            <div class="ps-main__wrapper">
                <header class="header--dashboard">
                    <div class="header__left">
                        <h3>Products</h3>
                        <p>Product Listings</p>
                    </div>
                    <div class="header__center">
                        <form class="ps-form--search-bar" action="index.html" method="get">
                            <input class="form-control" type="text" placeholder="Search something">
                            <button><i class="icon-magnifier"></i></button>
                        </form>
                    </div>
                    <div class="header__right"><a class="header__site-link" href="{{ url('/') }}"><span>View your store</span><i class="icon-exit-right"></i></a></div>
                </header>
                <section class="ps-items-listing">
                    <div class="ps-section__actions"><a class="ps-btn success" href="{{ route('add-products') }}"><i class="icon icon-plus mr-2"></i>{{ __('Add Products') }}</a></div>
                    <div class="ps-section__header">
                        <div class="ps-section__filter">
                            <form class="ps-form--filter" action="index.html" method="get">
                                <div class="ps-form__left">
                                    <div class="form-group">
                                        <select class="ps-select">
                                            <option value="1">Select Category</option>
                                            <option value="2">Clothing & Apparel</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <select class="ps-select">
                                            <option value="1">Status</option>
                                            <option value="2">Active</option>
                                            <option value="3">Inactive</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="ps-form__right">
                                    <button class="ps-btn ps-btn--gray"><i class="icon icon-funnel mr-2"></i>Filter</button>
                                </div>
                            </form>
                        </div>
                        <div class="ps-section__search">
                            <form class="ps-form--search-simple" action="index.html" method="get">
                                <input class="form-control" type="text" placeholder="Search product">
                                <button><i class="icon icon-magnifier"></i></button>
                            </form>
                        </div>
                    </div>
                    <div class="ps-section__content">
                        <div class="table-responsive">
                            <table class="table ps-table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>SKU</th>
                                        <th>Stock</th>
                                        <th>Price</th>
                                        <th>Category</th>
                                        <th>Date created</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($data->count())
                                    @foreach ($data as $item)
                                    <tr>
                                        <td>ABH-0</td>
                                        <td><a href="#"><strong>{{ $item->name }}</strong></a></td>
                                        <td>AB123456789-1</td>
                                        <td><span class="ps-badge success">Stock</span>
                                        </td>
                                        <td><strong>{{ $item->price }}</strong></td>
                                        <td>
                                            <p class="ps-item-categories"><a href="#">Bags</a><a href="#">{{ $item->category->name }}</a>
                                            </p>
                                        </td>
                                        <td>{{ $item->created_at }}</td>
                                        <td>
                                            <div class="dropdown"><a id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon-ellipsis"></i></a>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"><a class="dropdown-item"  wire:click="showUpdateModal({{ $item->id }})">{{ __('Update') }}</a><a class="dropdown-item" wire:click="showDeleteModal({{ $item->id }})" wire:loading.attr="disabled">{{ __('Delete') }}</a></div>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                    @else
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="ps-section__footer">
                        <p>No Result Found</p>
                    </div>
                    @endif
                    {{ $data->links() }}
                    <x-jet-dialog-modal wire:model="visibleModalForm">
                        <x-slot name="title">
                            {{ __('Form Add Product') }}
                        </x-slot>
                        <x-slot name="content">
                            <div class="mt-4">
                                <x-jet-label for="name" value="{{ __('Product Name') }}" />
                                <x-jet-input type="text" class="mt-1 block w-3/4" placeholder="{{ __('Product Name') }}" wire:model="name" />
                                <x-jet-input-error for="name" class="mt-2" />
                            </div>
                            <div class="mt-4">
                                <x-jet-label for="title" value="{{ __('Slug') }}" />
                                <div class="mt-1 flex w-3/4">
                                    <span class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                                        http://localhost:8000/
                                    </span>
                                    <input type="text" wire:model="slug" class="mt-1 block w-3/4 form-control border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-r-md shadow-sm" placeholder="url-slug" readonly />
                                </div>
                                <x-jet-input-error for="slug" class="mt-2" />
                            </div>
                            <div class="mt-4">
                                <x-jet-label for="price" value="{{ __('Price') }}" />
                                <x-jet-input type="text" class="mt-1 block w-3/4" placeholder="{{ __('Price') }}" wire:model.defer="price" />
                                <x-jet-input-error for="price" class="mt-2" />
                            </div>
                            <div class="mt-4">
                                <x-jet-label for="categories_id" value="{{ __('Category') }}" />
                                <select wire:model.defer="categories_id" class="js-example-basic-single mt-1 block w-3/4 form-control border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                                    <option selected>-- Choice Categories --</option>
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
                                <x-jet-input-error for="categories_id" class="mt-2" />
                            </div>
                            <div class="mt-4">
                                <x-jet-label for="description" value="{{ __('Description') }}" />
                                <textarea wire:model.defer="description" placeholder="Description" class="mt-1 block w-3/4 form-control border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                                </textarea>
                                <x-jet-input-error for="description" class="mt-2" />
                            </div>
                        </x-slot>
                        <x-slot name="footer">
                            <x-jet-secondary-button wire:click="$toggle('visibleModalForm')">
                                {{ __('Cancel') }}
                            </x-jet-secondary-button>
                            @if ($modelId)
                            <x-jet-danger-button class="ml-2" wire:click="createOrUpdate" wire:loading.attr="disabled">
                                {{ __('Update Product') }}
                            </x-jet-danger-button>
                            @else
                            <x-jet-danger-button class="ml-2" wire:click="createOrUpdate" wire:loading.attr="disabled">
                                {{ __('Add Product') }}
                            </x-jet-danger-button>
                            @endif
                        </x-slot>
                    </x-jet-dialog-modal>
                    <!-- Show Delete Modal -->
                    <x-jet-dialog-modal wire:model="confirmDeleteModal">
                        <x-slot name="title">
                            {{ __('Delete Product') }}
                        </x-slot>
                        <x-slot name="content">
                            {{ __('Are you sure you want to delete this Product data ? Once your data is deleted, all of its resources and data will be permanently deleted.') }}
                        </x-slot>
                        <x-slot name="footer">
                            <x-jet-secondary-button wire:click="$toggle('confirmDeleteModal')">
                                {{ __('Cancel') }}
                            </x-jet-secondary-button>
                            <x-jet-danger-button class="ml-2" wire:click="delete" wire:loading.attr="disabled">
                                {{ __('Delete') }}
                            </x-jet-danger-button>
                        </x-slot>
                    </x-jet-dialog-modal>
                </section>
            </div>
        </main>
        