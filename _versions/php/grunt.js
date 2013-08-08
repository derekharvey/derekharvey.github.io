module.exports = function(grunt) {

 grunt.initConfig({
    pkg: '<json:package.json>',
    meta: {
      banner: '/*! <%= pkg.name %> - v<%= pkg.version %> - ' + '<%= grunt.template.today("yyyy-mm-dd") %> */'
    },
    sass: {
      dist: {
        files: {
          'web/assets/css/compressed.css': 'web/assets/css/compressed.scss'
        }
      }
    },
    cssmin: {
      main: {
        src: 'web/assets/css/compressed.css',
        dest: 'web/assets/css/compressed.css'
      }
    },
    watch: {
      sass: {
        files: ['web/assets/css/*.scss', 'web/assets/css/devices/*.scss'],
        tasks: 'sass cssmin'
      }
    }
  });

  grunt.loadNpmTasks('grunt-sass'); // for sass compilation
  grunt.loadNpmTasks('grunt-css'); // for minification

  grunt.registerTask('default', ['sass', 'cssmin']);
  grunt.registerTask('sasscompile', ['sass', 'cssmin']);
}
