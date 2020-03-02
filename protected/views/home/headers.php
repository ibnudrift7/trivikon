<section class="header-baru">
    <div class="prelative container">
        <div class="row">
            <div class="col-md-20">
                <div class="box-content">
                    <div class="title">
                        <p>View Product By Category</p>
                    </div>
                    <div class="content">
                        <div class="view_subdata">
                            <ul class="list-unstyled">
                                <li class="views_c1 view">
                                    <a href="#" onclick="return false;">PET <i class="fa fa-plus"></i></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="/trias/product/view/category/1/cat1/4/cat2/5">Transparent</a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="/trias/product/view/category/1/cat1/4/cat2/5/cat3/8">Coated</a>
                                                </li>
                                                <li>
                                                    <a href="/trias/product/view/category/1/cat1/4/cat2/5/cat3/6">Uncoated</a>
                                                </li>
                                            </ul>
                                    </li>
                                    <li>
                                        <a href="/trias/product/view/category/1/cat1/4/cat2/7">Metallised</a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="/trias/product/view/category/1/cat1/4/cat2/7/cat3/10">Coated</a>
                                                </li>
                                                <li>
                                                    <a href="/trias/product/view/category/1/cat1/4/cat2/7/cat3/9">Uncoated</a>
                                                </li>
                                                </ul>
                                    </li>
                                </ul>
                                </li>
                            </ul>
                            <!-- <div class="clear"></div> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-20">
                <div class="box-content">
                    <div class="title">
                        <p>View Product By Application</p>
                    </div>
                    <div class="content">
                        <div class="view">
                            <a href="#">
                                <p>View Product By Application</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-20">
                <div class="box-content">
                    <div class="title">
                        <p>Search Product</p>
                    </div>
                    <div class="content">
                        <div class="row">
                            <div class="col-md-45">
                                <input type="text">
                            </div>
                            <div class="col-md-15">
                                <div class="search">
                                    <button>Search</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-3"></div>
    </div>
</section>

<script type="text/javascript">
  $(document).ready(function(){
    
    $('ul li.views_c1').on('click', function(){
      
      $('ul li.views_c1').find('ul.dropdown-menu').css('display', 'none');
      $('ul li.views_c1').find('i.fa').removeClass('fa-minus').addClass('fa-plus');
      $('ul li.views_c1').removeClass('addviewn').addClass('view');

      if ($(this).hasClass('view')){
        
        $(this).find('ul.dropdown-menu').css('display', 'block');
        $(this).removeClass('view').addClass('addviewn');
        $(this).find('i.fa').removeClass('fa-plus').addClass('fa-minus');

      } else {
        $(this).find('ul.dropdown-menu').css('display', 'none');
        $(this).find('i.fa').removeClass('fa-minus').addClass('fa-plus');
        $(this).removeClass('addviewn').addClass('view');
      }

      // return false;
    });

  });
</script>