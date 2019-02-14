@extends('admin.layouts.master')
@section('content')
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">@lang('category.category')
                        <small>@lang('category.add')</small>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
                <div class="col-lg-7" style="padding-bottom:120px">
                    @include('commons.errors')
                    <form action="{!! route('admin.cate.getAdd') !!}" method="POST" name="_token" >
                        @csrf
                        <div class="form-group">
                            <label>@lang('category.cateParent')</label>
                            <select class="form-control">
                                <option value="0">@lang('category.please_chose_cate')</option>
                                <?php cate_parent($parent); ?>
                                {{--@foreach($parent as $item)--}}
                                {{--<option value="">{!! $item["name"]!!}</option>--}}
                                {{--@endforeach--}}
                            </select>
                        </div>
                        <div class="form-group">
                            <label>@lang('category.cateName')</label>
                            <input class="form-control" name="txtCateName" placeholder="@lang('category.place_cate_name')" />
                        </div>
                        <div class="form-group">
                            <label>@lang('category.cateOrder')</label>
                            <input class="form-control" name="txtOrder" placeholder="@lang('category.place_cate_order')" />
                        </div>
                        <div class="form-group">
                            <label>@lang('category.cateDes')</label>
                            <textarea class="form-control" rows="3" name="txtDescription"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Category Status</label>
                            <label class="radio-inline">
                                <input name="rdoStatus" value="1" checked="" type="radio">Visible
                            </label>
                            <label class="radio-inline">
                                <input name="rdoStatus" value="2" type="radio">Invisible
                            </label>
                        </div>
                        <button type="submit" class="btn btn-default">@lang('category.cateAdd')</button>
                        <button type="reset" class="btn btn-default">@lang('category.cateReset')</button>
                    </form>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
@endsection