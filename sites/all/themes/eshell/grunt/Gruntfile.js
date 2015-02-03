module.exports = function(grunt) {
  grunt.initConfig({
     pkg: grunt.file.readJSON('package.json'),
     concat: {
        main: {
           src: [
              '../css/src/base.less',
              '../css/src/regions/*.less',
              '../css/src/media-queries/*.less',
           ],
           dest: '../css/production.less'
        }
     },
     less: {
        compile: {
           files: { 
              // format "target" : "source"
              "../css/production.css": "../css/production.less"
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
          '../css/src/base.less',
          '../css/src/media-queries/*.less',
          '../css/src/regions/*.less',
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
