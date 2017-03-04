var path = require('path');

module.exports = {
  entry: './frontend/entry.js',
  output: {
    filename: './js/bundle.js',
    path: path.resolve(__dirname, 'assets')
  }
};
