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
	uglify: {
	  target: {
	    files: {
	      'assets/js/app.min.js': 'src/js/*.js'
	    }
	  }
	},
	watch: {
	  css: {
		files: ['sass/**/*.scss'],
		tasks: ['sass']
	  },
	  imagemin: {
	    files: ['img/*.{png,jpg,gif}'],
	    tasks: ['imagemin']
	  },
	  uglify: {
	    files: ['src/js/*.js'],
	    tasks: ['uglify']
	  }
	}
  });
  
  grunt.loadNpmTasks('grunt-mkdir');
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-imagemin');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.registerTask('default', ['sass, imagemin, uglify']);
};