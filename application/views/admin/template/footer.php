<footer class="footer">
    <div class="w-100 clearfix">
        <span class="text-center text-sm-left d-md-inline-block">Copyright © <?= date('Y') ?> Agung Hardiyanto.</span>
        <span class="float-none float-sm-right mt-1 mt-sm-0 text-center">Crafted with <i class="fa fa-heart text-danger"></i> by <a href="http://lavalite.org/" class="text-dark" target="_blank">Lavalite</a></span>
    </div>
</footer>
</div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script>
    window.jQuery || document.write('<script src="src/js/vendor/jquery-3.3.1.min.js"><\/script>')
</script>
<script src="<?= base_url('assets/backend/') ?>plugins/popper.js/dist/umd/popper.min.js"></script>
<script src="<?= base_url('assets/backend/') ?>plugins/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?= base_url('assets/backend/') ?>plugins/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script>
<script src="<?= base_url('assets/backend/') ?>plugins/screenfull/dist/screenfull.js"></script>
<script src="<?= base_url('assets/backend/') ?>plugins/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets/backend/') ?>plugins/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url('assets/backend/') ?>plugins/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url('assets/backend/') ?>plugins/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
<script src="<?= base_url('assets/backend/') ?>plugins/jvectormap/jquery-jvectormap.min.js"></script>
<script src="<?= base_url('assets/backend/') ?>plugins/jvectormap/tests/assets/jquery-jvectormap-world-mill-en.js"></script>
<script src="<?= base_url('assets/backend/') ?>plugins/moment/moment.js"></script>
<script src="<?= base_url('assets/backend/') ?>plugins/tempusdominus-bootstrap-4/build/js/tempusdominus-bootstrap-4.min.js"></script>
<script src="<?= base_url('assets/backend/') ?>plugins/d3/dist/d3.min.js"></script>
<script src="<?= base_url('assets/backend/') ?>plugins/c3/c3.min.js"></script>
<script src="<?= base_url('assets/backend/') ?>plugins/summernote/dist/summernote-bs4.min.js"></script>
<script src="<?= base_url('assets/backend/') ?>js/tables.js"></script>
<script src="<?= base_url('assets/backend/') ?>js/widgets.js"></script>
<script src="<?= base_url('assets/backend/') ?>js/charts.js"></script>
<script src="<?= base_url('assets/backend/') ?>dist/js/theme.min.js"></script>
<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->

<script>
    var base_url = "<?= base_url() ?>";
</script>
<script src="<?= base_url('assets/backend/js/script.js') ?>"></script>
<script>
    (function(b, o, i, l, e, r) {
        b.GoogleAnalyticsObject = l;
        b[l] || (b[l] =
            function() {
                (b[l].q = b[l].q || []).push(arguments)
            });
        b[l].l = +new Date;
        e = o.createElement(i);
        r = o.getElementsByTagName(i)[0];
        e.src = 'https://www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e, r)
    }(window, document, 'script', 'ga'));
    ga('create', 'UA-XXXXX-X', 'auto');
    ga('send', 'pageview');
</script>
</body>

</html>