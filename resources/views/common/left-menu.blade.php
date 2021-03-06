<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li>
                <a href="/article">
                    <i class="fa fa-th"></i> <span>Articles</span>
                    <small class="label pull-right bg-green"><?php echo App\Article::all()->count(); ?></small>
                </a>
            </li>
            <li>
                <a href="/category">
                    <i class="fa fa-th"></i> <span>Categories</span>
                </a>
            </li>
            <li>
                <a href="/media">
                    <i class="fa fa-th"></i> <span>Media</span>
                </a>
            </li>
        </ul>
        <ul class="sidebar-menu">
            <li class="header">USERS</li>
            <li>
                <a href="/users">
                    <i class="fa fa-th"></i> <span>Users</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>