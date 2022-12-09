    <div class="ps-main__wrapper">
        <header class="header--dashboard">
            <div class="header__left">
                <h3>Coupons</h3>
                <p>Manage Counpon Listing</p>
            </div>
            <div class="header__center">
                <form class="ps-form--search-bar" action="index.html" method="get">
                    <input class="form-control" type="text" placeholder="Search something">
                    <button><i class="icon-magnifier"></i></button>
                </form>
            </div>
            <div class="header__right"><a class="header__site-link" href="#"><span>View your store</span><i class="icon-exit-right"></i></a></div>
        </header>
        <section class="ps-dashboard ps-items-listing">
            <div class="ps-section__left">
                <div class="table-responsive">
                    <table class="table ps-table">
                        <thead>
                            <tr>
                                <th>Code</th>
                                <th>Percent</th>
                                <th>Currency</th>
                                <th>Created at</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>MARTFURY-2020</strong></td>
                                <td>10%</td>
                                <td>$50.00</td>
                                <td>Jul 21, 2020</td>
                                <td><span class="ps-badge gray">Expired</span></td>
                                <td>
                                    <div class="dropdown"><a id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon-ellipsis"></i></a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"><a class="dropdown-item" href="#">Edit</a><a class="dropdown-item" href="#">Delete</a></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><strong>MARTFURY-MID2020</strong></td>
                                <td>5%</td>
                                <td>$25.00</td>
                                <td>Jul 21, 2020</td>
                                <td><span class="ps-badge gray">Expired</span></td>
                                <td>
                                    <div class="dropdown"><a id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon-ellipsis"></i></a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"><a class="dropdown-item" href="#">Edit</a><a class="dropdown-item" href="#">Delete</a></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><strong>SUMMERHOT</strong></td>
                                <td>7.5%</td>
                                <td>$50.00</td>
                                <td>Jul 21, 2020</td>
                                <td><span class="ps-badge gray">Expired</span></td>
                                <td>
                                    <div class="dropdown"><a id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon-ellipsis"></i></a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"><a class="dropdown-item" href="#">Edit</a><a class="dropdown-item" href="#">Delete</a></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><strong>EXLORE2020</strong></td>
                                <td>3%</td>
                                <td>$10.00</td>
                                <td>Jul 21, 2020</td>
                                <td><span class="ps-badge gray">Expired</span></td>
                                <td>
                                    <div class="dropdown"><a id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon-ellipsis"></i></a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"><a class="dropdown-item" href="#">Edit</a><a class="dropdown-item" href="#">Delete</a></div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><strong>LAPTOP2020</strong></td>
                                <td>10%</td>
                                <td>$50.00</td>
                                <td>Jul 21, 2020</td>
                                <td><span class="ps-badge gray">Expired</span></td>
                                <td>
                                    <div class="dropdown"><a id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon-ellipsis"></i></a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"><a class="dropdown-item" href="#">Edit</a><a class="dropdown-item" href="#">Delete</a></div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="ps-section__footer">
                    <p>Show 5 in 30 items.</p>
                    <ul class="pagination">
                        <li><a href="#"><i class="icon icon-chevron-left"></i></a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#"><i class="icon-chevron-right"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="ps-section__right">
                <form class="ps-form ps-form--new" action="index.html" method="get">
                    <div class="ps-form__header">
                        <h4>New Coupon</h4>
                    </div>
                    <div class="ps-form__content">
                        <div class="form-group">
                            <label>Coupon Code
                            </label>
                            <input class="form-control" type="text" placeholder="placeholder">
                        </div>
                        <div class="form-group">
                            <label>By Percent
                            </label>
                            <input class="form-control" type="text">
                        </div>
                        <div class="form-group">
                            <label>By Currency
                            </label>
                            <input class="form-control" type="text">
                        </div>
                        <div class="form-group">
                            <label>Expired Date
                            </label>
                            <input class="form-control" type="text">
                        </div>
                        <div class="form-group">
                            <label>Description
                            </label>
                            <textarea class="form-control" rows="6" placeholder="Enter category description"></textarea>
                        </div>
                    </div>
                    <div class="ps-form__bottom">
                        <button class="ps-btn ps-btn--gray">Reset</button>
                        <button class="ps-btn ps-btn--sumbit success">Add new</button>
                    </div>
                </form>
            </div>
        </section>
    </div>
</main>