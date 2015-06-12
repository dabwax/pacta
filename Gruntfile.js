module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    uglify: {
      pacta: {
        files: {
          'webroot/js/cms.min.js': [
            'plugins/Cms/webroot/js/cms.js',
            'webroot/vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js',
            'webroot/vendor/bootstrap-datepicker/dist/locales/bootstrap-datepicker.pt-BR.min.js',
            'webroot/vendor/jquery.inputmask/dist/jquery.inputmask.bundle.min.js',
            'webroot/vendor/noty/js/noty/packaged/jquery.noty.packaged.min.js',
          ],
        }
      }
    },
    cssmin: {
      target: {
        files: {
          'webroot/css/cms.min.css': [
            'plugins/Cms/webroot/css/cms.css',
            'webroot/css/animate.css',
            'webroot/vendor/bootstrap-datepicker/dist/css/bootstrap-datepicker3.min.css',
          ]
        }
      }
    },
    watch: {
      css: {
        files: [
          'plugins/Cms/webroot/css/cms.css',
        ],
        tasks: ['newer:cssmin'],
        options: {
          livereload: true,
        }
      },
      js: {
        files: [
          'plugins/Cms/webroot/js/cms.js'
        ],
        tasks: ['newer:uglify'],
        options: {
          livereload: true,
        }
      }
    }
  });

  // Load the plugin that provides the "uglify" task.
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-cssmin');
  grunt.loadNpmTasks('grunt-newer');
  grunt.loadNpmTasks('grunt-contrib-watch');

  // Default task(s).
  grunt.registerTask('default', ['newer:uglify', 'newer:cssmin']);

};