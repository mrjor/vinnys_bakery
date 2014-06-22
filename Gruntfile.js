module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    
    connect: {
      server: {
          options: {
            //keepalive:true,
            //livereload : true,
            hostname : '*',
            open: true,
            port: 9001,
            base: './site/'
          }
      }
    },

    watch: {
      options: {
          livereload: true
      },
      
      other: {
        files: ['site/*.html','Gruntfile.js']
      },

      js : {
        files: ['site/js/**/*.js'],
        //tasks : ['clean','jshint', 'uglify']
      },
      
      scss: {
        files: ['site/css/*.css'],
        //tasks: ['clean','sass','csslint'],
      },
    },

    sass: {    
      dist: {
        options : {
          sourcemap : true
        },
        files: {
          'css/main.css': 'scss/main.scss'
        }
      },
      prod: {
        options : {
          banner : "/*dit is een banner kan ook met versie en datums vermeld worden*/"
        },
        files: {
          'css/main.css': 'scss/main.scss'
        }
      }
    },
    //clean moeten we aanpassen
    clean: ["css", "js"],

    csslint: {
      options: {
        csslintrc: '.csslintrc'
      },
      csstest : {
        src: ['css/*.css']
      }
    },

    jshint: {
      options : {
        jshintrc : true
      },
      all: [/*'Gruntfile.js',*/ 'javascript/**/*.js']
    },

    // concat: {
    //   options: {
    //   stripBanners: true,
    //   banner: '/*! <%= pkg.name %> - v<%= pkg.version %> - ' +
    //     '<%= grunt.template.today("yyyy-mm-dd") %> */',
    //   },
    //   dist: {
    //     src: ['javascript/**/*.js'],
    //     dest: 'dist/built.js'
    //   },
    // },

    uglify: {
      options : {
        sourceMap: true,
        banner: '/*! <%= pkg.name %> - v<%= pkg.version %> - ' +
        '<%= grunt.template.today("yyyy-mm-dd") %> */',
      },
      my_target: {
        files: {
          'js/built.min.js': ['javascript/**/*.js']
        }
      }
    }

  });

  // Load the plugin that provides the "connect" task.
  grunt.loadNpmTasks('grunt-contrib-connect');

  // Load the plugin that provides the "watch" task.
  grunt.loadNpmTasks('grunt-contrib-watch');

  // Load the plugin that provides the "sass" task.
  grunt.loadNpmTasks('grunt-contrib-sass');

  // Load the plugin that provides the "clean" task.
  grunt.loadNpmTasks('grunt-contrib-clean');

  // Load the plugin that provides the "csslint" task.
  grunt.loadNpmTasks('grunt-contrib-csslint');

  // Load the plugin that provides the "jshint" task.
  grunt.loadNpmTasks('grunt-contrib-jshint');

  //Load the plugin that provides the "concat" task.
  //grunt.loadNpmTasks('grunt-contrib-concat');

  // Load the plugin that provides the "uglify" task.
  grunt.loadNpmTasks('grunt-contrib-uglify');

  // Default task(s).
  grunt.registerTask('serve', ['clean','sass:dist','connect','watch']);
  grunt.registerTask('live', ['connect','watch']);

};

