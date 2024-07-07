@extends('admin.main')

@section('content')
<main class="dash-content">
    <h1 class="dash-title">Trang chủ / Thêm mới / Sản phẩm</h1>
    <div class="row">
        <div class="col-lg-12">
            <div class="card easion-card">
                <div class="card-header">
                    <div class="easion-card-icon">
                        <i class="fas fa-table"></i>
                    </div>
                    <div class="easion-card-title">Thêm mới sản phẩm</div>
                </div>
                <div class="card-body ">
                    <form action="{{ route('addProgressProduct') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="name_product" class="form-label">Tên sản phẩm</label>
                            <input type="text" class="form-control" id="name_product" placeholder="">
                            @if($errors->has('name'))
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Chọn ảnh sản phẩm</label>
                            <input class="form-control" type="file" id="formFile">
                            @if($errors->has('image'))
                            <span class="text-danger">{{ $errors->first('image') }}</span>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="price_product" class="form-label">Giá sản phẩm</label>
                            <input type="text" class="form-control" id="price_product" placeholder="">
                            @if($errors->has('price'))
                            <span class="text-danger">{{ $errors->first('price') }}</span>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="size_product" class="form-label">Kích thước sản phẩm</label>
                            <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                <option selected>Lựa chọn kích thước</option>
                                <option value="1">S</option>
                                <option value="2">L</option>
                                <option value="3">M</option>
                                <option value="3">XL</option>
                            </select>
                            @if($errors->has('size'))
                            <span class="text-danger">{{ $errors->first('size') }}</span>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="_product" class="form-label">Khuyến mãi</label>
                            <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                <option selected>Khuyến mãi</option>
                                <option value="1">5%</option>
                                <option value="2">10%</option>
                                <option value="3">15%</option>
                                <option value="3">20%</option>
                            </select>
                            @if($errors->has('discount'))
                            <span class="text-danger">{{ $errors->first('discount') }}</span>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="price_product" class="form-label">Danh mục sản phẩm</label>
                            <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                <option selected>Danh mục sản phẩm</option>
                                @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('category_id'))
                            <span class="text-danger">{{ $errors->first('category_id') }}</span>
                            @endif
                        </div>
                        <label for="price_product" class="form-label">Mô tả sản phẩm</label>
                        <textarea>
                            Welcome to TinyMCE!
                        </textarea>
                        <div class="mt-5">
                            <button type="submit" class="btn btn-success">Thêm mới sản phẩm</button>
                            <a href="{{ route('listProduct') }}" type="back" class="btn btn-danger">Hủy</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- Place the first <script> tag in your HTML's <head> -->
<script src="https://cdn.tiny.cloud/1/hbozepm8v83oquejurp97p1x4p1eymqxvifr4r4izmvfi34i/tinymce/7/tinymce.min.js"
    referrerpolicy="origin"></script>

<!-- Place the following <script> and <textarea> tags your HTML's <body> -->
<script>
tinymce.init({
    selector: 'textarea',
    plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount linkchecker',
    toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
});
</script>
@endsection