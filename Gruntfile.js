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
        style: 'compressed'
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
  bowercopy: {
    options: {
      srcPrefix: 'bower_components'
    },
    scripts: {
      options: {
        destPrefix: 'assets/scripts/vendor'
      },
      files: {
        'slideout/slideout.min.js': 'slideout.js/dist/slideout.min.js',
      }
    }
  },
  sprite:{
    all: {
      cssFormat: 'scss',
      src: 'sprites/*.png',
      dest: 'assets/img/spritesheet.png',
      destCss: 'sass/site/_sprites.scss'
    }
  },
  compress: {
    main: {
      options: {
        archive: 'release/mtac-theme.zip'
      },
      files: [
        {src: ['*.php'], filter: 'isFile'}, // includes files in path
        {src: ['README.md'], filter: 'isFile'}, // includes files in path
        {src: ['readme.txt'], filter: 'isFile'}, // includes files in path
        {src: ['*.css'], filter: 'isFile'}, // includes files in path
        {src: ['*.png'], filter: 'isFile'}, // includes files in path
        {src: ['*.yml'], filter: 'isFile'}, // includes files in path
        {src: ['*.xml'], filter: 'isFile'}, // includes files in path
        {src: ['assets/**']},
        {src: ['inc/**']},
        {src: ['layouts/**']},
        {src: ['fonts/**']},
        {src: ['template-parts/**']},
        {src: ['languages/**']},
        {src: ['js/**']},
        {src: ['css/**']},
        {src: ['fpw2_views/**']},
        {src: ['woocommerce/**']},
      ]
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
	  },
    compress: {
      files: ['assets/css/style.css','assets/js/app.min.js','assets/img/*.{png,jpg,gif}','css/**','img/*.{png,jpg,gif}','fpw2_views/*.php'],
      tasks: ['compress']
    },
	}
  });

  grunt.loadNpmTasks('grunt-mkdir');
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-imagemin');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-bowercopy');
  grunt.loadNpmTasks('grunt-spritesmith');
  grunt.loadNpmTasks('grunt-contrib-compress');
  grunt.registerTask('default', ['sass', 'imagemin', 'bowercopy', 'uglify', 'compress']);
};
