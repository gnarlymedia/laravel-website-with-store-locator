module.exports = function(grunt) {

  //Initializing the configuration object
    grunt.initConfig({

      // Task configuration
    less: {
        development: {
            options: {
              compress: true  //minifying the result
            },
            files: {
              //compiling frontend.less into frontend.css
              "./public/assets/stylesheets/frontend.css":"./app/assets/stylesheets/frontend.less",
              //compiling backend.less into backend.css
              "./public/assets/stylesheets/backend.css":"./app/assets/stylesheets/backend.less",
              //compiling google_locations.less into google_locations.css
              "./public/assets/stylesheets/google_locations.css":"./app/assets/stylesheets/google_locations.less"
            }
        }
    },
    concat: {
      options: {
        separator: ';'
      },
      js_frontend: {
        src: [
          './bower_components/jquery/dist/jquery.js',
          './bower_components/bootstrap/dist/js/bootstrap.js',
/*           './bower_components/bootstrap/js/modal.js', */
/*           './bower_components/jquery.stellar/jquery.stellar.js', */
          './bower_components/bootstrap/docs/assets/js/vendor/holder.js',
          './app/assets/javascript/frontend.js'
        ],
        dest: './public/assets/javascript/frontend.js'
      },
      js_backend: {
        src: [
          './bower_components/jquery/dist/jquery.js',
          './bower_components/bootstrap/dist/js/bootstrap.js',
          './app/assets/javascript/backend.js'
        ],
        dest: './public/assets/javascript/backend.js'
      },
      css_frontend: {
        src: [
            './public/assets/stylesheets/frontend.css',
            './public/assets/fonts/webfontkit/stylesheet.css',
            './public/assets/stylesheets/sub.css',
            './public/assets/stylesheets/google_locations.css'
        ],
        dest: './public/assets/stylesheets/combined.css'
      }
    },
    uglify: {
      options: {
        mangle: false  // Use if you want the names of your functions and variables unchanged
      },
      frontend: {
        files: {
          './public/assets/javascript/frontend.js': './public/assets/javascript/frontend.js'
        }
      },
      backend: {
        files: {
          './public/assets/javascript/backend.js': './public/assets/javascript/backend.js'
        }
      }
    },
    phpunit: {
        classes: {
            dir: 'app/tests/'   //location of the tests
        },
        options: {
            bin: 'vendor/bin/phpunit',
            colors: true
        }
    },
    watch: {
        js_frontend: {
          files: [
            //watched files
            './bower_components/jquery/jquery.js',
            './bower_components/bootstrap/dist/js/bootstrap.js',
            './app/assets/javascript/frontend.js'
            ],
          tasks: [     								//tasks to run
          	'concat:js_frontend',
          	'uglify:frontend'
          ],
          options: {
            livereload: true                        //reloads the browser
          }
        },
        js_backend: {
          files: [									//watched files
            './bower_components/jquery/jquery.js',
            './bower_components/bootstrap/dist/js/bootstrap.js',
            './app/assets/javascript/backend.js'
          ],   
          tasks: [		     						//tasks to run
          	'concat:js_backend',
          	'uglify:backend'
          ],
          options: {
            livereload: true                        //reloads the browser
          }
        },
        reload_frontend: {
          files: [
            //watched files
            './app/routes.php',
            './app/views/*',
            './app/views/**/*',
            './app/views/layouts/**',
            './app/models/**',
            './app/controllers/**',
            './public/assets/stylesheets/**'
          ],   
/*           tasks: [''],    							//tasks to run */
          options: {
            livereload: true                        //reloads the browser
          }
        },
        less: {
          files: [
              './app/assets/stylesheets/*.less',
              './bower_components/bootstrap/less/**'
          ],  //watched files
          tasks: ['less','concat:css_frontend'],                          //tasks to run
          options: {
            livereload: true                        //reloads the browser
          }
        },
        tests: {
          files: [						  			//the task will run only when you save files in this location
          	'app/controllers/*.php',
          	'app/models/*.php',
          	'app/tests/**',
          	'app/tests/models/*.php',
          	'app/tests/controllers/functional/*.php',
          	'app/tests/views/*'],
          tasks: ['phpunit']
        }
      },
      'angular-builder': {
	    options: {
	        main: 'mainModuleName'
	    },
	    app: {
	        src:  'src/**/*.js',
	        dest: 'build/project.js'
	    },
	  },
    });

  // Plugin loading
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-less');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-phpunit');
  grunt.loadNpmTasks('grunt-angular-builder');

  // Task definition
  grunt.registerTask('default', ['watch']);
  grunt.registerTask ('release', ['angular-builder']);
  grunt.registerTask ('debug', ['angular-builder::debug']);

};
