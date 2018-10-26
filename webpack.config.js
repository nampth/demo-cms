const VueLoaderPlugin = require('vue-loader/lib/plugin')
module.exports = {
    module: {
        rules: [
            {
                test: /\.vue$/,
                exclude: /node_modules/,
                loader: 'vue-loader'
            },
            {
                test: /\.js$/,
                exclude: /node_modules/,
                use: {
                    loader: 'babel-loader'
                }
            }
        ],
        resolve: {
            extensions: ['.js'],
            alias: {
                'vue': 'vue/dist/vue.common.js'
            }
        },
    },
    plugins: [
        // make sure to include the plugin!
        new VueLoaderPlugin()
    ]
};

module.exports = {
    // ...
    resolve: {
        alias: {
            'vue$': 'vue/dist/vue.esm.js' // 'vue/dist/vue.common.js' for webpack 1
        }
    }
}