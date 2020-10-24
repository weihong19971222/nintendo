@extends('layouts/app2')

@section('css')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endsection

@section('content')
<form method="POST" action="/admin/products/{{$product->id}}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="products_name">商品名稱</label>
        <input name="products_name" type="text" class="form-control" id="products_name" required value="{{$product->products_name}}">
    </div>
    <div class="form-group">
        <label for="products_image">上傳商品圖片</label>
        <input name="products_image" type="file" class="form-control-file" id="products_image">
    </div>
    <div class="form-group">
        <p>目前的圖片</p>
        <img src="{{$product->products_image}}" width="150px" alt="">
    </div>
    <div class="form-group">
        <label for="products_type">商品分類</label>
        <select class="form-control" name="products_type" id="products_type">
            <option value="host">主機</option>
            <option value="controller">控制器</option>
            <option value="Amiibo">Amiibo</option>
            <option value="charger">充電器</option>
            <option value="other">其他</option>
        </select>
    </div>
    <div class="form-group">
        <label for="products_price">商品價錢</label>
        <input name="products_price" type="text" class="form-control" id="products_price" required value="{{$product->products_price}}">
    </div>
    <div class="form-group">
        <label for="products_quantity">商品數量</label>
        <input name="products_quantity"  value="{{$product->products_quantity}}"type="number" class="form-control" id="products_quantity" min="0" step="1" required>
    </div>
    <div class="form-group">
        <label for="sort">排序</label>
        <input name="sort" type="number" class="form-control" id="sort" required min="0" step="1" value="{{$product->sort}}">
    </div>
    <div class="form-group">
        <label for="products_info">商品資訊</label>
        <textarea name="products_info" class="form-control" id="products_info" cols="30" rows="10">{{$product->products_name}}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">送出資料</button>
</form>
@endsection

@section('js')


@endsection
