module.exports = function(grunt) {
  //Project Configuration
  grunt.initConfig({
	pkg: grunt.file.readJSON('package.json'),
	mkdir: {
	  all: {
		options: {
		  create: ['assets/css', 'assets/js','assets/img']
		}
	  }
	},
	sass: {
	  dist: {
	    files: {
	      'assets/css/style.css' : 'sass/style.scss'
	    }
	  }
	},
  
	watch: {
	  css: {
		files: ['sass/*/*.scss'],
		tasks: ['sass']
	  }
	}
  });
  
  grunt.loadNpmTasks('grunt-mkdir');
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.registerTask('default', ['mkdir']);
};