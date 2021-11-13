<aside class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{ asset('skodashadmin') }}/assets/img/logo1.png" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text">Kronnos</h4>
        </div>
        <div class="toggle-icon ms-auto"><i class="bi bi-chevron-double-left"></i>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li>
            <a href="{{ route('home') }}">
                <div class="parent-icon"><i class="bi bi-house-door"></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
        </li>
        <li class="menu-label">ADMINISTRATIVO</li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bi bi-award"></i>
                </div>
                <div class="menu-title">Usuarios</div>
            </a>
            <ul>
                <li> <a href="{{ route('users') }}"><i class="bi bi-arrow-right-short"></i>Listado Usuarios</a>
                </li>
                <li> <a href="widgets-data-widgets.html"><i class="bi bi-arrow-right-short"></i>Roles Y Permisos</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bi bi-bag-check"></i>
                </div>
                <div class="menu-title">Tablas del sistema</div>
            </a>
            <ul>
                <li> <a href="ecommerce-products-list.html"><i class="bi bi-arrow-right-short"></i>Products
                        List</a>
                </li>
                <li> <a href="ecommerce-products-grid.html"><i class="bi bi-arrow-right-short"></i>Products
                        Grid</a>
                </li>
                <li> <a href="ecommerce-products-categories.html"><i class="bi bi-arrow-right-short"></i>Categories</a>
                </li>
                <li> <a href="ecommerce-orders.html"><i class="bi bi-arrow-right-short"></i>Orders</a>
                </li>
                <li> <a href="ecommerce-orders-detail.html"><i class="bi bi-arrow-right-short"></i>Order
                        details</a>
                </li>
                <li> <a href="ecommerce-add-new-product.html"><i class="bi bi-arrow-right-short"></i>Add New
                        Product</a>
                </li>
                <li> <a href="ecommerce-add-new-product-2.html"><i class="bi bi-arrow-right-short"></i>Add New
                        Product 2</a>
                </li>
                <li> <a href="ecommerce-transactions.html"><i class="bi bi-arrow-right-short"></i>Transactions</a>
                </li>
            </ul>
        </li>
    </ul>
    <!--end navigation-->
</aside>
