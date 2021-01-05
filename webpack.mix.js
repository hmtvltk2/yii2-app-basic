let mix = require('laravel-mix');
const { CleanWebpackPlugin } = require('clean-webpack-plugin');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const root = 'modules/main/assets';
mix.js(root + '/js/app.js', 'js')
    .sass(root + '/css/app.scss', 'css')
    .setPublicPath('web/assets')
    .extract()
    .vue({ version: 3 });

if (mix.inProduction()) {
    mix.webpackConfig({
        output: {
            filename: '[name].[hash:8].js',
        },
        plugins: [
            new CleanWebpackPlugin(),
            new MiniCssExtractPlugin({
                filename: '[name].[hash:8].css'
            })
        ],
        module: {
            rules: [
                {
                    test: /\.css$/i,
                    resourceQuery: { not: [/\?vue/i] },
                    use: [MiniCssExtractPlugin.loader, 'css-loader'],
                },
            ],
        },
    });
}
