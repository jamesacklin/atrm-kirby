# All the Right Moves

All the Right Moves is a screencast highlighting and demystifying UI animations on the Web. This series includes CSS animation tutorials and reviews of emergent and interesting animated interfaces. All the Right Moves is hosted by [Val Head](http://www.valhead.com/), a designer and interface animation consultant.

## Development

This site is powered by [Kirby](http://www.getkirby.com), a file-based CMS that runs on PHP. It uses [Gulp](http://www.gulpjs.com) for task automation (chiefly compiling [Sass](https://www.npmjs.com/package/gulp-sass) and browser reloading) and [Bower](http://www.bower.io) for dependency management.

To get the site up and running locally, you will need to have [Node.js](http://www.nodejs.org) and [PHP](http://www.php.org) installed and in your PATH.

Clone this repo and enter the following incantations into your Terminal:

```
npm install
bower install
php -S 127.0.0.1:8000 & gulp
```

This will do the following:

1. Install all Node.js packages, found in `package.json`.
2. Install all Bower-managed dependencies, found in `bower.json`.
3. Start a simple PHP server on port 8000 and start the default Gulp task.
4. Open a browser window pointed to `http://localhost:3000`.

You can now start making changes as your heart desires.
