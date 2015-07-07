require.config({
    baseUrl: '/',
    urlArgs: 'bust=0',
    paths: {
        app: '/js/app',
        prettify: '//cdn.rawgit.com/google/code-prettify/master/loader/run_prettify',
        'admin-theme': 'vendor/admin-theme/webroot',
        'gintonic-cms': 'vendor/gintonic-cms/webroot',
        'twbs-theme': 'vendor/twbs-theme/webroot',
        'admin-lte': 'vendor/admin-lte/dist/js/app',
        bootstrap: 'vendor/bootstrap/dist/js/bootstrap',
        fontawesome: 'vendor/fontawesome/fonts/*',
        ionicons: 'vendor/ionicons/fonts/*',
        jquery: 'vendor/jquery/dist/jquery',
        'jsx-requirejs-plugin': 'vendor/jsx-requirejs-plugin/js/jsx',
        react: 'vendor/react/react',
        'requirejs-text': 'vendor/requirejs-text/text'
    },
    shim: {

    },
    packages: [

    ]
});
