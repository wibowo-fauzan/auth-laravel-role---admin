<!-- script -->
<script type="text/javascript" src="https://glennfredly.com/wp-includes/js/jquery/jquery.min.js" id="jquery-core-js"></script>
<script src="management/management-js/bootloader.js"></script>
<script src="management/js/setporloeader.js"></script>
<script src="management/js/setREVStartSize.js"></script>
<script src="management/js/RS_MODULES.js"></script>
<script src="https://glennfredly.com/wp-includes/js/wp-emoji-release.min.js"></script>
<script type="text/javascript" src="https://glennfredly.com/wp-content/themes/noor/framework/asset/site/js/specific/slick.min.js" id="slick.min-js"> </script>
<script type="text/javascript" src="https://glennfredly.com/wp-content/themes/noor/framework/asset/site/js/vendors.min.js" id="dima-js-vendor-js"></script>
<script type="text/javascript" src="https://glennfredly.com/wp-content/themes/noor/framework/asset/site/js/core/main.js" id="dima-js-main-js"> </script>
<script type="text/javascript" src="https://glennfredly.com/wp-content/themes/noor/framework/asset/site/js/core/modernizr-custom.js" id="modernizr-js-js"></script>
<script type="text/javascript" src="https://glennfredly.com/wp-content/themes/noor/framework/asset/site/js/core/init.js" id="dima_init_js-js"> </script>
<!-- end - script -->
<script>
    <script>
    document.addEventListener("DOMContentLoaded", function() {
        // Mengambil semua tautan dengan kelas scroll-to
        var scrollLinks = document.querySelectorAll('.scroll-to');

        // Menambahkan event listener untuk setiap tautan
        scrollLinks.forEach(function(link) {
            link.addEventListener('click', function(e) {
                e.preventDefault();

                // Mendapatkan target dari atribut href
                var targetId = this.getAttribute('href').substring(1);

                // Menggunakan smooth scroll ke elemen target
                document.getElementById(targetId).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    });
</script>

</script>