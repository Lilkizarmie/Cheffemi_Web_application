        <div class="ps-main__wrapper">
            <header class="header--dashboard">
                <div class="header__left">
                    <h3>Categories</h3>
                    <p>Product Categories</p>
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
                <div class="ps-section__actions"><a class="ps-btn success" href="{{ route('add-categories') }}"><i class="icon icon-plus mr-2"></i>{{ __('Add Category') }}</a></div>
                <div class="ps-section__header">
                    <div class="ps-section__filter">
                        <form class="ps-form--filter" action="index.html" method="get">
                            <div class="ps-form__left">
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
                            <input class="form-control" type="text" placeholder="Search Category">
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
                                    <th>Description</th>
                                    <th>Stock</th>
                                    <th>Date Created</th>
                                    <th>Date Updated</th>
                                    <th>Edit</th>
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
                                    <td>{{ $item->created_at }}</td>
                                    <td>{{ $item->updated_at }}</td>
                                    <td>
                                        <div class="dropdown"><a id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon-ellipsis"></i></a>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <button class="dropdown-item" wire:click="showUpdateModal({{ $item->id }})">{{ __('Update') }}</button>
                                                <button class="dropdown-item" class="ml-2" wire:click="showDeleteModal({{ $item->id }})" wire:loading.attr="disabled">{{ __('Delete') }}</button>
                                            </div>
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
            </section>
            {{ $data->links() }}
        </div>
        <x-jet-dialog-modal wire:model="confirmDeleteModal">
            <x-slot name="title">
                {{ __('Delete Category') }}
            </x-slot>
        <x-slot name="content">
                    {{ __('Are you sure you want to delete this Product Category data ? Once your data is deleted, all of its resources and data will be permanently deleted.') }}
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
    </main>
    