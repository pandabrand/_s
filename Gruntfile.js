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
	    options: {
	      require: 'susy',
	    },
	    files: {
	      'assets/css/style.css' : 'sass/style.scss'
	    }
	  }
	},
	imagemin: {
	   dist: {
		  options: {
			optimizationLevel: 5
		  },
		  files: [{
			 expand: true,
			 cwd: 'img',
			 src: ['*.{png,jpg,gif}'],
			 dest: 'assets/img'
		  }]
	   }
	},
	watch: {
	  css: {
		files: ['sass/*/*.scss'],
		tasks: ['sass']
	  },
	  imagemin: {
	    files: ['img/*.{png,jpg,gif}'],
	    tasks: ['imagemin']
	  }
	}
  });
  
  grunt.loadNpmTasks('grunt-mkdir');
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-imagemin');
  grunt.registerTask('default', ['sass, imagemin']);
};