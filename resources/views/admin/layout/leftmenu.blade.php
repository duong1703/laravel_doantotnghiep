<div class="dash-nav ">
    <header>
        <a href="javascript::void()" class="menu-toggle">
            <i class="fas fa-bars"></i>
        </a>
        <a href="/views/admin/pages/home" class="easion-logo"><img src="{{ asset('img/tokyolife.png') }}" alt="Logo" height="50px" width="120px" style="text-ali"></a>
    </header>
    <nav class="dash-nav-list">
        <a href="/views/admin/pages/home" class="dash-nav-item">
            <i class="fas fa-home"></i> Thống kê </a>
        <div class="dash-nav-dropdown">
            <a href="javascript::void(0)" class="dash-nav-item dash-nav-dropdown-toggle">
                <i class="fas fa-users"></i> Tài khoản </a>
            <div class="dash-nav-dropdown-menu">
                <a href="{{ route('listAccount') }}" class="dash-nav-dropdown-item">Danh sách</a>
                <a href="{{ route('addAccount') }}" class="dash-nav-dropdown-item">Thêm mới</a>
            </div>
        </div>
        <div class="dash-nav-dropdown">
            <a href="javascript::void(0)" class="dash-nav-item dash-nav-dropdown-toggle">
                <i class="fas fa-cube"></i> Sản phẩm </a>
            <div class="dash-nav-dropdown-menu">
                <a href="{{ route('listProduct') }}" class="dash-nav-dropdown-item">Danh sách</a>
                <a href="{{ route('addProduct') }}" class="dash-nav-dropdown-item">Thêm mới</a>
            </div>
        </div>
        <div class="dash-nav-dropdown">
            <a href="javascript::void(0)" class="dash-nav-item dash-nav-dropdown-toggle">
                <i class="fa fa-bookmark"></i> Bộ sưu tập </a>
            <div class="dash-nav-dropdown-menu">
                <a href="comment-list.html" class="dash-nav-dropdown-item">Danh sách</a>
                <a href="comment-add.html" class="dash-nav-dropdown-item">Thêm mới</a>
            </div>
        </div>
        <div class="dash-nav-dropdown">
            <a href="javascript::void(0)" class="dash-nav-item dash-nav-dropdown-toggle">
                <i class="fa fa-box"></i> Đơn hàng </a>
            <div class="dash-nav-dropdown-menu">
                <a href="comment-list.html" class="dash-nav-dropdown-item">Danh sách</a>
            </div>
        </div>
        <a href="contacts.html" class="dash-nav-item">
            <i class="fas fa-info"></i>Liên hệ
        </a>
    </nav>
</div>