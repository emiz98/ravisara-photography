</div>
<!-- /page container -->

<!-- Right Sidebar-->
<div id="colorSidebar" class="app-sidebar-content right-sidebar">
    <div class="color-theme">
        <div class="color-theme-header">
            <h3 class="color-theme-title">Service Panel</h3>
            <a href="javascript:void(0)" class="action-btn" id="close-setting-panel">
                <i class="zmdi zmdi-close text-white"></i>
            </a>
        </div>

        <div class="color-theme-body">
            <h3>Light Sidenav</h3>
            <ul class="color-option">
                <li>
                    <a href="javascript:void(0)" class="bg-indigo gx-theme" data-theme="indigo"></a>
                </li>
                <li>
                    <a href="javascript:void(0)" class="bg-cyan gx-theme" data-theme="cyan"></a>
                </li>
                <li>
                    <a href="javascript:void(0)" class="bg-amber gx-theme" data-theme="amber"></a>
                </li>
                <li>
                    <a href="javascript:void(0)" class="bg-deep-orange gx-theme" data-theme="deep-orange"></a>
                </li>
                <li>
                    <a href="javascript:void(0)" class="bg-pink gx-theme" data-theme="pink"></a>
                </li>
                <li>
                    <a href="javascript:void(0)" class="bg-blue gx-theme" data-theme="blue"></a>
                </li>
                <li>
                    <a href="javascript:void(0)" class="bg-deep-purple gx-theme" data-theme="deep-purple"></a>
                </li>
                <li>
                    <a href="javascript:void(0)" class="bg-green gx-theme" data-theme="green"></a>
                </li>
            </ul>
            <h3>Dark Sidenav</h3>
            <ul class="color-option cr-op-dark-sidebar">
                <li>
                    <a href="javascript:void(0)" class="bg-indigo gx-theme" data-theme="dark-indigo"></a>
                </li>
                <li>
                    <a href="javascript:void(0)" class="bg-cyan gx-theme" data-theme="dark-cyan"></a>
                </li>
                <li>
                    <a href="javascript:void(0)" class="bg-amber gx-theme" data-theme="dark-amber"></a>
                </li>
                <li>
                    <a href="javascript:void(0)" class="bg-deep-orange gx-theme" data-theme="dark-deep-orange"></a>
                </li>
                <li>
                    <a href="javascript:void(0)" class="bg-pink gx-theme" data-theme="dark-pink"></a>
                </li>
                <li>
                    <a href="javascript:void(0)" class="bg-blue gx-theme" data-theme="dark-blue"></a>
                </li>
                <li>
                    <a href="javascript:void(0)" class="bg-deep-purple gx-theme" data-theme="dark-deep-purple"></a>
                </li>
                <li>
                    <a href="javascript:void(0)" class="bg-green gx-theme" data-theme="dark-green"></a>
                </li>
            </ul>
            <h3>Dark Theme</h3>
            <div class="material-switch">
                <input id="switch-dark-theme" name="switch-dark-theme" type="checkbox" data-theme="dark" />
                <label for="switch-dark-theme" class="label-default"></label>
            </div>
            <h3 class="d-none d-lg-block">Collapsible Drawer</h3>
            <div class="material-switch d-none d-lg-block">
                <input id="folded-sidebar" type="checkbox" />
                <label for="folded-sidebar" class="label-default"></label>
            </div>
        </div>
    </div>
</div>
<!-- /Right Sidebar-->

<!-- Menu Backdrop -->
<div class="menu-backdrop fade"></div>
<!-- /menu backdrop -->

<!--Load JQuery-->
<script src="{{ asset('admin/node_modules/jquery/dist/jquery.min.js') }}"></script>
<!--Bootstrap JQuery-->
<script src="{{ asset('admin/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
<!--Perfect Scrollbar JQuery-->
<script src="{{ asset('admin/node_modules/perfect-scrollbar/dist/perfect-scrollbar.min.js') }}"></script>
<!--Big Slide JQuery-->
<script src="{{ asset('admin/node_modules/bigslide/dist/bigSlide.min.js') }}"></script>
<!--Owl Carousel JQuery-->
<script src="node_modules/owl.carousel/dist/owl.carousel.min.js"></script>
<!--Custom JQuery-->
<script src="{{ asset('admin/js/functions.js') }}"></script>
<!-- SumemrNote JS -->
<script src="{{ asset('admin/node_modules/summernote/dist/summernote-bs4.js') }}"></script>
<script src="{{ asset('admin/js/custom/editor-summernote.js') }}"></script>
<!-- CKEditor 5 JS -->
<script src="//cdn.ckeditor.com/4.16.1/full/ckeditor.js"></script>
<script src="{{ asset('adminjs/custom/aboutus.js') }}"></script>

{{-- Autofill --}}
<script>
    $("input#txtSecond").on({
        keydown: function(e) {
            if (e.which === 32)
                return false;
        },
        change: function() {
            this.value = this.value.replace(/\s/g, "");
        }
    });
    $(document).ready(function() {
        $('#txtFirst').keyup(function(e) {
            if (e.which !== 32) {
                var txtVal = $(this).val().replace(/\s/g, "");
                $('#txtSecond').val(txtVal);
            }
        });
    });
</script>

<script>
    CKEDITOR.replace('summary-ckeditor');
</script>

</body>

</html>
