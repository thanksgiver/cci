module.exports = function(grunt) {
  'use strict';
  require('time-grunt')(grunt);
  require('jit-grunt')(grunt);
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    /**
     * Minify Image
     * @link: https://github.com/gruntjs/grunt-contrib-imagemin
     */
    imagemin: {
      options: {
        // [PNG] Select optimization level between 0 and 7
        optimizationLevel: 3,
        // [JPG] Lossless conversion to progressive
        progressive: true,
        // [SVG] svgoPlugins Settings
        svgoPlugins: [{
          removeViewBox: false,
          removeUselessStrokeAndFill: false,
          removeEmptyAttrs: true,
          removeAttrs: {
            attrs: ['xmlns']
          }
        }],
      },
      dynamic: {
        files: [{
          expand: true,
          cwd: '<%= pkg.dev_img %>/',
          src: ['**/*.{png,jpg,gif,svg}'],
          dest: '<%= pkg.img %>/'
        }]
      }
    },
    /**
     * Concatenate files
     * @link: https://github.com/gruntjs/grunt-contrib-concat
     */
    concat: {
      options: {
        separator: '\n',
        sourceMap: true,
        stripBanners: true,
        banner: '/*! Theme Name: <%= pkg.name %> | <%= pkg.description %> | version <%= pkg.version %> | Date: ' +
          '<%= grunt.template.today("yyyy-mm-dd") %> */\n',
      },
      dist: {
        src: ['<%= pkg.js %>/minified/**/*.js'],
        dest: '<%= pkg.js %>/theme.min.js',
      }
    },

    /**
     * Create size report of your project
     * @link: https://github.com/ActivearkJWT/grunt-size-report
     */
    size_report: {
      css: {
        files: {
          list: ['<%= pkg.css %>/**/*.css']
        }
      },
      js: {
        files: {
          list: ['<%= pkg.js %>/**/*.js']
        }
      },
      svg: {
        files: {
          list: ['<%= pkg.img %>/**/*.svg']
        }
      },
      jpg: {
        files: {
          list: ['<%= pkg.img %>/**/*.jpg']
        }
      },
      png: {
        files: {
          list: ['<%= pkg.img %>/**/*.png']
        }
      },
      gif: {
        files: {
          list: ['<%= pkg.img %>/**/*.gif']
        }
      },
      image: {
        files: {
          list: ['<%= pkg.img %>/**/*.svg', '<%= pkg.img %>/**/*.gif', '<%= pkg.img %>/**/*.jpg', '<%= pkg.img %>/**/*.png']
        }
      },
    },

    /**
     * Compile Sass to CSS
     * @link: https://github.com/gruntjs/grunt-contrib-sass
     */
    sass: {
      dist: {
        options: {
          sourcemap: 'none', // auto, file, inline, none
          // trace: true, // Show a full traceback on error.
          // check: true, // Just check the Sass syntax, does not evaluate and write the output.
          compass: true,
          style: 'nested', //nested, compact, compressed, expanded
          quiet: true,
          noCache: true,
          loadPath: ['<%= pkg.dev_scss %>']
        },
        files: [{
          expand: true,
          cwd: '<%= pkg.dev_scss %>',
          src: ['**/*.scss'],
          dest: '<%= pkg.css %>',
          ext: '.min.css'
        }]
      }
    },

    /**
     * Minify JavaScript files with UglifyJS
     * @link: https://github.com/gruntjs/grunt-contrib-uglify
     */
    uglify: {
      development: {
        files: [{
          expand: true,
          cwd: '<%= pkg.dev_js %>',
          src: '**/*.js',
          dest: '<%= pkg.js %>/minified/',
          ext: '.min.js'
        }]
      }
    },

    /**
     * Clean
     * @link: https://www.npmjs.com/package/grunt-contrib-clean
     */
    clean: {
      build: ['.DS_Store', '**/.DS_Store', '.sass-cache'],
    },

    /**
     * Run predefined tasks whenever watched file patterns are added, changed or deleted
     * @link: https://github.com/gruntjs/grunt-contrib-watch
     */
    watch: {
      options: {
        nospawn: true,
        livereload: true,
      },
      js: {
        files: ['<%= pkg.dev_js %>/**/*.js'],
        tasks: ['uglify', 'concat', 'size_report:js'],
      },
      css: {
        files: ['<%= pkg.dev_scss %>/**/*.scss'],
        tasks: ['sass', 'clean', 'size_report:css']
      },
      php: {
        files: ['**/*.php']
      },
      html: {
        files: ['**/*.html']
      },
      svg: {
        files: ['<%= pkg.dev_img %>/*.svg'],
        tasks: ['imagemin', 'size_report:image']
      },
      png: {
        files: ['<%= pkg.dev_img %>/*.png'],
        tasks: ['imagemin', 'size_report:image']
      },
      jpg: {
        files: ['<%= pkg.dev_img %>/*.jpg'],
        tasks: ['imagemin', 'size_report:image']
      },
      gif: {
        files: ['<%= pkg.dev_img %>/*.gif'],
        tasks: ['imagemin', 'size_report:image']
      },
    },

  });

  grunt.registerTask('default', ['watch']);

};