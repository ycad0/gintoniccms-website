require.config({
  paths: {
    admin: "../vendor/admin-lte",
    "admin-lte": "../vendor/admin-lte/dist/js/app",
    bootstrap: "../vendor/bootstrap/dist/js/bootstrap",
    jquery: "../vendor/jquery/dist/jquery",
    fontawesome: "../vendor/fontawesome/fonts/*",
    ionicons: "../vendor/ionicons/fonts/*"
  },
  shim: {
    "admin/dist/js/app": [
      "jquery"
    ],
    "admin/plugins/jvectormap/jquery-jvectormap-1.2.2.min": [
      "jquery"
    ],
    "admin/plugins/jvectormap/jquery-jvectormap-world-mill-en": [
      "jquery",
      "vendor/jvectormap/jquery-jvectormap-1.2.2.min"
    ],
    "admin/plugins/slimScroll/jquery.slimscroll": [
      "jquery"
    ],
    "admin/dist/js/pages/dashboard2": [
      "jquery",
      "bootstrap"
    ],
    "admin/dist/js/demo": [
      "jquery",
      "bootstrap"
    ]
  },
  packages: [

  ]
});
