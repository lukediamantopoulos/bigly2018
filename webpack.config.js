const webpack = require('webpack');
const path = require('path');
const ExtractTextPlugin = require('extract-text-webpack-plugin');

module.exports = {
	entry: {
		app: [
			'./src/app.js',
			'./src/styles/app.scss'
		]
	},
	output: {
		path: path.resolve(__dirname, './dist'),
		filename: 'scripts/[name].js'
	},
	module: {
		rules: [
			{
				test: /\.scss$/,
		        use: ExtractTextPlugin.extract({
		          fallback: 'style-loader',
		          //resolve-url-loader may be chained before sass-loader if necessary
		          use: ['css-loader', 'sass-loader']
		        })
			},
			{ 
				test: /\.js$/, 
				exclude: /node_modules/, 
				loader: "babel-loader" 
			}
		]
	},
	plugins: [
		new ExtractTextPlugin('styles/[name].css')
	]
}
