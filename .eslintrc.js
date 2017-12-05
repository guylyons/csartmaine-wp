module.exports = {
  env: {
    browser: true,
    node: true,
    es6: true
  },
  parserOptions: {
    ecmaVersion: 6,
    sourceType: "module"
  },
  plugins: ["editorconfig"],
  extends: "eslint:recommended",
  rules: {
    indent: ["error", 2],
    "linebreak-style": ["error", "unix"],
    quotes: ["error", "double"],
    semi: ["error", "always"]
  }
};
