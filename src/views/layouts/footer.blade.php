<footer class="footer background-is-white site-footer">
    <div class="container is-fluid">
        <div class="content has-text-centered">
            <p>
                <strong>{{isset($name) ? $name: null}}</strong> &copy; <?php $copyYear = 2012; $curYear = date('Y'); echo $copyYear . (($copyYear != $curYear) ? '-' . $curYear : '');?>
            </p>
            <p>
                <a class="icon">
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
                <a class="icon color-is-info">
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
                <a class="icon color-is-red">
                    <i class="fa fa-google" aria-hidden="true"></i>
                </a>
            </p>
        </div>
    </div>
</footer>
