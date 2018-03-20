
@extends('layout')
@section('content')
<section class="posts container">
    <article class="post no-image">
        <div class="content-post">
            <header class="container-flex space-between">
                <div class="date">
                    <span class="c-gray-1">sep 20</span>
                </div>
                <div class="post-category">
                    <span class="category text-capitalize">i do travel</span>
                </div>
            </header>
            <h1>No difference how many peaks you reach if there was no pleasure in the climb.</h1>
            <div class="divider"></div>
            <p>Quisque congue lacus mattis massa luctus, nec hendrerit purus aliquet. Ut ac elementum urna. Pellentesque suscipit metus et egestas congue. Duis eu pellentesque turpis, ut maximus metus. Sed ultrices tellus vitae rutrum congue. Fusce luctus augue id nisl suscipit, vel sollicitudin orci egestas. Morbi posuere venenatis ipsum, ac vestibulum quam dignissim efficitur. Ut vitae rutrum augue, in volutpat quam. Cras a viverra ipsum. Aenean ut consequat ex, vitae vulputate nunc. Vestibulum metus nisi, aliquam sed tincidunt sit amet, pretium et augue.</p>
            <footer class="container-flex space-between">
                <div class="read-more">
                    <a href="#" class="text-uppercase c-green">read more</a>
                </div>
                <div class="tags container-flex">
                    <span class="tag c-gray-1 text-capitalize">#yosemite</span>
                    <span class="tag c-gray-1 text-capitalize">#peak</span>
                    <span class="tag c-gray-1 text-capitalize">#explorer</span>
                </div>
            </footer>
        </div>
    </article>

    <article class="post w-image">
        <figure><img src="img/php.png" alt="" class="img-responsive"></figure>
        <div class="content-post">
            <header class="container-flex space-between">
                <div class="date">
                    <span class="c-gray-1">sep 18</span>
                </div>
                <div class="post-category">
                    <span class="category text-capitalize">i do observe</span>
                </div>
            </header>
            <h1>CLASES PHP</h1>
            <div class="divider"></div>
            <cite class="cite"></cite>
            <p>PHPPHPHPHPHPHPHPHPHPHPHPPHPHPHPHPHPHP</p>
            <p>PHPHPHPHPHPHPHPHPHPHPHPHPHPHPHPHPHPHPHP</p>
            <footer class="container-flex space-between">
                <div class="read-more">
                    <a href="#" class="text-uppercase c-green">read more</a>
                </div>
                <div class="tags container-flex">
                    <span class="tag c-gray-1 text-capitalize">#yosemite</span>
                    <span class="tag c-gray-1 text-capitalize">#peak</span>
                    <span class="tag c-gray-1 text-capitalize">#photo</span>
                </div>
            </footer>
        </div>
    </article>



</section><!-- fin del div.posts.container -->

<div class="pagination">
    <ul class="list-unstyled container-flex space-center">
        <li><a href="#" class="pagination-active">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
    </ul>
</div>

@endsection