@extends('basis')
@section('content')
    <main>
    <div class="container">
        <ol class="breadcrumb breadcrumb_border">
            <li><a href="/">Subscription List</a></li>
            <li class="active">Subscription A</li>
        </ol>
        <div class="col-md-12">            <h2><span class="subdetail_header">Subscription A</span><small class="subscription__label_left subscription__label_best">best seller</small></h2>
        </div>
        <div class="col-xs-12 col-md-4">
            <div class="field-image-big">
                <img alt="IMAGE" class="field-image-big_img active" id="pic-1">
                <img alt="IMAGE" class="field-image-big_img" id="pic-2">
                <img alt="IMAGE" class="field-image-big_img" id="pic-3">
            </div>
            <div class="field-image-list">
                <a data-target="pic-1" href="#"><img class="field-image-list_img"></a>
                <a data-target="pic-2" href="#"><img class="field-image-list_img"></a>
                <a data-target="pic-3" href="#"><img class="field-image-list_img"></a>
            </div>

        </div>
        <div class="col-xs-12 col-md-8">
            <article>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
            </article>
            <div class="subdetail__rate">
                <p>from $99.99 / month</p>
                <p>Free trial 30 days</p>
                <form method="get">
                    <input type="submit" value="TRY NOW" class="button">
                </form>
            </div>
        </div>
    </div>
    </main>
@endsection