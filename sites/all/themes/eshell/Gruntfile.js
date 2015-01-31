module.exports = function(grunt) {
  grunt.initConfig({
     pkg: grunt.file.readJSON('package.json'),
     concat: {
        main: {
           src: [
              'css/normalize.css',
              'less/src/base.less',
              'less/src/regions/*.less',
              'less/src/media-queries/*.less',
           ],
           dest: 'less/production.less'
        }
     },
     less: {
        compile: {
           files: { 
              // format "target" : "source"
              "css/production.css": "less/production.less"
           }
        }
     },
     /* 
     csscomb: {
        main: {
            files: {
                'production.css': ['clean.css'],
            }
        }
    },
    */
     watch: {
        files: [
          'css/normalize.css',
          'less/src/base.less',
          'less/src/media-queries/*.less',
          'less/src/regions/*.less',
        ],
        tasks: ['concat', 'less'] 
     }
  });
  
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-assemble-less');
  //grunt.loadNpmTasks('grunt-csscomb');
  
  grunt.registerTask('default', ['concat', 'less']);

  //grunt.registerTask('clean', ['csscomb']);
};
